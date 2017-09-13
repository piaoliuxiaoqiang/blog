@extends('common.layous')
@section('banner')
  <div  class="am-cf"></div>
    <div class="am-slider am-slider-default" data-am-flexslider="{playAfterPaused: 8000}">
        <ul class="am-slides">
            <li><img src="{{asset('qianduan/images/index_banner.jpg')}}" /></li>
            <li><img src="{{asset('qianduan/images/index_banner.jpg')}}" /></li>
            <li><img src="{{asset('qianduan/images/index_banner.jpg')}}" /></li>
        </ul>
    </div>
@stop
@section('content')
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
    <div class="index-nav">
        <div class="cms-g">
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                <div class="index-nav-item">
                    <div class="index-nav-img">
                        <img src="{{asset('qianduan/images/index_nav01.png')}}" />
                    </div>
                    <div class="index-nav-info">
                        <h1>芯片封装</h1>
                        <h2>优越品质 绿色环保</h2>
                        <em class="font"><a href="#">详细介绍&#xe72f;</a></em>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                <div class="index-nav-item">
                    <div class="index-nav-img">
                        <img src="{{asset('qianduan/images/index_nav02.png')}}" />
                    </div>
                    <div class="index-nav-info">
                        <h1>LED电源</h1>
                        <h2>专业技术 高效耐用</h2>
                        <em class="font"><a href="#">详细介绍&#xe72f;</a></em>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                <div class="index-nav-item">
                    <div class="index-nav-img">
                        <img src="{{asset('qianduan/images/index_nav03.png')}}" />
                    </div>
                    <div class="index-nav-info">
                        <h1>LED灯具</h1>
                        <h2>领先科技 节能高效</h2>
                        <em class="font"><a href="#">详细介绍&#xe72f;</a></em>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                <div class="index-nav-item">
                    <div class="index-nav-img">
                        <img src="{{asset('qianduan/images/index_nav04.png')}}" />
                    </div>
                    <div class="index-nav-info">
                        <h1>通讯模块</h1>
                        <h2>超强信号 优质体验</h2>
                        <em class="font"><a href="#">详细介绍&#xe72f;</a></em>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="index-content">
        <div class="cms-g">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="index-content-left">
                        <h1>产品中心</h1>
                        <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                            <ul class="am-slides">
                                <li><img src="{{asset('qianduan/images/index-content-left-01.png')}}" /></li>
                                <li><img src="{{asset('qianduan/images/index-content-left-01.png')}}" /></li>
                                <li><img src="{{asset('qianduan/images/index-content-left-01.png')}}" /></li>
                                <li><img src="{{asset('qianduan/images/index-content-left-01.png')}}" /></li>
                                <li><img src="{{asset('qianduan/images/index-content-left-01.png')}}" /></li>
                                <li><img src="{{asset('qianduan/images/index-content-left-01.png')}}" /></li>
                            </ul>
                        </div>
                        <strong><a href="#">E27射灯是220V LED射灯的理想替代品。这款GU10 / E27射灯是高效的LED射灯产品，仅仅只消耗了5W的电压，真正意义降低的能源E27射灯是220V LED射灯的理想替代品。这款GU10 / E27射灯是高效的LED射灯产品，仅仅只消耗了5W的电压，真正意义降低的能源</a></strong>
                        <em><a href="#">详情介绍<i class="font">&#xe78d;</i></a></em>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="index-content-center">
                    <h1>新闻动态<a href="#">MORE<i class="font">&#xe78d;</i></a></h1>
                    <ul>
                        <li><a href="#"><span>热看LED产业，组建光电技术公司激流扬帆 </span><em>2017-4-6</em></a></li>
                        <li><a href="#"><span>LED灯具国内业务市场研讨会 LED灯具国内业务</span><em>2017-4-6</em></a></li>
                        <li><a href="#"><span>LED灯具国内业务市场研讨会 LED灯具国内业务</span><em>2017-4-6</em></a></li>
                        <li><a href="#"><span>LED灯具国内业务市场研讨会 LED灯具国内业务</span><em>2017-4-6</em></a></li>
                        <li><a href="#"><span>LED灯具国内业务市场研讨会 LED灯具国内业务</span><em>2017-4-6</em></a></li>
                        <li><a href="#"><span>LED灯具国内业务市场研讨会 LED灯具国内业务</span><em>2017-4-6</em></a></li>
                    </ul>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="index-content-right">
                    <h1>产品应用<a href="#">MORE<i class="font">&#xe78d;</i></a></h1>
                    <img src="{{asset('qianduan/images/index-content-right-01.jpg')}}"/>
                    <ul>
                        <li><a href="#">惠州市重点路段LED路灯项目 ·惠州市重点路段LED路灯项</a></li>
                        <li><a href="#">惠州市重点路段LED路灯项目 ·惠州市重点路段LED路灯项</a></li>
                        <li><a href="#">惠州市重点路段LED路灯项目 ·惠州市重点路段LED路灯项</a></li>
                        <li><a href="#">惠州市重点路段LED路灯项目 ·惠州市重点路段LED路灯项</a></li>
                        <li><a href="#">惠州市重点路段LED路灯项目 ·惠州市重点路段LED路灯项</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop