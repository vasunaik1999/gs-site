<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['title','e_image','description','status','reg_link','yt_link','link_status','is_published'];
}
