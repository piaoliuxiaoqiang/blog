<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RgisterController extends Controller
{
    //注册页面
    public function index(){
        return view('login.rgister');
    }

    //注册规则
    public function register(Request $request){
        // dd($request->all());
        //表单提交三步走
        //1 验证 
        $validator=\Validator::make($request->input(), [
            'username'=>'required|min:2|max:80|unique:users,name',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|alpha_num|between:6,12|confirmed',
         
        ], ['required'=>":attribute 必填",
            'min'=>':attribute 不能小于2个字符',
            'max'=>':attribute 不能大于80个字符',
            'between'=>'::attribute 密码必须为6到18个字节之间', ],[
            'username'=>'昵称',
            'email'=>'邮箱',
            'password'=>'密码',
            'password_confirmation'=>'确认密码'
        ]);
        if($validator->fails()){ 
            return redirect()->back()->withErrors($validator)->withInput();//withInput()是为了数据保持用的
        };  

        //2 处理
        $user=new User();
        $user->name=$request->input('username');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        //3 渲染 
        if($user->save()){
            return redirect("posts");
        }else{
            return redirect()->back();
        }      
    }

}