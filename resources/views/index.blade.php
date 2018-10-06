@extends('front.app') 

@section('content')
<h1>all postes</h1>
@if ($errors->any())   
  <div class="alert alert-danger">  
         <ul> 
                     @foreach ($errors->all() as $error)  
                  <li>
                  {{ $error }}</li>  
                    @endforeach    
         </ul> 
            
          </div>
           @endif
<a href="{{route('posts.create')}}" class="btn btn-primary">create new post</a>	<div class="row">
	<div class="row">	
<div class="col-lg-10">
	<table class="table table-bordered">
		<tr>
			<th>id</th>
			<th>title</th>
			<th>content</th>
			<th>action</th>

		</tr>
		@foreach($posts as $rs)
		<tr>
		<td>{{$rs->post_id}}</td>	
		<td>{{$rs->title}}</td>	
		<td>{{$rs->body}}</td>	
		<td><a class="btn-sm btn-primary"href="{{route('posts.edit',$rs->post_id)}}">edit</a></td>
 <td>     
        <form method="post"  action="{{ route('posts.destroy',$rs->post_id) }}">
        	

          {{ csrf_field() }}      
          <input name="_method" type="hidden" value="DELETE">    
            <input type="submit"  value="delete" class="btn-xs btn-danger">   
                     </form> 
                      </td>

		</tr>
@endforeach
	</table>

</div>

</div>
</div>
@endsection
