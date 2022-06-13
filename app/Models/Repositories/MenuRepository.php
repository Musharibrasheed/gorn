<?php
namespace App\Models\Repositories;
use App\Models\Menu;
use App\Models\MenuDescription;
use App\Models\Languages;
use App\Models\Page;
use App\Models\PageDescription;


class MenuRepository  extends AbstractRepository
{
    public $model;
    protected $table                            = 'menu';
    protected $description_table                = 'menu_description';
    protected $page_table                       = 'pages';
    protected $page_description_table           = 'pages_description';
    protected $foriegn_key                      = 'menu_id';
    protected $primary_key                      = 'id';
    protected $foriegn_key_page                 = 'page_id';


    /**
     * Creates a new model instance
     * @param App\Models\Menu $page
     *
     * @return void
     */
    public function __construct(
        Menu $menu,
        MenuDescription $menuDescription,
        Page $page,
        PageDescription $pageDescription

    ) {
        $this->model                                = $menu;
        $this->description_model                    = $menuDescription;
        $this->page_model                           = $page;
        $this->page_description_model               = $pageDescription;
    }

    public function getMenuByType($type)
    {
        return $this->model->where('menu_type',$type)->orderBy('sort','Asc')->get();
    }

    public function getDescriptionById($id,$language_id)
    {
        //$language_id = getlanguage()->id;
        $menu_description = MenuDescription::where('menu_id',$id)
            ->where('language_id',$language_id)
            ->first();
        return $menu_description;
    }

    public function getMenuListforpage()
    {
        $language_id = getlanguage()->id;

        return  $getdetails = MenuDescription::leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
                                    ->where('menu_description.language_id', '=' , $language_id)
                                    ->select('menu_description.title','pages.slug')
                                    ->get();
    }


    public function getMenuList()
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
            ->select(['menu.id as mid', 'menu.menu_type', 'menu.status', 'menu_description.title', 'menu.url','menu.created_at']);
    }


    public function add($data)
    {
        $user                   =   isUserLoggedIn();
        $sort                   =   $this->model::where('menu_type',$data->menu_type)->count();

        $language_id            =   $data->language_id ?? 1;
        $title                  =   $data->title ?? '';

        $insert                 =   new $this->model;
        $insert->menu_type      =   $data->menu_type;
        $insert->status         =   $data->status;
        $insert->type           =   $data->type;
        $insert->page_id        =   $data->page_id ?? 0;    
        $insert->url            =   $data->url ?? '#';    
        $insert->hide_customer  =   $data->hide_customer ?? 0;
        $insert->sort           =   $sort ?? 0;
        $insert->new_window     =   $data->new_window ?? 0; 
        $insert->created_by     =   ($user) ? $user['user_id'] : 0;
        $insert->save();
        $menu_id = $insert->id;

        $insert_description                     = new $this->description_model;
        $insert_description->menu_id            = $insert->id;
        $insert_description->language_id        = $language_id;
        $insert_description->title              = $title;
        $insert_description->save();

        return $menu_id;
    }

    public function update($data,$menu_id)
    {
 
        $insert                 =   $this->model::where('id',$menu_id)->first();
        $user                   =   isUserLoggedIn();
        $language_id            =   $language->id ?? 1;

        if( $data->sort > $insert->sort ) {             
            $sort_to_update = $this->model::where('menu_type', $insert->menu_type  )
            ->where('sort','<=', $data->sort  )
            ->where('sort','>', $insert->sort  )
            ->orderBy('sort','Asc'  )
            ->get();

            $insert->sort = $data->sort;
            foreach ($sort_to_update as $key => $value) {
                $order = $this->model::where('id', $value->id)->first();
                $order->sort = $order->sort - 1;
                $order->save();
            }
        }        

        if( $data->sort < $insert->sort ) { 
            
            $sort_to_update = $this->model::where('menu_type', $insert->menu_type  )
            ->where('sort','>=', $data->sort  )
            ->where('sort','<', $insert->sort  )
            ->orderBy('sort','Asc'  )
            ->get();

            $insert->sort = $data->sort;
            foreach ($sort_to_update as $key => $value) {
                $order = $this->model::where('id', $value->id)->first();
                $order->sort = $order->sort + 1;
                $order->save();
            }
        }
        
        $menu_id                =   $insert->id;
        $insert->menu_type      =   $data->menu_type;
        $insert->status         =   $data->status;
        $insert->type           =   $data->type;
        $insert->page_id        =   $data->page_id ?? 0;    
        $insert->url            =   $data->url ?? '#';    
        $insert->new_window     =   $data->new_window ?? 0;    
        $insert->sort           =   $data->sort ?? 0;    
        $insert->created_by     =   ($user) ? $user['user_id'] : 0;
        $insert->save();

        $insert_description                     =   $this->description_model::where('menu_id',$menu_id)->where('language_id',$language_id)->first();
        $insert_description->menu_id            =   $menu_id;
        $insert_description->language_id        =   $language_id;
        $insert_description->title                                  =   $data->title ?? '';
        $insert_description->save();

        return $menu_id;
    }

    public function update_order($page_id, $order, $type) {
        // $menu = $this->getMenuByType($type);
        // foreach ($menu as $key => $item) {
            
        // }

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
