<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('Backend.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.post.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {

        try{
            $data = $request->all();

            $slug = Str::slug($request->title);
            $data['slug'] = $slug;
            $data['is_featured'] = $request->is_featured ? '1' : '0' ?? '0';
            
            $image_name = time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('storage/uploads/post_images'), $image_name);
            $data['image'] = $image_name;
            
            Post::create($data);
            return redirect()->route('post.index');
        }
        catch(\Exception $e){            
            return redirect()->route('post.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('Backend.post.add', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        try{
            $data = $request->all();
            if($request->hasFile('image')){
                $image_name = time().'.'.$data['image']->getClientOriginalExtension();
                $data['image']->move(public_path('storage/uploads/post_images'), $image_name);
                $data['image'] = $image_name;
            }

            $data['is_featured'] = $request->is_featured ? '1' : '0' ?? '0';
            $post->fill($data)->save();

            return redirect()->route('post.index');
        }
        catch(\Exception $e){
             return redirect()->route('post.index')->with("error", 'Something went wrong please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
