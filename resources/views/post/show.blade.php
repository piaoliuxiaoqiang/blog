@extends('common.layous')
@section('title')
{{$post->title}}
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
                <div>
                    <p>日期:{{$post->created_at->toDateString()}} 来源：
                        <a href="#"><font color="blue">{{$post->id}}</font></a>
                    
                        <button type="button" class="btn btn-default" aria-label="Left Align">
                            <a href="{{url('posts')}}/{{$post->id}}/edit"><font color="blue">
                            </font><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            <a href="{{url('posts')}}/{{$post->id}}/delete"><font color="blue">
                            </font><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </a>
                            
                        </button>
                    </p>
                </div>

                <div class="com-nav-content">
                    <span>{!! $post->content !!}</span>
                </div>

              <button class="btn btn-primary" type="button">
                赞 <span class="badge">5</span>
              </button>
                <div class="com-info-page">
                    <a href="#" class="no">上一篇</a><a href="#">下一篇</a>
                </div>
                <ul class="media-list">
                    <li class="media">
                        <div class="media-left">
                        <a href="#">
                                    <img class="media-object" src="{{asset('qianduan/images/64.png')}}" alt="...">
                        </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">王五</h4>
                                这里是评论内容这里是评论内容这里是评论内容这里是评论内容这里是评论内容这里是评论内容这里
                                是评论内容这里是评论内容这里是评论内容这里是评论内容这里是评论内容这里是评论内容这里是评论
                                内容这里是评论内容这里是评论内容
                        </div>
                    </li>
                </ul>
               
                <form action="form_action.asp" method="get">
                    <label>评论</label>
                    <textarea class="form-control" rows="3"></textarea>
                    <p></P>
                     <button type="submit" class="btn btn-default pull-right">提交</button>
                </form>
                
                
                    
                
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