<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

        $slug = Str::slug($request->title, '-');
        $image = $request->image;
        $imageName = $slug . '-' . uniqid() . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();

        if (!Storage::disk('public')->exists('post')) {
            Storage::disk('public')->makeDirectory('post');
        }
        // Image Croped
        $img = Image::make($image)->resize(752, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->stream();
        Storage::disk('public')->put('post/' . $imageName, $img);

        $post=new Post();
        $post->title=$request->title;
        $post->user_id=Auth::id();
        $post->slug=$slug;
        $post->image = $imageName;
        $post->body=$request->body;
        $post->save();
        $username=DB::table('users')->select('users.name')->where('users.id',$post->user_id);
        $users = User::all();
        foreach($users as $user){
            Mail::to($user->email)->queue(new NewPost($post));
        }
        return redirect()->route('home',compact('username'));
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
