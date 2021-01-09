<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Team extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'teams';
    protected $fillable =['name','section_title','subsection','role','image','status','linkedin','twitter','insta'];
}
