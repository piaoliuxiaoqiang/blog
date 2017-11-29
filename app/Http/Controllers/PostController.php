<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Zan;
class PostController extends Controller
{
    //列表逻辑
    public function index(){

        $posts=Post::orderBy('created_at','desc')->withCount(['comment','zans'])->paginate(10);
        return view("post.index",compact('posts'));
    }
    
    
    
    //文章详情逻辑
   
   
   
    public function show(Post $post){

        $post->load('comment');//延迟预加载
        $a = Post::where('id',$post->id)->withCount(['comment','zans'])->first();
        // $cout =$post->withCount('zans');
        //dd($a);
        return view("post.show",compact('post','a'));
    }
    //增加文章逻辑
    public function create(){
        return view("post.create");
         
    }

   //增加文章
    public function store(Request $request){
        // dd($request->all());
    
        $validator=\Validator::make($request->input(), [
            'title'=>'required|min:2|max:80',
            'content'=>'required',],
            ['required'=>":attribute 必填",
            'min'=>':attribute 不能小于2个字符',
            'max'=>':attribute 不能大于80个字符',
           ],
           ['title'=>"标题",
            'content'=>"内容",
           ]);
           if($validator->fails()){ 
            return redirect()->back()->withErrors($validator)->withInput();//withInput()是为了数据保持用的
        };  

        

        $post=new Post();
        $post->user_id=\Auth::id();
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        if($post->save()){
            return redirect("posts");
        }else{
            return redirect()->back();
        };         

    }
    //修改文章逻辑
    public function edit(Post $post){

       return view('post.edit',compact('post'));
    }
    //更新文章逻辑
    public function update(Request $request,Post $post){
       
        //验证
        $validator=\Validator::make($request->input(), [
            'title'=>'required|min:2|max:80',
            'content'=>'required',],
            ['required'=>":attribute 必填",
            'min'=>':attribute 不能小于2个字符',
            'max'=>':attribute 不能大于80个字符',
           ],
           ['title'=>"标题",
            'content'=>"内容",
           ]);
           if($validator->fails()){ 
            return redirect()->back()->withErrors($validator)->withInput();//withInput()是为了数据保持用的
        };  
        $this->authorize('update',$post);
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        if($post->save()){
            return redirect("posts");
        }else{
            return redirect()->back();
        };         
    }
    //删除文章逻辑
    public function delete(Post $post){

     //TODO:用户权限认证
        $this->authorize('delete',$post);
       
        $post->delete();
       return redirect("posts");
       //return 222;
    }

    //图片上传
    public function imageUpload(Request $request){
         
        // dd($request->all());


        //文件保存路径 首先取出文件 然后保存到Public下 用md5(time())重命名
        $path=$request->file('wangEditorH5File')->storePublicly(md5(time()));
        //去storage目录下 取出 $path文件
        return asset('storage/'.$path);
    }

    //评论

    public function comment(Post $post,Request $request){
        //验证
        $this->validate($request,['content'=>'required',],['required'=>":attribute 必填",],['content'=>"内容",]);
        //规则
        
            //保存规则1 
            $comment= new Comment();
            $comment->content=$request->input('content');
            $comment->user_id=\Auth::id();
            $comment->post_id=$post->id;
            //保存防方法2
        //渲染
        if ($comment->save()){
            return redirect()->back();
        }else{
            return redirect('post');
        }
    }
   
    //赞模块
    public function zan(Post $post){
        $param=[
            'user_id'=>\Auth::id(),
            'post_id'=>$post->id,
        ];
        //以属性查找用户若无则新增用户
        Zan::firstOrCreate($param);
        return back();
    }
   
    //取消赞
    public function unzan(Post $post){
        //post模型调用关联zan模型 参数为\Auth::id()用户id 然后删除
        $post->zan(\Auth::id())->delete();
        return back();
    }

}
