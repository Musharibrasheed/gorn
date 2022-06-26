<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Repositories\ArticlesRepository;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;
use Lang;

class ArticlesController extends Controller
{
    protected $articles;

    public function __construct(ArticlesRepository $articles)
    {
        $this->articles = $articles;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.articles.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        return view('admin.articles.add');
    }

    public function addProcess(ArticleRequest $request)
    {
        $articles = $this->articles->add($request);
        if($articles)
        {
            return redirect()->route('admin_articles')->with('success', Lang::get('admin/testimonial.messages.created'));
        }

        else
        {
            back()->withInput()->with('error', Lang::get('admin/testimonial.messages.went_wrong') );
        }
    }

    public function edit($id)
    {
        $article    =   $this->articles->getByCol($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function editProcess(ArticleRequest $request, $id)
    {
        $articles = $this->articles->update($request, $id);
        if($articles)
        {
            return redirect()->route('admin_articles')->with('success', Lang::get('admin/testimonial.messages.created'));
        }

        else
        {
            back()->withInput()->with('error',Lang::get('admin/testimonial.messages.went_wrong') );
        }
    }

    public function delete($id)
    {
        $remove = $this->articles->remove($id);
        if($remove)
        {
            return redirect()->route('admin_articles')->with('success', Lang::get('admin/testimonial.messages.deleted'));
        }
        else
        {
            back()->withInput()->with('error', Lang::get('admin/testimonial.messages.went_wrong'));
        }
    }

    public function getData()
    {
        $articles = $this->articles->all();
        return Datatables::of($articles)
            ->editColumn('created_at','{{ date("M d, Y",strtotime($created_at)) }}')
            ->addColumn('actions',function($articles){
                return '<a class="tab-btn edit" href="'. route("admin_edit_article", ["id"=>$articles->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="'.Lang::get("admin/article.edit_title").'"></i></a>
                                    <a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_article_delete", ["id"=>$articles->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="'.Lang::get("admin/article.delete_title").'"></i></a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

}
