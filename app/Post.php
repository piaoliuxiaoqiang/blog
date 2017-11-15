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
}
