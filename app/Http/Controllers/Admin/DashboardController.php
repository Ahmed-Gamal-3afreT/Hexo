<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class DashboardController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    public function index(){

        $user = User::get()->first();
        $users = User::get();

        $allUsers = User::withTrashed()->get();
        return view('admin.dashboard.home', compact('user','users','allUsers'));
    }


    public function upload(){

        $user = User::get()->first();



        return view('admin.dashboard.upload', compact('user'));
    }



}
