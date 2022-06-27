<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Repositories\PostRepository;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;
use function PHPUnit\Framework\StaticAnalysis\HappyPath\AssertIsArray\consume;


class PostController extends Controller
{
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post                     =   $post;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.post.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        return View('admin.post.add');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $page = $this->post->getByCol($id);
        $page_repo = $this->post;
        if($page)
        {
            $getpage = $this->post;
            $pageDescription = $this->post->getDescriptionById($id);
            // $page_meta = $pageDescription->template_content ? unserialize( $pageDescription->template_content) : '';
            $page_meta = $pageDescription->template_content = preg_replace_callback('!s:\d+:"(.*?)";!s', 
                function($m) {
                    return "s:" . strlen($m[1]) . ':"'.$m[1].'";'; 
                }, urldecode($pageDescription->template_content)
            );
            $page_meta = $pageDescription->template_content ? unserialize( $page_meta ) : ''; 
            return View('admin.post.edit',compact('page','pageDescription','id','page_repo','page_meta'));
        }
        else
        {
            return redirect()->route('admin_pages')->with('error','Something Went wrong!');
        }
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function addProcess(PostRequest $request)
    {

        $create_page = $this->post->add($request);

        if($create_page)
        {
            return redirect()->route('admin_posts')->with('success','Post has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    //PostRequest
    public function getData()
    {
        $pages = $this->post->getPagesList();
        return Datatables::of($pages)
            ->editColumn('slug','<a target="_blank" href="{{ URL::to( ($slug == "home") ? "/" : $slug ) }}">{{ URL::to( ($slug == "home") ? "/" : $slug ) }}</a>')
            ->editColumn('status','@if($status == "Active")
                                Enable
                            @else
                                Disable
                            @endif')
            // ->editColumn('created_at','{{ date("M d Y",strtotime($created_at)) }}')
            ->addColumn('actions',function($pages){
                return '<a class="tab-btn edit" href="'. route("admin_post_update", ["id"=>$pages->id]) .'"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_post_delete", ["id"=>$pages->id]) .'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            })
            ->rawColumns(['slug','actions'])
            ->make(true);
    }

    /**
     * Process the Form Data.
     *
     * @return redirect 
     */
    public function editProcess(PostRequest $request,$page_id)
    {
        $create_page = $this->post->update($request,$page_id);
        if($create_page)
        {
            return redirect()->route('admin_posts')->with('success','Post has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    /**
     * Remove the resource.
     *
     * @return redirect
     */
    public function delete($id)
    {
        $remove_page = $this->post->remove($id);
        if($remove_page)
        {
            return redirect()->route('admin_posts')->with('success','Post has been updated successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
}
