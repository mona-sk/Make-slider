<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table="posts";
    public function comment(){
        return $this->hasOne(comment::class);
    }
}
