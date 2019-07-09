<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use APP\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at','desc')->take(6)->get();
        return view('blog.index',['myposts'=>$posts]);
    }


    public function blog($id = null)
    {

        if($id){
            $posts = Post::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->whereCategory_id($id)
                            ->paginate(3);

        }
        else{
            $posts = Post::orderBy('created_at','desc')
                     ->whereStatus('PUBLISHED')
                     ->paginate(3);
      
            }
        $categories=Category::all();  
                   
        return view('blog.blog',['id'=>$id, 'myposts'=>$posts,'mycategories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contact= new Contact();
        
        $contact->object = $request->input('object');
        $contact->email= $request->input('email');
        $contact->message=$request->input('message');
        $contact->save();
        return  redirect('/contact')->with('succes','saved with success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show( $slug)
    {
      $post = Post::whereSlug($slug)->first();
      $post->nb_visite++;
      $post->save();
      return view('blog.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
