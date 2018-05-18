<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programmer_post;
use Illuminate\Support\Facades\Auth;
class ProgrammerController extends Controller
{
    public function question(){
    	return view('question');
    }

    public function post_p(Request $req){
    	$post = new Programmer_post;

    	$post->programmer_id = Auth::user()->id;
    	$post->title = $req->title;
    	$post->detail = $req->detail;

    	$post->save();

    	return redirect()->action('HomeController@index')->with('status','successfully added');
    }
}
