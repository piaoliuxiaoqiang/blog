<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登录页面
    public function index(){
        return view("login.index");
    }

    //登录规则
    public function login(Request $request){
        //dd($request->all());
        //验证
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|alpha_num|between:6,12',
         
        ], ['required'=>":attribute 必填",
            'between'=>'::attribute 密码必须为6到18个字节之间', ],[
            'email'=>'邮箱',
            'password'=>'密码',
        ]);
        //规则
        $email=$request->email;
        $password=$request->password;
        $remember=$request->is_remenber;
        if(\Auth::attempt(['email'=>$email,'password'=>$password],$remember)){
            return redirect('posts');
        }else{
            return redirect()->back()->withErrors("邮箱密码不匹配")->withInput();
        }
        
    }

    public function logout(){
        \Auth::logout();
        return redirect('login');
    }

}
