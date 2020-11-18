<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\post;

class PostsController extends Controller
{
    public function show($slug){
        // $post = DB::table('posts')->where('slug','$slug')->first();
        $post = post::where('slug',$slug)->first();
        if(!$post){
            abort(404,'sorry an error occured');
        }
        return view('posts',
        ['post'=>$post]);
    }
}
