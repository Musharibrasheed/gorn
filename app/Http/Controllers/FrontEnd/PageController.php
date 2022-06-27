<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Http\Requests\DemoRequest;
use App\Http\Requests\ApplyNowRequest;
use App\Models\Repositories\PageRepository;
use App\Models\Repositories\PostRepository;
use App\Models\applyNow;
use App\Models\PostDescription;
use App\Models\Repositories\TestimonialsRepository;
use App\Models\Repositories\ArticlesRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use File;

class PageController extends Controller
{
    protected $page;
    protected $testimonials;
    protected $articles;
    protected $posts;
   
    public function __construct(
        PageRepository  $page,
        TestimonialsRepository  $testimonials,
        ArticlesRepository  $articles,
        PostRepository  $posts

        )
    {
        $this->page         = $page;
        $this->testimonials = $testimonials;
        $this->articles     = $articles;
        $this->posts     = $posts;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index(TestimonialsRepository $testimonials, ArticlesRepository $articles)
        {
            $language_id    =   1;
            $home_page      =   $this->page->getByCol('home','slug');
            $page_meta      =   '';
            $testimonials      =   '';
            
            if($home_page)
            {
                $pageContent    =   $this->page->getFrontPageBySlug($home_page->slug);
                $testimonials    =   $this->testimonials->all();
                // dd($testimonials->toArray());
                // $page_meta      =   $pageContent->template_content ? unserialize( $pageContent->template_content) : '';
                if( !empty($pageContent->template_content) ) {
                    $page_meta = $pageContent->template_content = preg_replace_callback('!s:\d+:"(.*?)";!s', 
                        function($m) {
                            return "s:" . strlen($m[1]) . ':"'.$m[1].'";'; 
                        }, urldecode($pageContent->template_content)
                    );
                    $page_meta = $pageContent->template_content ? unserialize( $page_meta ) : '';
                }
 
                if($pageContent)
                {
                    return view('frontend.template.'.$home_page->slug,compact('pageContent','page_meta','testimonials'));
                }
                else
                    return page_404();
            }
            else
                return page_404();
        }

    public function page(TestimonialsRepository $testimonials, ArticlesRepository $articles, $slug)
    {
        $data       =   array();
        $template   =   'default';
        $page_meta  =   '';
        $testimonials      =   '';
        $articles     =   '';
        $posts     =   '';
        $pageContent    =   $this->page->getFrontPageBySlug($slug);
        // $page_meta      =   $pageContent->template_content ? unserialize( urldecode($pageContent->template_content)) : '';
        if( !empty($pageContent->template_content) ) {
            $testimonials    =   $this->testimonials->all();
            $articles       =   $this->articles->all();
            $posts       =   $this->posts->all();
            $page_meta = $pageContent->template_content = preg_replace_callback('!s:\d+:"(.*?)";!s', 
                function($m) {
                    return "s:" . strlen($m[1]) . ':"'.$m[1].'";'; 
                }, urldecode($pageContent->template_content)
            );
            $page_meta = $pageContent->template_content ? unserialize( $page_meta ) : '';
        }
        



        if( $pageContent )
        {
            $template = $pageContent->template;
            return view('frontend.template.'.$template,compact('pageContent','page_meta','testimonials','articles','posts'));
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

    public function demoRequest(DemoRequest $request)
    {
     
        $data = array(
                'toemail'=> env('ADMIN_EMAIL'),'toname'=> env('ADMIN_EMAIL'),
                'fromemail'=> $request->email,'fromname'=> $request->first_name.' '.$request->last_name ?? '',
                'emailSubject'=>'Request a demo', 'type'=>'demo',
                'emailContent'=> $request->all()
        );
        // dd($data['emailContent']['first_name']);
        sendEmail($data);
        // echo 'sdfsdf';
        return back()->with('success', 'Your response successfully recorded!');

    }

    public function applyNow(ApplyNowRequest $request)
    {
        // echo '1111';
        // echo env('ADMIN_EMAIL');
        // echo '2222';
        // exit;
        $path = public_path('uploads/files');
        $attachment = $request->file('filename');
        $filename = '';
        if( !empty($attachment) ) {
        // dd($request->all());
        $name = time().'.'.$attachment->getClientOriginalExtension();;

        // create folder
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $name);

        $filename = $path.'/'.$name;
        }

        $data = array(
                'toemail'=> env('ADMIN_EMAIL'),'toname'=> env('ADMIN_EMAIL'),
                'fromemail'=> $request->email,'fromname'=> $request->first_name.' '.$request->last_name ?? '',
                'emailSubject'=>'Apply Now', 'type'=>'apply', 'attachment' => $filename,
                'emailContent'=> $request->all()
        );
        // dd($data['emailContent']['first_name']);
        $this->applyNowCreate($request,$name);
        
        sendEmail($data);
        // echo 'sdfsdf';
        return back()->with('success', 'Your response successfully recorded!');

    }

    public function applyNowCreate($request, $name) {
        $filename = '/uploads/files/'.$name;
        $request->filename = $filename;
        $result = ApplyNow::create($request->toArray());
        $an = ApplyNow::find($result->id);
        $an->filename = $filename;
        $an->save();
    }



}
