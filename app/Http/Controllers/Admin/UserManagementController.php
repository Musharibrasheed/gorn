<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Repositories\UserRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Http\Requests\UserRegistrationRequest;
// use App\Models\EmailTemplate;
use Mail;
use File;
use Lang;
use Activation;
use Sentinel;


class UserManagementController extends Controller
{
    protected $users;


   public function __construct( UserRepository $users)
    {
        $this->users        =   $users;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {     
        $user           =   $this->users->getByCol($id);
        if( !$user )
            abort(404);   

        $user_details   =   Sentinel::findById($id);

        $activation     =   Activation::completed($user_details);

        return View('admin.users.edit', compact('user'));
    }

    public function update(UserRegistrationRequest $request, $id)
    {
        $user = $this->users->userUpdate($request, $id);
        return redirect()->route('admin_edit_user',['id'=>1])->with('success','User updated successfully!');
    }

    public function getData()
    {
        $users = $this->users->getAllUsers();

        return Datatables::of($users)
            ->editColumn('full_name','@if( isset($first_name) && isset($last_name) ){{ $first_name }} {{$last_name }} @else {{ $username }} @endif')
            // ->editColumn('package','{{ $title }}')
            ->addColumn('status',function($users){
                return Activation::completed(getUserByID($users->id)) ? 'Active' : 'Inactive';
            })
            ->editColumn('created_at','{{ date("M d, Y",strtotime($created_at)) }}')
            ->editColumn('actions',function($users){
                return '<a class="tab-btn edit" href="'. route("admin_edit_user", ["id"=>$users->id]) .'"><i class="fa fa-edit" aria-hidden="true"></i></a><a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_delete_user", ["id"=>$users->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954"></i></a>';
            })
            ->rawColumns(['actions','full_name'])
            ->make(true);
    }

}
