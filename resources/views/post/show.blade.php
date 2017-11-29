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
                        <a href="#"><font color="blue">{{$post->user->email}}</font></a>
                    
                            @can('update',$post)
                                <a href="{{url('posts')}}/{{$post->id}}/edit"><font color="blue">
                                </font><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                            @endcan

                            @can('delete',$post)
                                <a href="{{url('posts')}}/{{$post->id}}/delete"><font color="blue">
                                </font><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            @endcan
                       
                    </p>
                </div>

                <div class="com-nav-content">
                    <span>{!! $post->content !!}</span>
                </div>
            @if ($post->zan(\Auth::id())->exists())
             
                <a href="{{url($post->id)}}/unzan" class="btn btn-primary" >取消赞</a> <span class="badge"></span>
             赞：{{$a->zans_count}} 评论：{{$a->comment_count}}
              @else
              
                <a href="{{url($post->id)}}/zan" class="btn btn-primary">赞 </a> <span class="badge"></span>
               赞：{{$a->zans_count}} 评论：{{$a->comment_count}}
              @endif
                <div class="com-info-page">
                    <a href="#" class="no">上一篇</a><a href="#">下一篇</a>
                </div>
                
            @foreach($post->comment as $comment)
                
                <ul class="media-list">
                    <li class="media">
                        <div class="media-left">
                        <a href="#">
                                    <img class="media-object" src="{{asset('qianduan/images/64.png')}}" alt="...">
                        </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$comment->user->name}}  <span>{{$comment->created_at}}</span></h4>
                                {{$comment->content}}
                        </div>
                    </li>
                </ul>

            @endforeach

                 
               
                <form action="{{url($post->id)}}/comment" method="post">
                    <label>评论</label>
                    {{csrf_field()}}
                    <textarea class="form-control" rows="3" name="content"></textarea>
                    <p></p>
                     <button type="submit" class="btn btn-default pull-right">提交</button>

                     @if(count($errors))

                        <div class="alert alert-dange" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li> 
                            @endforeach
                        </ul>
                        
                        </div>
                    @endif

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