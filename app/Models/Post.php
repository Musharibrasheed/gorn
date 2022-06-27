<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public function getDetail()
    {
        $language_id = 1;

        if($language = getlanguage())
        {
            $language_id = $language->id;
        }

        $description = \App\Models\PostDescription::where('page_id',$this->id)->where('language_id',$language_id)->first();
        if($description)
            return $description;
        else
            return $description = \App\Models\PostDescription::where('page_id',$this->id)->where('language_id',1)->first();
    }
}
