@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($allPosts as $post)
    <div>
        <h2> {{$post->title}} </h2>
        <h3> {{$post->author}} </h3>
        <p>{{$post->title}} </p>
        <img src="{{$post->cover}}" alt="">


    </div>
   
@endforeach
</div>

@endsection
