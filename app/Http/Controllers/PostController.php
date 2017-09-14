<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //列表逻辑
    public function index(){
        return view("post.index");
    }
    //文章详情逻辑
    public function show(){
        return view("post.show");
    }
    //增加文章逻辑
    public function create(){
        return view("post.create");
    }

    public function store(){

    }
    //修改文章逻辑
    public function edit(){

    }
    //更新文章逻辑
    public function update(){

    }
    //删除文章逻辑
    public function delete(){

    }
}
