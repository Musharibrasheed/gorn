<?php
namespace App\Models\Repositories;
use App\Models\Page;
use App\Models\PageDescription;

class PageRepository  extends AbstractRepository
{
    public $model;
    public $description_model;
    protected $table                = 'pages';
    protected $description_table    = 'pages_description';
    protected $foriegn_key          = 'page_id';
    protected $primary_key          = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Page $page
     *
     * @return void
     */
    public function __construct(
        Page $page,
        PageDescription $pageDescription
    ) {
        $this->model                = $page;
        $this->description_model    = $pageDescription;
    }

    public function getDescriptionById($id,$language_id=1)
    {

        $page_description = PageDescription::where('page_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $page_description;
    }

    public function getPagesList()
    {
        $language_id =  1;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
            )
            ->where($this->description_table.'.language_id',$language_id)
            ->select(['pages.id', 'pages_description.title', 'pages_description.short_title', 'pages.slug', 'pages.status', 'pages.created_at'])->get();
    }

    public function getFrontPageBySlug($slug)
    {
        $language_id = 1;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->table.'.status','Active')
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->table.'.slug',$slug)
            ->select(['pages.*', 'pages_description.*'])
            ->first();
    }

    public function add($data)
    {
        $language_id            =   $language->id ?? 1;
        $slug                   =   $this->createSlug($data->short_title);
        $user                   =   isUserLoggedIn();


        $insert                 =   new $this->model;
        $insert->slug           =   $slug;
        $insert->image          =   str_replace(url('/'),'',$data->page_image);
        $insert->order          =   $this->model->count()+1;
        $insert->status         =   $data->status;
        $insert->social_links   =   $data->social_links ?? 0;
        $insert->newsletter     =   $data->newsletter ?? 0;
        $insert->created_by     =   ($user) ? $user['user_id'] : 0;
        $insert->save();

   
        $page_id                =   $insert->id;

        $template_content       =   serialize( $this->templateContent($data,$language_id) ); //Get Content for each template

        $template                               =   $data->template;
        $title                                  =   $data->title;
        $short_title                            =   $data->short_title;
        $content                                =   $data->content;
        //$short_content                          = $data->{'short_content-'.$language->id};
        $meta_title                             =   $data->meta_title;
        $meta_keywords                          =   $data->meta_keywords;
        $meta_description                       =   $data->meta_description;
        $page_video                             =   $data->page_video;



        $insert_description                     =   new $this->description_model;
        $insert_description->page_id            =   $page_id;
        $insert_description->language_id        =   $language_id;
        $insert_description->template           =   $template;
        $insert_description->title              =   $title;
        $insert_description->short_title        =   $short_title;
        $insert_description->content            =   $content;
        $insert_description->meta_title         =   $meta_title;
        $insert_description->meta_keywords      =   $meta_keywords;
        $insert_description->meta_description   =   $meta_description;
        $insert_description->page_video         =   $page_video;
        $insert_description->template_content   =   $template_content;
        $insert_description->save();

        return $page_id;
    }

    public function update($data,$page_id)
    {
        $language_id            =   $language->id ?? 1;        

        $insert                 =   $this->model::find($page_id);
        $insert->image          =   str_replace(url('/'),'',$data->page_image);
        $insert->order          =   $this->model->count()+1;
        $insert->status         =   $data->status;
        $insert->social_links   =   $data->social_links ?? 0;
        $insert->newsletter     =   $data->newsletter ?? 0;
        $insert->save();

        $template_content       =   serialize( $this->templateContent($data) ); //Get Content for each template

        $template                               =   $data->template;
        $title                                  =   $data->title;
        $short_title                            =   $data->short_title;
        $content                                =   $data->content;
        $meta_title                             =   $data->meta_title;
        $meta_keywords                          =   $data->meta_keywords;
        $meta_description                       =   $data->meta_description;
        $page_video                             =   $data->page_video;



        $insert_description                     = $this->description_model::where('page_id',$page_id)->where('language_id',$language_id)->first();
        $insert_description->page_id            =   $page_id;
        $insert_description->language_id        =   $language_id;
        $insert_description->template           =   $template;
        $insert_description->title              =   $title;
        $insert_description->short_title        =   $short_title;
        $insert_description->content            =   $content;
        //$insert_description->short_content      = $short_content;
        $insert_description->meta_title         =   $meta_title;
        $insert_description->meta_keywords      =   $meta_keywords;
        $insert_description->meta_description   =   $meta_description;
        $insert_description->page_video         =   $page_video;
        $insert_description->template_content   =   $template_content;
        $insert_description->save();

        return $page_id;
    }

    public function templateContent($data) //Set fields as per template
    {
        $template_content = array();
        
        if($data->template == 'home')
        {
            $template_content['about_gorn_heading'] = $data->about_gorn_heading;
            $template_content['about_gorn_text']    = $data->about_gorn_text;

            $template_content['section2_heading']    = $data->section2_heading;
            $template_content['section2_bx1_image']    = str_replace( env('APP_URL').'/','',$data->section2_bx1_image);
            $template_content['section2_bx1_heading']    = $data->section2_bx1_heading;
            $template_content['section2_bx1_text']    = $data->section2_bx1_text;
            
            $template_content['section2_bx2_image']    = str_replace( env('APP_URL').'/','',$data->section2_bx2_image);
            $template_content['section2_bx2_heading']    = $data->section2_bx2_heading;
            $template_content['section2_bx2_text']    = $data->section2_bx2_text;
            
            $template_content['section2_bx3_image']    = str_replace( env('APP_URL').'/','',$data->section3_bx3_image);
            $template_content['section3_image']    = str_replace( env('APP_URL').'/','',$data->section3_image);
            $template_content['section2_bx3_text']    = $data->section2_bx3_text;
            
            $template_content['section2_bx3_heading']    = $data->section2_bx3_heading;
            $template_content['section3_heading']    = $data->section3_heading;
            $template_content['section3_text']    = $data->section3_text;

            $template_content['section_left1']    = $data->section_left1;
            $template_content['section_right1']    = $data->section_right1;
            $template_content['section_right2']    = $data->section_right2;
            $template_content['section_right3']    = $data->section_right3;
            $template_content['section_right4']    = $data->section_right4;

        }

        if($data->template == 'healthcare-professionals')
        {
            $template_content['hc_sec1_heading'] = $data->hc_sec1_heading;
            $template_content['hc_section1_image'] = str_replace( env('APP_URL').'/','',$data->hc_section1_image);
            $template_content['hc_sec1_text']    = $data->hc_sec1_text;
            
            $template_content['hc_section2_image'] = str_replace( env('APP_URL').'/','',$data->hc_section2_image);;
            $template_content['hc_sec2_tagline'] = $data->hc_sec2_tagline;
            $template_content['hc_sec2_heading']    = $data->hc_sec2_heading;
            $template_content['hc_sec2_text']    = $data->hc_sec2_text;
            
            $template_content['hc_sec3_heading'] = $data->hc_sec3_heading;
            $template_content['hc_sec3_text']    = $data->hc_sec3_text;

            $template_content['hc_sec4_heading']    = $data->hc_sec4_heading;
            $template_content['hc_sec4_tagline']    = $data->hc_sec4_tagline;
            $template_content['hc_sec4_bx1_heading']    = $data->hc_sec4_bx1_heading;
            $template_content['hc_sec4_bx1_text']    = $data->hc_sec4_bx1_text;

            $template_content['hc_sec4_bx2_heading']    = $data->hc_sec4_bx2_heading;
            $template_content['hc_sec4_bx2_text']    = $data->hc_sec4_bx2_text;

            $template_content['hc_sec4_bx3_heading']    = $data->hc_sec4_bx3_heading;
            $template_content['hc_sec4_bx3_text']    = $data->hc_sec4_bx3_text;

        }

        if($data->template == 'facilities')
        {
            $template_content['fac_sec1_tagline'] = $data->fac_sec1_tagline;
            $template_content['fac_sec1_heading']    = $data->fac_sec1_heading;            
            $template_content['fac_sec1_bx1_heading'] = $data->fac_sec1_bx1_heading;
            $template_content['fac_sec1_bx1_text'] = $data->fac_sec1_bx1_text;
            $template_content['fac_sec1_bx2_heading'] = $data->fac_sec1_bx2_heading;
            $template_content['fac_sec1_bx2_text'] = $data->fac_sec1_bx2_text;
            $template_content['fac_sec1_bx3_heading'] = $data->fac_sec1_bx3_heading;
            $template_content['fac_sec1_bx3_text'] = $data->fac_sec1_bx3_text;
            $template_content['fac_sec1_bx4_heading'] = $data->fac_sec1_bx4_heading;
            $template_content['fac_sec1_bx4_text'] = $data->fac_sec1_bx4_text;
            $template_content['fac_sec1_bx5_heading'] = $data->fac_sec1_bx5_heading;
            $template_content['fac_sec1_bx5_text'] = $data->fac_sec1_bx5_text;
            $template_content['fac_sec1_bx6_heading'] = $data->fac_sec1_bx6_heading;
            $template_content['fac_sec1_bx6_text'] = $data->fac_sec1_bx6_text;

            $template_content['fac_sec2_heading'] = $data->fac_sec2_heading;
            $template_content['fac_sec2_text'] = $data->fac_sec2_text;

            $template_content['fac_sec3_text'] = $data->fac_sec3_text;

            $template_content['fac_sec4_heading'] = $data->fac_sec4_heading;
            $template_content['fac_sec4_text'] = $data->fac_sec4_text;

            $template_content['fac_sec5_heading'] = $data->fac_sec2_heading;

            

        }

        if($data->template == 'staffing')
        {
            $template_content['staff_sec1_heading']    = $data->staff_sec1_heading;            
            $template_content['staff_sec1_bx1_heading'] = $data->staff_sec1_bx1_heading;
            $template_content['staff_sec1_bx1_text'] = $data->staff_sec1_bx1_text;
            $template_content['staff_sec1_bx2_heading'] = $data->staff_sec1_bx2_heading;
            $template_content['staff_sec1_bx2_text'] = $data->staff_sec1_bx2_text;
            $template_content['staff_sec1_bx3_heading'] = $data->staff_sec1_bx3_heading;
            $template_content['staff_sec1_bx3_text'] = $data->staff_sec1_bx3_text;

            $template_content['staff_sec2_bx1_heading'] = $data->staff_sec2_bx1_heading;
            $template_content['staff_sec2_bx1_text'] = $data->staff_sec2_bx1_text;
            $template_content['staff_sec2_bx2_heading'] = $data->staff_sec2_bx2_heading;
            $template_content['staff_sec2_bx2_text'] = $data->staff_sec2_bx2_text;

            $template_content['staff_sec3_text'] = $data->staff_sec3_text;

            $template_content['staff_sec4_text'] = $data->staff_sec4_text;
        }

        if($data->template == 'request-demo')
        {
            $template_content['rd_sec1_tagline']    = $data->rd_sec1_tagline;            
            $template_content['rd_sec1_heading'] = $data->rd_sec1_heading;
            $template_content['rd_sec1_text'] = $data->rd_sec1_text;
            
            $template_content['rd_sec2_heading'] = $data->rd_sec2_heading;
            $template_content['rd_sec2_bx1_heading'] = $data->rd_sec2_bx1_heading;
            $template_content['rd_sec2_bx2_heading'] = $data->rd_sec2_bx2_heading;
            $template_content['rd_sec2_bx3_heading'] = $data->rd_sec2_bx3_heading;
            $template_content['rd_sec2_bx4_heading'] = $data->rd_sec2_bx4_heading;
            $template_content['rd_sec2_bx5_heading'] = $data->rd_sec2_bx5_heading;
            $template_content['rd_sec2_bx6_heading'] = $data->rd_sec2_bx6_heading;

            $template_content['rd_sec2_bx1_text'] = $data->rd_sec2_bx1_text;
            $template_content['rd_sec2_bx2_text'] = $data->rd_sec2_bx2_text;
            $template_content['rd_sec2_bx3_text'] = $data->rd_sec2_bx3_text;
            $template_content['rd_sec2_bx4_text'] = $data->rd_sec2_bx4_text;
            $template_content['rd_sec2_bx5_text'] = $data->rd_sec2_bx5_text;
            $template_content['rd_sec2_bx6_text'] = $data->rd_sec2_bx6_text;

            $template_content['rd_sec3_heading'] = $data->rd_sec3_heading;
            $template_content['rd_sec3_subheading'] = $data->rd_sec3_subheading;
            $template_content['rd_sec3_text'] = $data->rd_sec3_text;

            $template_content['rd_sec4_tagline'] = $data->rd_sec4_tagline;
            $template_content['rd_sec4_heading'] = $data->rd_sec4_heading;
        }

        if($data->template == 'about')
        {
            $template_content['abt_sec1_heading']    = $data->abt_sec1_heading;            
            $template_content['abt_sec1_text']    = $data->abt_sec1_text;

            $template_content['abt_sec2_heading']    = $data->abt_sec2_heading;            
            $template_content['abt_sec2_text']    = $data->abt_sec2_text;            
        }

        if($data->template == 'contact')
        {
            $template_content['contact_heading']    = $data->contact_heading;            
            $template_content['contact_ci']         = $data->contact_ci;
            $template_content['contact_add']        = $data->contact_add;            
            $template_content['contact_email']      = $data->contact_email;            
            $template_content['contact_phn']        = $data->contact_phn;            
            $template_content['contact_line']       = $data->contact_line;            
            $template_content['contact_bx1_head']       = $data->contact_bx1_head;            
            $template_content['contact_bx2_head']       = $data->contact_bx2_head;            
            $template_content['contact_bx3_head']       = $data->contact_bx3_head;            
        }

        if($data->template == 'faqs')
        {
            $template_content['faqs_q1']    = $data->faqs_q1;            
            $template_content['faqs_q2']    = $data->faqs_q2;            
            $template_content['faqs_q3']    = $data->faqs_q3;            
            $template_content['faqs_q4']    = $data->faqs_q4;   

            $template_content['faqs_ans1']    = $data->faqs_ans1;    
            $template_content['faqs_ans2']    = $data->faqs_ans2;    
            $template_content['faqs_ans3']    = $data->faqs_ans3;    
            $template_content['faqs_ans4']    = $data->faqs_ans4;              
        }
        /*
        if($data->{'template-'.$language_id} == 'list-your-hotel')
        {
            $template_content['package_title-'.$language_id]        = $data->{'package_title-'.$language_id};
            $template_content['sub_title-'.$language_id]            = $data->{'sub_title-'.$language_id};
            $template_content['pprice-'.$language_id]               = $data->{'pprice-'.$language_id};
            $template_content['package_1-'.$language_id]            = $data->{'package_1-'.$language_id};
            $template_content['package_link-'.$language_id]         = $data->{'package_link-'.$language_id};
            $template_content['package_link_title-'.$language_id]   = $data->{'package_link_title-'.$language_id};

            $template_content['package_title2-'.$language_id]       = $data->{'package_title2-'.$language_id};
            $template_content['sub_title2-'.$language_id]           = $data->{'sub_title2-'.$language_id};
            $template_content['pprice2-'.$language_id]              = $data->{'pprice2-'.$language_id};
            $template_content['package_2-'.$language_id]            = $data->{'package_2-'.$language_id};
            $template_content['package_link2-'.$language_id]        = $data->{'package_link2-'.$language_id};
            $template_content['package_link_title2-'.$language_id]  = $data->{'package_link_title2-'.$language_id};

            $template_content['package_title3-'.$language_id]       = $data->{'package_title3-'.$language_id};
            $template_content['sub_title3-'.$language_id]           = $data->{'sub_title3-'.$language_id};
            $template_content['pprice3-'.$language_id]              = $data->{'pprice3-'.$language_id};
            $template_content['package_3-'.$language_id]            = $data->{'package_3-'.$language_id};
            $template_content['package_link3-'.$language_id]        = $data->{'package_link3-'.$language_id};
            $template_content['package_link_title3-'.$language_id]  = $data->{'package_link_title3-'.$language_id};
        }

        if($data->{'template-'.$language_id} == 'list-your-dmc')
        {
            $template_content['package_titledmc-'.$language_id]        = $data->{'package_titledmc-'.$language_id};
            $template_content['sub_titledmc-'.$language_id]            = $data->{'sub_titledmc-'.$language_id};
            $template_content['ppricedmc-'.$language_id]               = $data->{'ppricedmc-'.$language_id};
            $template_content['packagedmc_1-'.$language_id]            = $data->{'packagedmc_1-'.$language_id};
            $template_content['package_linkdmc-'.$language_id]         = $data->{'package_linkdmc-'.$language_id};
            $template_content['package_link_titledmc-'.$language_id]   = $data->{'package_link_titledmc-'.$language_id};

            $template_content['package_titledmc2-'.$language_id]       = $data->{'package_titledmc2-'.$language_id};
            $template_content['sub_titledmc2-'.$language_id]           = $data->{'sub_titledmc2-'.$language_id};
            $template_content['ppricedmc2-'.$language_id]              = $data->{'ppricedmc2-'.$language_id};
            $template_content['package_dmc2-'.$language_id]            = $data->{'package_dmc2-'.$language_id};
            $template_content['package_linkdmc2-'.$language_id]        = $data->{'package_linkdmc2-'.$language_id};
            $template_content['package_link_titledmc2-'.$language_id]  = $data->{'package_link_titledmc2-'.$language_id};

            $template_content['package_titledmc3-'.$language_id]       = $data->{'package_titledmc3-'.$language_id};
            $template_content['sub_titledmc3-'.$language_id]           = $data->{'sub_titledmc3-'.$language_id};
            $template_content['ppricedmc3-'.$language_id]              = $data->{'ppricedmc3-'.$language_id};
            $template_content['package_dmc3-'.$language_id]            = $data->{'package_dmc3-'.$language_id};
            $template_content['package_linkdmc3-'.$language_id]        = $data->{'package_linkdmc3-'.$language_id};
            $template_content['package_link_titledmc3-'.$language_id]  = $data->{'package_link_titledmc3-'.$language_id};
        }
        if($data->{'template-'.$language_id} == 'privacy-policy')
        {
            $template_content['content-'.$language_id]        = $data->{'content-'.$language_id};
        }
        */

        return $template_content;
    }

    public function remove($id)
    {
        $delete         = $this->model::where($this->primary_key,$id)->delete();
        $delete_desc    = $this->description_model::where($this->foriegn_key,$id)->delete();

        if($delete && $delete_desc)
            return TRUE;
        else
            return FALSE;
    }
}
