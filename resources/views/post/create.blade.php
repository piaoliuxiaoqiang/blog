@extends('common.layous')
@section('content')
 </br>
<form method="post" action="{{url('posts')}}" class="form-group col-md-8 col-md-offset-2">    

    {{csrf_field()}}    
    <div class="form-group">
        
        <label for="idtitle">标题</label>
        <input type="text" class="form-control" id="idtitle" placeholder="输入标题" name="title">
    </div>
    <textarea class="form-control" rows="6" placeholder="输入正文" name="content"></textarea>
    </br>
      <button type="submit" class="btn btn-default">提交</button>
      
</form>
@stop