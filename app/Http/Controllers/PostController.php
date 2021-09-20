<?php

namespace App\Http\Controllers;

use App\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allPosts = Post::all();
        return view('posts.index', compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    $request->validate(['cover'=>'url']);
    $request->validate(['title'=>'required|unique:posts|max:255']);
    $request->validate(['content'=>'required']);

     $data =$request->all();

     $post = new Post();
    //  $allPosts ->title =$data['title'];
    //  $allPosts ->content =$data['content'];
    //  $allPosts ->author =$data['author'];
    //  $allPosts ->cover =$data['cover'];
    //  $allPosts->save();
    $this->fillAndSavePost($post, $data);
     return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
        $allPosts = Post::find($id);
        
        return view('posts.show', compact('allPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    //é meglio creare Post(modello Post ed oggetto $posts)
    {
       return view('posts.edit', compact('post'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $data =$request -> all();
       
        // $post->update($data);
        $post-> fill($data);

       $this->fillAndSavePost($post, $data);
        return redirect()->route('posts.show', $post);
        
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function fillAndSavePost(Post $post, $data){

        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->author = $data['author'];
        $post->cover=$data['cover'];
    }
}
