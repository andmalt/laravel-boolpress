<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $newPost = new Post();
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories','newPost','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:posts|max:100',
            'post_content'=>'required|min:20',
            'image_url'=>'string'
        ],
        [
            'required'=>'Devi compilare correttamente il campo :attribute',
            'post_content.min'=>'Il post deve essere lungo almeno di 20 caratteri',
        ]);

        $data = $request->all();
        /* dd($data); */
        $data['post_date'] = Carbon::now();
        $data['user_id'] = Auth::user()->id;
        $data['image_url'] = Storage::put( 'posts/images' , $data['image']);
        $newPost = new Post();
        $newPost->fill($data);
        
        $newPost->save();

        if(array_key_exists('tags', $data)){
            $newPost->tags()->sync($data['tags']);
        }

        return redirect()->route('admin.post.show', $newPost->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $imagePrefix = '';
        if(!str_starts_with($post->image_url ,'http')){
            $imagePrefix = asset('storage/'.$post->image_url);
        }else{
            $imagePrefix = $post->image_url;
        }

        return view('admin.posts.show',compact('post','imagePrefix'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        $tagIds = $post->tags->pluck('id')->toArray();
        return view('admin.posts.edit', compact('post','categories','tags','tagIds'));
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
        $data = $request->all();
        $data['post_date'] = Carbon::now();
        $data['user_id'] = Auth::user()->id;
        $data['image_url'] = Storage::put('posts/images', $data['image']);
        $post->update($data);

        if(array_key_exists('tags', $data)){
            $post->tags()->sync($data['tags']);
        }

        return redirect()->route('admin.post.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
