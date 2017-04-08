<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('home');
    }

    public  function showList()
    {
        $user_id = Auth::id();
//        dd($user_id);
        $trips = DB::table('trips')->where('trips.user_id', '=', $user_id)->get();
      $user =  DB::table('users')->where('users.id', '=', $user_id)->get();
        $trips = $trips->toArray();
        $user = $user->toArray();
//
//
//        dd($user);
        return view('User.list',compact('trips','user'));
    }

}
