<?php
namespace App\Models\Repositories;
use App\Models\Articles;



class ArticlesRepository  extends AbstractRepository
{
    public $model;

    public function __construct(Articles $model) {
        $this->model    =   $model;
    }

    public function all()
    {
        return $this->model::all();
    }    

    public function add($data)
    {
        $insert         =   new $this->model;
        $insert->title  =   $data->title ?? '';
        $insert->text   =   $data->text ?? '';
        $insert->image  =   str_replace( env('APP_URL').'/','',$data->image);
        $insert->save();
        $id                         =   $insert->id;

        return $id;
    }

    public function update($data,$id)
    {
 
        $insert         =   $this->model::where('id',$id)->first();        
        $insert->title  =   $data->title ?? '';
        $insert->text   =   $data->text ?? '';
        $insert->image  =   str_replace( env('APP_URL').'/','',$data->image);
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
