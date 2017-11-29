<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $primarKey='id';  
    
    //关联用户
    public function user(){
        return $this->belongsTo('App\User','user_id','id');//参数为要关联的模型，外键（post表中的外键），主键
    }

    //关联评论 一对多 
    public function comment(){
        return $this->hasMany('App\Comment')->orderby('created_at','desd');
    }
    //文章关联赞 一个人一个文章只能赞一次 所一是一对一 唯一的 有限制条件一个人 所以传入参数$user_id
    public function zan($user_id){
        return $this->hasOne('App\Zan')->where('user_id',$user_id);
    }

    //文章关联赞次数 一个文章有许多赞
    public function zans(){
        return $this->hasMany('App\Zan');
    }

}
