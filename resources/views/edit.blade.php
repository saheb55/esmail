@extends('front.app') 

@section('content')
<h1>hellow</h1>
<div class="row">
          <div class="col-md-10">
          <form action=" {{ route('posts.update',$post->post_id) }}" method="post"> 
            
          {{ csrf_field()}}
         {{ method_field('PUT') }}
              <div class="form-group ">

            <label for="title_input">title:</label>
            <input type="text" value="{{$post->title}}" class="form-control" name="title">
          </div>
        
        
            <div class="form-group ">
              <label for="content_input">content:</label>
              <textarea rows="4"  class="form-control" name="body">{{$post->body}}</textarea>
            </div>
          
        
          <div class="form-group ">
            <button type="submit" class="btn btn-primary" >update</button>
         
        </div>
      </form>
    </div>
  </div>
      
      @endsection