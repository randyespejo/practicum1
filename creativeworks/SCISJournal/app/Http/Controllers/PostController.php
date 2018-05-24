<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use APP\User;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'item' => 'mimes:pdf,doc,docx,jpeg,jpg,png|max: 2000'
        ]);

        //Handle file Upload
        if($request->hasFile('item')){
            //Get Filename with Extension
            $filenameWithExt = $request->file('item')->getClientOriginalName();
            //Get just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Extension
            $extension = $request->file('item')->getClientOriginalExtension();
            // if($extension=='pdf'){
            //     $content_types='application/pdf';
            //    }elseif ($extension=='doc') {
            //      $content_types='application/msword';  
            //    }elseif ($extension=='docx') {
            //      $content_types='application/vnd.openxmlformats-officedocument.wordprocessingml.document';  
            //    }else{
            //     exit('Requested file does not exist on our server!');
            //    }
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('item')->storeAs('public/items', $fileNameToStore);
        }else {
            $filenameToStore = 'noimage.jpg, nofile.pdf';
        }

        //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->user_id = auth()->user()->id;
        $post->item = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
        // return view('pages.announcement')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorize Posts');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        //Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorize Posts');
        }

        $post -> delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
