<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Repositories\UserRepository;
use App\Models\Repositories\SiteSettingRepository;
use App\Http\Requests\UserRegistrationRequest;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
// use App\Models\EmailTemplate;
// use App\Models\SiteSetting;
use Mail;
use File;
use Lang;
use Activation;
use Sentinel;


class UserManagementController extends Controller
{
    protected $users;
    protected $site_setting;

   public function __construct( UserRepository $users, SiteSettingRepository $site_setting)
    {
        $this->users        =   $users;
        $this->site_setting =   $site_setting;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        return View('admin.users.list');
    }

    public function add() {
        $countries      =   getCountries();
        return View('admin.users.add', compact('countries'));
    }

    public function addUser(UserRegistrationRequest $request)
    {
        $credentials = $request->all();
        $user = Sentinel::registerAndActivate($credentials);

        if( $user)
            $user = $this->users->userUpdate($request, $user->id);

        return redirect()->route('admin_manage_users')->with('success','User added successfully!');
    }

    public function edit($id)
    {     
        $user           =   $this->users->getByCol($id);
        if( !$user )
            abort(404);   

        $countries      =   getCountries();
        $states         =   getStates($user->country);
        $cities         =   getCities($user->state);
        $user_details   =   Sentinel::findById($id);

        $activation     =   Activation::completed($user_details);

        return View('admin.users.edit', compact('user','activation','countries','states','cities'));
    }

    public function update(UserRegistrationRequest $request, $id)
    {
        $user = $this->users->userUpdate($request, $id);
        return redirect()->route('admin_manage_users')->with('success','User updated successfully!');
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

    public function delete($id)
    {
        $remove = $this->users->remove($id);
        if($remove)
        {
            return redirect()->route('admin_manage_users')->with('success','User deleted successfully!');
        }
        else
        {
            back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    public function banUser($id, $type) {
        echo $userdetails    =   $this->users->getByCol($id);
        echo $site_setting   =   $this->site_setting->getByCol(1);
        // exit;
        $message = '';
        // $app_env = env('APP_ENV');

        if ($type == "unban") {
            $message = "User Account Activated Successfully!";                
        } elseif ($type == "ban") {
            $message = "User Account Deactivated Successfully!";               
        }
    
        $this->users->ban_UnbanUser($id, $type);
        return back()->with('success',$message);
    }


}
