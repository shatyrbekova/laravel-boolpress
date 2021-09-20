
    @extends('layouts.app')

    @section('content')
    
    <div class="container">
        <h1>Modifica il post</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Aggiungiamo posts.update e value="{{$post->title}}: vediamo nella pagina http://127.0.0.1:8000/posts/12/edit le cose da aggiornare --}}
        <form action="{{route('posts.update',$post)}}" method="post">
            @csrf
           @method('PUT ')
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
            </div>
            
           <div class="form-group">
            <label for="content">Content</label>
            <input type="text" name="content" id="content" class="form-control" value="{{$post->content}}">

           </div>
            
             <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" value="{{$post->author}}">
             </div>
           
            <div class="form-group">
                <label for="cover">Cover</label>
            <input type="text" name="cover" id="cover" class="form-control" value="{{$post->cover}}">
            </div>
           
            <div class="form-group">
            <input type="submit" value="Salva" class="form-control">
            </div>
        </form>
       <h3>Ritorna alla  lista <a href="{{route('posts.index')}}"><i class="bi bi-arrow-left-circle"></i></a></h3>

    </div>

    @endsection
    
