<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer_post;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
	public function post_b(Request $req){
		$post = new Buyer_post;
		
		$post->buyer_id = Auth::user()->id;
		$post->title = $req->title;
		$post->detail = $req->detail;

		$post->save();

		return redirect()->action('HomeController@index')->with('status','successfully added');
	}
}
