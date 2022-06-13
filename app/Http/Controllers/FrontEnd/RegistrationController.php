<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\Repositories\UserRepository;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;;
use Session;
use Lang;
use Mail;
use Sentinel;

class RegistrationController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user  = $user;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */

    public function addUser(UserRegistrationRequest $request)
    {
        $credentials = $request->all();
        $user = Sentinel::registerAndActivate($credentials);

        if( $user)
            $user = $this->user->userUpdate($request, $user->id);

        return back()->with('message','User added successfully!');
    }

    public function edit()
    {
        $user       =   Sentinel::getUser();
        $countries  =   getCountries();
        $states     =   getStates($user->country);
        return view('frontend.users.edit_profile',compact('user','countries','states'));
    }

    public function editProcess(Request $request)
    {
       print_b($request->all());
       exit;
    }

    public function getData()
    {
        $users = $this->users->getAllUsers();

        return Datatables::of($users)
            ->editColumn('full_name','@if( isset($first_name) && isset($last_name) ){{ $first_name }} {{$last_name }} @else {{ $username }} @endif')
            // ->editColumn('package','{{ $title }}')
            ->addColumn('package',function($users){
                $user = User::find($users->id);
                if( !empty($user->Membership) )
                    return $user->Membership->package->getPackageDescription()->title;
                else
                    return null;
            })
            ->addColumn('status',function($users){
                return Activation::completed(getUserByID($users->id)) ? 'Active' : 'Inactive';
            })
            ->editColumn('created_at','{{ date("M d, Y",strtotime($created_at)) }}')
            ->editColumn('actions',function($users){
                return '<a class="tab-btn edit" href="'. route("admin_edit_user", ["id"=>$users->id]) .'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="trigger_popup_fricc tab-btn delete" href="javascript:;" data-href="'. route("admin_delete_user", ["id"=>$users->id]) .'" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-trash" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954"></i></a>';
            })
            ->rawColumns(['actions','full_name'])
            ->make(true);
    }
}
