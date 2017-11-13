<!DOCTYPE HTML>
<html>
<head>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="">
<script type="{{asset('qianduan/denglu/application/x-javascript')}}"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{asset('qianduan/denglu/css/font-awesome.css')}}" rel="stylesheet"> 
<link href="{{asset('qianduan/denglu/css/style.css')}}" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<div class="video" data-vide-bg="{{asset('qianduan/denglu/video/water')}}">
<div class="center-container">
<!--background-->
<!-- login -->
<h1>欢迎光临，请注册</h1>
	        <div class="login-w3l">				
			<div class="login-form">
				<h2 class="sub-head-w3-agileits">注 册</h2>
				<div class="social-bottons-w3ls">
				<a href="#" class="hvr-shutter-out-vertical facebook"><i class="fa fa-facebook" aria-hidden="true"></i>
                <span>使用微信注册</span></a>
				<a href="#" class="hvr-shutter-out-vertical twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
                <span>使用QQ注册</span></a>
				
    @if(count($errors))

      <div class="alert alert-dange" role="alert">
       <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
       </ul>
      
      </div>
    @endif
				
				</div>
				<form action="{{url('register/zc')}}" method="post">
                    {{csrf_field()}} 
					<div class="inputs-w3ls">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" name="email" placeholder="请输入邮箱" rrequired/>
					</div>
					
					<div class="inputs-w3ls">
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" name="password" placeholder="输入密码" required=""/>
					</div>
                    <div class="inputs-w3ls">
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="password" name="password_confirmation" placeholder="确认密码" required=""/>
					</div>
					 <div class="inputs-w3ls">
						<i class="fa fa-key" aria-hidden="true"></i>
						<input type="text" name="username" placeholder="确认密码" required=""/>
					</div>
					<input type="submit" value="Sign In">
				</form>	
			</div>
			<!-- //login -->
				</div> 
				<div class="clear"></div>
			<div class="footer-agileits">
			<p>© 2017 我也不知道啊 | 制作 <a href="{{url('/')}}">首页</a></p>
			</div>
			<!--//login-->
			</div>
			</div>
<!--js-->
		<script src="{{asset('qianduan/denglu/js/jquery-2.2.3.min.js')}}"></script> 
		<script src="{{asset('qianduan/denglu/js/jquery.vide.min.js')}}"></script>
<!--//js-->

</body>
</html>