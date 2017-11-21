<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $primarKey='id';
   
    //关联评论 一对多反向
    public function post(){
        return $this->belongsTo('App\Post');
    }

    //关联用户 一堆多反向

    public function user(){
        return $this->belongsTo('App\User');
    }

}
