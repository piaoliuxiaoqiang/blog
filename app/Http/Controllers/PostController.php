<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //列表逻辑
    public function index(){

        $posts=Post::orderBy('created_at','desc')->paginate(10);
        return view("post.index",compact('posts'));
    }
    //文章详情逻辑
    public function show(Post $post){
        return view("post.show",compact('post'));
    }
    //增加文章逻辑
    public function create(){
        return view("post.create");
    }

    public function store(Request $request){
        // dd($request->all());
        
        //validate类验证
        $validate=\Validator::make($request->input(), [
            'title'=>'required|min:2|max:80',
            'content'=>'required',]);
        

        $post=new Post();
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        if($post->save()){
            return redirect("posts");
        }else{
            return redirect()->back();
        };         

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
