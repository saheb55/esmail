 <table style="border-collapse: collapse;">  
        <tr>
   <th>id</th>
   <th>name</th>    
   <th>email</th> 
        
     
       </tr>      
         @foreach($results as $rslt)  
          <tr>           
           <td>{{$rslt->id}} </td>
           <td>{{$rslt->name}} </td> 
           <td>{{$rslt->email}}</td>
           
    
 <td><a href="/users/delete/{{$rslt->id}}"> delete </a>  </td>  
   </tr>        
       @endforeach   
      </table>