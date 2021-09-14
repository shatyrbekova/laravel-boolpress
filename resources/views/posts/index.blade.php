@extends('layouts.app')

@section('content')


<div class="container posts-container">
   
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">content</th>
        <th scope="col">author</th>
        <th scope="col">cover</th>
        <th scope="col">actions</th>
       
        </tr>
    </thead>
    <tbody>
        @foreach($allPosts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
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