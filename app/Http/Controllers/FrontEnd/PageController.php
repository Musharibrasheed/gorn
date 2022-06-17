<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Models\Repositories\PageRepository;
use App\Models\Repositories\SiteSettingRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;


class PageController extends Controller
{
    protected $page;
    protected $siteSetting;
   
    public function __construct(
        PageRepository          $page, 
        SiteSettingRepository   $siteSetting
        )
    {
        $this->page         = $page;
        $this->siteSetting  = $siteSetting;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
        {
            $language_id    =   getlanguage()->id ?? 1;
            $home_page      =   $this->page->getByCol('home','slug');
            $siteSetting    =   $this->siteSetting->getByCol(1);
            
            if($home_page)
            {
                $pageContent    =   $this->page->getFrontPageBySlug($home_page->slug);
                // $page_meta      =   $pageContent->template_content ? unserialize( $pageContent->template_content) : '';
                $page_meta = $pageContent->template_content = preg_replace_callback('!s:\d+:"(.*?)";!s', 
                    function($m) {
                        return "s:" . strlen($m[1]) . ':"'.$m[1].'";'; 
                    }, urldecode($pageContent->template_content)
                );

                if($pageContent)
                {
                    return view('frontend.template.'.$home_page->slug,compact('pageContent','page_meta'));
                }
                else
                    return page_404();
            }
            else
                return page_404();
        }

    public function page($slug)
    {
        $data       =   array();
        $template   =   'default';
        $pageContent    =   $this->page->getFrontPageBySlug($slug);
        // $page_meta      =   $pageContent->template_content ? unserialize( urldecode($pageContent->template_content)) : '';
        $page_meta = $pageContent->template_content = preg_replace_callback('!s:\d+:"(.*?)";!s', 
            function($m) {
                return "s:" . strlen($m[1]) . ':"'.$m[1].'";'; 
            }, urldecode($pageContent->template_content)
        );
        $page_meta = $pageContent->template_content ? unserialize( $page_meta ) : '';
        // echo '<pre>';
        //         print_r($page_meta);
        //         exit;
        if( $pageContent )
        {
            if( $pageContent->template == 'about' ) {
                $template = $pageContent->template;
            }
            return view('frontend.template.'.$slug,compact('pageContent','page_meta'));
        } else {
            return page_404();
        }
    }


    //PageRequest
    public function getData( Request $request)
    {
        $pages = $this->page->getPagesList( $request );
        return Datatables::of($pages)
            ->editColumn('slug','<a target="_blank" href="{{ URL::to( ($slug == "home") ? "/" : $slug ) }}">{{ URL::to( ($slug == "home") ? "/" : $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active")
                                Enable
                            @else
                                Disable
                            @endif')
            ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->addColumn('actions','<a class="tab-btn" href="'. route("admin_page_update", ["id"=>$id]) .'"><i class="fa fa-pencil" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit page"></i></a>
                                    <a class="tab-btn delete" href="'. route("admin_page_delete", ["id"=>$id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete Page"></i></a>
                                   ')
            ->rawColumns(['slug','actions'])
            ->make(true);
    }



}
