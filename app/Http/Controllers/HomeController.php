<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
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
        $aux = DB::select("select id from accounts where email = ?",array(Auth::User()->email));
        $char = DB::select("select * from players where account_id = ? ",array($aux[0]->id));
        
        return view('home')->with(['chars'=>$char]);
    }

     public function player(){
        
        return view('player');
    }
    
}
