<?php
namespace App\Models\Repositories;
use App\Models\Testimonials;



class TestimonialsRepository  extends AbstractRepository
{
    public $model;

    public function __construct(Testimonials $model) {
        $this->model    =   $model;
    }

    public function all()
    {
        return $this->model::all();
    }    

    public function add($data)
    {
 
        $user                       =   isUserLoggedIn();
        $insert                     =   new $this->model;
        $insert->title              =   $data->title ?? '';
        $insert->client_name        =   $data->client_name ?? '';
        $insert->client_profession  =   $data->client_profession ?? '';
        $insert->client_comments    =   $data->client_comments ?? '';
        $insert->image              =   str_replace( env('APP_URL').'/','',$data->image) ?? '';
        $insert->status             =   $data->status;
        $insert->save();
        $id                         =   $insert->id;

        return $id;
    }

    public function update($data,$id)
    {
 
        $insert                     =   $this->model::where('id',$id)->first(); 
        $insert->title              =   $data->title ?? '';       
        $insert->client_name        =   $data->client_name ?? '';
        $insert->client_profession  =   $data->client_profession ?? '';
        $insert->client_comments    =   $data->client_comments ?? '';
        $insert->image              =   str_replace( env('APP_URL').'/','',$data->image) ?? '';
        $insert->status             =   $data->status;
        $insert->save();

        return $insert->id;
    }

    public function remove($id)
    {
        $delete         = $this->model::where('id',$id)->delete();
        if($delete)
            return TRUE;
        else
            return FALSE;
    }

}
