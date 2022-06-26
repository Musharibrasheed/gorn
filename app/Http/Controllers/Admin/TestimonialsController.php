<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;
use App\Models\Repositories\TestimonialsRepository;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;
use Lang;

class TestimonialsController extends Controller
{
    protected $testimonials;

    public function __construct(TestimonialsRepository $testimonials)
    {
        $this->testimonials = $testimonials;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        
        return View('admin.testimonials.list');
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        return view('admin.testimonials.add');
    }

    public function addProcess(TestimonialRequest $request)
    {
        $testimonials = $this->testimonials->add($request);
        if($testimonials)
        {
            return redirect()->route('admin_testimonials')->with('success', Lang::get('admin/testimonial.messages.created'));
        }

        else
        {
            back()->withInput()->with('error', Lang::get('admin/testimonial.messages.went_wrong') );
        }
    }

    public function edit($id)
    {
        $testimonial    =   $this->testimonials->getByCol($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function editProcess(TestimonialRequest $request, $id)
    {
        $testimonials = $this->testimonials->update($request, $id);
        if($testimonials)
        {
            return redirect()->route('admin_testimonials')->with('success', Lang::get('admin/testimonial.messages.created'));
        }

        else
        {
            back()->withInput()->with('error',Lang::get('admin/testimonial.messages.went_wrong') );
        }
    }

    public function delete($id)
    {
        $remove = $this->testimonials->remove($id);
        if($remove)
        {
            return redirect()->route('admin_testimonials')->with('success', Lang::get('admin/testimonial.messages.deleted'));
        }
        else
        {
            back()->withInput()->with('error', Lang::get('admin/testimonial.messages.went_wrong'));
        }
    }

    public function getData()
    {
        $testimonials = $this->testimonials->all();
        return Datatables::of($testimonials)
           
            ->editColumn('created_at','{{ date("M d, Y",strtotime($created_at)) }}')
            ->addColumn('actions',function($testimonials){
                return '<a class="tab-btn edit" href="'. route("admin_edit_testimonial", ["id"=>$testimonials->id]) .'"><i class="fa fa-edit" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="'.Lang::get("admin/testimonial.edit_title").'"></i></a>
                                    <a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_testimonial_delete", ["id"=>$testimonials->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="'.Lang::get("admin/testimonial.delete_title").'"></i></a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

}
