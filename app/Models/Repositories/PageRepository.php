<?php
namespace App\Models\Repositories;
use App\Models\Page;
use App\Models\PageDescription;
use App\Models\Languages;

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

        if($language_id == 0)
        {
            $language_id = getlanguage()->id;
        }

        $page_description = PageDescription::where('page_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $page_description;
    }

    public function getPagesList()
    {
        $language_id = getlanguage()->id ?? 1;

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
        $language_id = getlanguage()->id;

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
        $language               =   getlanguage();
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
        $insert_description->language_id        =   $language->id;
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
        $languages = Languages::where('status','Active')->get();
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
        // print_r($data->all());
        // exit;
        $template_content = array();
        
        if($data->template == 'home')
        {
            $template_content['page_video_test-']        = $data->page_video_test;
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
