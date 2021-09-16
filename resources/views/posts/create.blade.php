
    @extends('layouts.app')

    @section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            
           <div class="form-group">
            <label for="content">Content</label>
            <input type="text" name="content" id="content" class="form-control">

           </div>
            
             <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
             </div>
           
            <div class="form-group">
                <label for="cover">Cover</label>
            <input type="text" name="cover" id="cover" class="form-control">
            </div>
           
            <div class="form-group">
            <input type="submit" value="Salva" class="form-control">
            </div>
        </form>
       

    </div>

    @endsection
    
