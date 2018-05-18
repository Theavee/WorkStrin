<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class PageController extends Controller
{
    public function userList(){
      return view('userList');
    }

    public function qus(Request $req){

    	$posts = new Question;

    	$posts->qus_one = $req->qus_one;
    	$posts->qus_two = $req->qus_two;
    	$posts->qus_three = $req->qus_three;

    	$posts->save();

    	return redirect()->action('HomeController@index')->with('status','successfully added');
    }
}
