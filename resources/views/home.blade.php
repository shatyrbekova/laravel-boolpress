@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($allPosts as $post)
    <div class="container">
        <h2> {{$post->title}} </h2>
        <h3> {{$post->author}} </h3>
        <p>{{$post->title}} </p>
        <img src="{{$post->cover}}" alt="">


    </div>
   
@endforeach
@endsection
