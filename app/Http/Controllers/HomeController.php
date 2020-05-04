<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = User::get()->first();
        $users = User::get();
        
        $allUsers = User::withTrashed()->get();
        return view('admin.dashboard.home', compact('user','users','allUsers'));
    }
    
    
    
    
  
    
    
    
}
