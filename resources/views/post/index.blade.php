@extends('common.layous')
@section('title')
111111111
@stop
@section('content')
 <div class="com-container">
        <div class="cms-g">
            <div class="am-hide-sm-only am-u-md-3 am-u-lg-3">
                <div class="com-nav-left">
                    <h1><em>新闻中心</em><i>NEWS</i></h1>
                    <ul>
                        <li class="on"><a href="#">公司新闻</a></li>
                        <li><a href="#">产品资讯</a></li>
                        <li><a href="#">营销动态</a></li>
                    </ul>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
                <div class="com-nav-title">
                    <a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>
                    <span>公司新闻</span>
                </div>
                
                <div class="new-list">
                    <ul>
                    @foreach($posts as $post)
                        
                    <li><a href="{{url('posts')}}/{{$post->id}}"><span>{{$post->title}}</span><em>{{$post->created_at->toDateString()}}</em></a></li>
                    <li>{{str_limit($post->content,"100","...")}}</li>
                    @endforeach
                    </ul>
                </div>
                <div class="page-list">
                   
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
    <div id="doc-oc-demo1" class="am-offcanvas">
        <div class="am-offcanvas-bar">
            <div class="am-offcanvas-content com-nav-left com-nav-left1">
                <ul>
                    <li class="on"><a href="#">公司新闻</a></li>
                    <li><a href="#">产品资讯</a></li>
                    <li><a href="#">营销动态</a></li>
                </ul>
            </div>
        </div>
    </div>
@stop