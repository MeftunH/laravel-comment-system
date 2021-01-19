<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function index()
    {
        $posts=Post::latest()->get();
        return view('/home/index',compact('posts'));
    }
    public function create()
    {
   return view('post.create');
    }
    public function store(Request $request)
    {
    $this->validate($request,[
        'title'=>'required|max:255',
        'image'=>'mimes:jpg,png,jpeg',
        'body'=>'required',
    ]);
    //image upload

        $slug=Str::slug($request->title,'-');
        $image = $request->image;
        if ($request->image !=null) {
            $imageName = $slug . '-' . uniqid() . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();

        //if image exist
        if (!Storage::disk('public')->exists('post'))
        {
            Storage::disk('public')->makeDirectory('post');
        }
        $img = Image::make($image)->resize(200,null,function ($constraint)
        {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->stream();
        Storage::disk('public')->put('post/'.$imageName,$img);
    }
        $post=new Post();
        $post->title=$request->title;
        $post->user_id=Auth::id();
        $post->slug=$slug;
        if ($request->image !=null) {
            $post->image = $imageName;
        }
        $post->body=$request->body;
        $post->save();
        return redirect("/");
    }

    public function show()
    {
        return view('post.create');
    }
    public function edit()
    {
        return view('post.create');
    }
}
