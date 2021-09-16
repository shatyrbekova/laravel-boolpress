@extends('layouts.app')

@section('content')


<div class="container posts-container">
   <h3>Aggiungi un nuovo post <a href="{{route('posts.create')}}"><i class="bi bi-plus-square"></i></a></h3>
    <table class="table">
    <thead>
        <tr>
        <th scope="col" >#</th>
        <th scope="col">TITLE</th>
        <th scope="col">CONTENT</th>
        <th scope="col">AUTHOR</th>
        <th scope="col">COVER</th>
        <th scope="col">ACTIONS</th>
       
        </tr>
    </thead>
    <tbody>
        @foreach($allPosts as $post)
            <tr>
                <th scope="row" class="id">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->author}}</td>
                <td><img src="{{$post->cover}}" alt="picture of {{$post->title}}" /></td>
              
                <td><a href="{{ route('posts.show', $post) }}"><i class="bi bi-zoom-in"></i></a></td>
                
            </tr>
        @endforeach
    </tbody>
    </table>
    
</div>
     

@endsection