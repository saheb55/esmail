@extends('front.app') 


@section('content')
<div class="row">
          <div class="col-md-10">
             {{  Form::date('name', \Carbon\Carbon::now())  }}
          <form action=" {{ route('posts.store') }}" method="post"> 
            {{csrf_field()}}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
             <div class="form-group ">
            
            <label for="title_input">title:</label>
            <input type="text"  class="form-control" name="title">
          </div>
        
        
            <div class="form-group ">
     <label for="content_itm">content:</label>          
    <textarea rows="4"  class="form-control" name="body"></textarea>
            </div>
          
        
          <div class="form-group ">
            <button type="submit" class="btn btn-primary" >save</button>
         
        </div>
{!! Form::close() !!}
  </div>
</div>
      
      @endsection