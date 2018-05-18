<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Programmer_post;
use App\Buyer_post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->type == 'buyer'){
            $posts = Programmer_post::with('programmer')->get();
            //dd($posts);
            return view('buyer_home',compact('posts'));    
        }

        if(Auth::user()->type == 'programmer'){
            $posts = Buyer_post::with('buyer')->get();
            return view('programmer_home',compact('posts'));    
        }
        
    }
}
