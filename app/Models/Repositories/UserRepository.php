<?php
namespace App\Models\Repositories;


use App\Models\User;
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



    public function __construct(User $user)
    {
        $this->model = $user;
        // $this->email_temp = $email_temp;
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

    public function getRoles() {
        return Sentinel::getRoleRepository()->all();
    }
    
}
