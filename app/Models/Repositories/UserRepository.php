<?php
namespace App\Models\Repositories;

use App\Models\Languages;
use App\Models\User;
use App\Models\SiteSetting;
// use App\Models\EmailTemplate;
use Activation;
use Sentinel;
use Session;
use Stripe;
use Lang;

// use Helpers;

class UserRepository  extends AbstractRepository
{
    /**
     * Creates a new model instance
     * @param App\Models\SiteSetting $site_setting
     *
     * @return void
     */
    public $model;
    protected $table = 'users';
    protected $site_setting;
    protected $email_temp;



    public function __construct(User $user, /* EmailTemplate $email_temp,*/  SiteSetting $site_setting)
    {
        $this->model = $user;
        // $this->email_temp = $email_temp;
    }

    public function add($data)
    {
        $package_id = session::get('package_id') ?? 0;
        $type = session::get('type') ? strtolower(session::get('type')) : 'customer';
        $data['account_type'] = $type;

        $role = Sentinel::findRoleBySlug($type);

        if ($data->payment_type == 'bank_draft') {
            $user = Sentinel::register($data->all(), false);
        }  elseif($type == 'customer') {
            $user = Sentinel::registerAndActivate($data->all());
        }


        if ($type != 'customer' && ($data->payment_type == 'stripe' || $data->payment_type == 'free')) {
            $package = $this->package_repo->getPackageById($package_id ?? 0);
            $data['list_'] = $data->quantity ?? 0;
            $data['send_newsletter'] = $data->send_newsletter ?? '';
            $data['paid'] = (int)$package->price * (int)$data->quantity ?? 0;
            $data['auto_renewal']           = 0;

            if ($data->payment_type != 'free')
            {
                $response = $this->postPayment($data,$package);

                if($response->status == 'failed')
                    return $response;
                else
                {
                    $data['stripe_subscription_id'] = $response->id;
                    $data['stripe_user_id']         = $response->customer;
                    $data['start']                  = date('Y-m-d H:i:s',$response->current_period_start);
                    $data['expiry']                 = date('Y-m-d H:i:s',$response->current_period_end);
                    $data['auto_renewal']           = 1;
                }
            }

            $user = Sentinel::registerAndActivate($data->all());

            $data['payment_id'] = $response->id ?? 0;

            $this->Membership->add($data, $user->id,$package_id,$type);
        } elseif ($type != 'customer' && $data->payment_type == 'bank_draft') {
            $package = $this->package_repo->getPackageById($package_id ?? 0);
            $data['send_newsletter'] = $data->send_newsletter ?? '';
            $data['paid'] = (int)$package->price * (int)$data->quantity ?? 0;

            if( $type == 'hotel' )
                $this->Rfp->add($data, $user->id);

            $this->Membership->add($data, $user->id,$package_id,$type);
        }

        $affectedRows = $this->userUpdate($data, $user->id);
        $user->roles()->attach($role);

        if( !empty($data->rfp_email) && count($data->rfp_email)>0 ) {
            $this->rfpUsers($data, $user->id);
        }
        return $user;
    }

    public function getAllUsers()
    {
        $users = $this->model::where('id','!=', 1)->get();
        return $users;
    }

    public function remove($id)
    {
        $delete = $this->model::where('id', $id)->delete();

        if ($delete)
            return TRUE;
        else
            return FALSE;
    }

    public function update($data, $id)
    {
        $update                 =   $this->model::where('id', $id)->first();
        $update->email          =   $data->email ?? '';
        $update->account_type   =   $data->account_type ?? '';
        $update->save();
    }

    public function userUpdate($data, $user_id)
    {
        $image      =   $data->uploaded_image ?? '';
        $update     =   Sentinel::findById($user_id);
        if($file    =   $data->file('image'))
        {
            $path   =   '/uploads/users/'.$user_id;
            $image  =   upload_image($file, $path);
        }

        if( $data->password && !empty($update)) {
            $crd['password'] = $data->password;
            Sentinel::update($update, $crd);
        }

        $update->first_name         =   $data->first_name;
        $update->last_name          =   $data->last_name;
        $update->email              =   $data->email ?? '';
        $update->phone_number       =   $data->phone_number ?? '';
        $update->account_type       =   $update->account_type ?? 'Viewer';
        $update->image              =   $image;
        $update->save();
    }

    public function ban_UnbanUser($id, $type)
    {
        $user = Sentinel::findById($id);
        if ($type == 'ban') {
            return Activation::remove($user);
        } else {
            $ActivateUser = Activation::create($user);
            return Activation::complete($user, $ActivateUser->code);
        }
    }

    public function getRoles() {
        return Sentinel::getRoleRepository()->all();
    }
    
}
