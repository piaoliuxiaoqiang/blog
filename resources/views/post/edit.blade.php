@extends('common.layous')
@section('style')
<!--引入wangEditor.css-->
<link rel="stylesheet" type="text/css" href="{{asset('css/wangEditor.min.css')}}">
@stop
@section('content')
 </br>
<form method="post" action="{{url('posts')}}/{{$post->id}}" class="form-group col-md-8 col-md-offset-2">    

    {{csrf_field()}}
    {{method_field('PUT')}}    
    <div class="form-group">
        <input type="text" class="form-control" id="idtitle" placeholder="输入标题" name="title" 
        value="{{old('title')?old('title'):$post->title}}">
    </div>
    
    <textarea class="form-control" rows="6" placeholder="输入正文" name="content"  id="textarea1" 
     >{{old('content')?old('content'):$post->content}}</textarea>
    </br>
      <button type="submit" class="btn btn-default">提交</button> 
      </br>
      </br>
       

      

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
 

@stop
@section('script')
<script type="text/javascript" src="{{asset('js/jquery-2.2.1.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wangEditor.min.js')}}"></script>
<script type="text/javascript">
    var editor = new wangEditor('textarea1');
    
    editor.config.uploadImgUrl = 'posts/image/upload';
    
    editor.config.uploadHeaders = {
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    };

   
    
    editor.create();
</script>
@stop


