<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title> @yield('title')-第一个简书+商城</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate icon" type="{{asset('qianduan/image/png')}}" href="images/favicon.png">
<link rel='icon' href='favicon.ico' type='image/x-ico' />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('qianduan/css/default.min.css?t=227')}}" />
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!--[if (gte IE 9)|!(IE)]><!-->
<script type="text/javascript" src="{{asset('qianduan/lib/jquery/jquery.min.js')}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset('qianduan/lib/amazeui/amazeui.ie8polyfill.min.js')}}"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('qianduan/lib/handlebars/handlebars.min.js')}}"></script>
<script type="text/javascript" src="{{asset('qianduan/lib/iscroll/iscroll-probe.js')}}"></script>
<script type="text/javascript" src="{{asset('qianduan/lib/amazeui/amazeui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('qianduan/lib/raty/jquery.raty.js')}}"></script>
<script type="text/javascript" src="{{asset('qianduan/js/main.min.js?t=1')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@section('style')
@show

</head>
<body>
<div class="row bg-primary">     
        <div class="col-md-4 col-md-offset-8">
            <ul class="nav nav-pills">
            @if(!\Auth::user())
                <li role="presentation" class="active" ><a href="{{url('login')}}">登录</a></li>
                <li role="presentation" class="active"><a href="{{url('register')}}">注册</a></li>
            @endif   
           
            @if(\Auth::user())
                <li role="presentation" class="active"><a href="#">{{\Auth::user()->name}}</a></li>
                <li role="presentation" class="active"><a href="#">我的主页</a></li>
                <li role="presentation" class="active"><a href="#">个人设置</a></li>
                <li role="presentation" class="active"><a href="{{url('/logout')}}">登出</a></li> 
            @endif                 
            </ul>




        </div>
    </div>
  @section('header')
 <header class="header">
   
    <div class="header-container">
        <div class="header-div pull-left">
                <a class="header-logo">
                    <img src="{{asset('qianduan/images/logo.png')}}" />
                </a>
            <button class="am-show-sm-only am-collapsed font f-btn" data-am-collapse="{target: '.header-nav'}">&#xe68b;</button>
        </div>
        

        <nav>
            <ul class="header-nav am-collapse">
                <li class="on"><a href="{{url('/')}}">首页</a></li>
                <li><a href="{{url('posts')}}">新闻动态</a></li>
                <li><a href="{{url('create')}}">添加文章</a></li>
            </ul>
            <div class="header-serch  am-hide-md-down">
                <input type="text" name="name" value="" />
                <em class="font">&#xe632;</em>
            </div>
        </nav>
    </div>
  </header>
  @show
    
        @section('banner')
                <div class="com-banner">
                <img src="{{asset('qianduan/images/index_banner.jpg')}}" />
                </div>
        @show
    @section('content')
    @show
<footer>
    <div class="cms-g">
        <div class="footer">
            <ul>
                <li><a href="#"><span>网站地图</span></a></li>
                <li><a href="#"><span>访问统计</span></a></li>
                <li><a href="#"><span>友情链接</span></a></li>
                <li><a href="#"><span>法律申明</span></a></li>
            </ul>
            <span style="color:#fff;"><a href="#" target="_blank" title="">主题</a>提供 - More Templates <a href="#" target="_blank" title="模板">模板</a> - Collect from <a href="#" title="网页" target="_blank">网页</a></span>
        </div>   </div>
</footer>
@section('script')
@show
</body>
</html>

