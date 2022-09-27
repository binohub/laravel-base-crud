<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::where('user_id', Auth::id())->get();
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $post = new Post();
        $post->title = $data['title'];
        $post->author = $data['author'];
        $post->description = $data['description'];
        $post->image = $data['image'];
        $post->date = $data['date'];

        // $data['author'] = Auth::user()->name;
        // $data['date'] = new DateTime();

        $post->save();
        return redirect()
            ->route('admin.posts.show', $post->id)
            ->with('created', 'The Post ' . $post->title . ' has been created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $img_path = Storage::put('uploads', $post->image);
        // dd($img_path);

        return view('admin.posts.edit', compact('post'));
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
        $data = $request->all();
        // dd($data);
        $post = Post::findOrFail($id);
        $post->title = $data['title'];
        $post->author = $data['author'];
        $post->description = $data['description'];
        $post->image = $data['image'];
        $post->date = $data['date'];

        // $data['author'] = Auth::user()->name;
        // $data['date'] = new DateTime();

        $post->save();
        return redirect()
            ->route('admin.posts.show', $post->id)
            ->with('updated', 'The Post ' . $data['title'] . ' has been modified successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        // dd($post->title);

        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()
            ->route('admin.posts.index') 
            ->with('deleted', 'The Post ' . $post->title . ' has been deleted successfully!'); 

    }
}
