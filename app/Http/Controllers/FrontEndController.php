<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

use App\Post;

use App\Setting;

use App\Category;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
                ->with('settings', Setting::first())
                ->with('categories', Category::take(4)->get())
                ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())              
                ->with('laravel', Category::find(6))
                ->with('mongo_db', Category::find(7));                
    }

    public function singlePage($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');
        return view('single')
                ->with('post', $post)
                ->with('title', $post->title)
                ->with('categories', Category::take(4)->get())
                ->with('settings', Setting::first())
                ->with('tags', Tag::all())
                ->with('next', Post::find($next_id))
                ->with('prev', Post::find($prev_id));
    }
    
    public function category($id)
    {
        $category = Category::find($id);
        return view('category')
                ->with('title', $category->name)
                ->with('category', $category)
                ->with('tags', Tag::all())
                ->with('categories', Category::take(4)->get())
                ->with('settings', Setting::first());
    }
     public function tag($id)
    {
        $tag = Tag::find($id);
        return view('tag')
                ->with('title', $tag->tag)    
                ->with('tag', $tag)
                ->with('tags', Tag::all())
                ->with('categories', Category::take(4)->get())
                ->with('settings', Setting::first());
    }
}
