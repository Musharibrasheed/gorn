<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyNow extends Model
{
    use HasFactory;
    protected $table = 'apply_now';

    protected $fillable = ['first_name','last_name','email','address','city','state','zip_code','country','mobile_number','filename','experience','ert','rt', 'about_go_rn' ];
}
