@extends('layouts.app')

@section('content')


<div class="container posts-container">
   <table>
      <thead>
         <tr>
         <th scope="col">#</th>
         <th scope="col">title</th>
         <th scope="col">content</th>
         <th scope="col">author</th>
         <th scope="col">cover</th>

        
         </tr>
     </thead>
     <tbody>
     
          <tr>
              <th scope="row">{{$allPosts->id}}</th>
              <td> {{$allPosts->title}}</td>
              <td> {{$allPosts->content}}</td>
              <td> {{$allPosts->author}}</td>
              <td><img src="{{$allPosts->cover}}" alt="picture of {{$allPosts->title}}" /></td>
            
             
              
          </tr>
  </tbody>
  </table>
     


  
  

</div>
     

@endsection