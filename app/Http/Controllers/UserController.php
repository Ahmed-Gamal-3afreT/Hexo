<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('front.home');
    }
    
    
    public function users()
    {
        //
        $users = User::withTrashed()->get();
        
        return view('admin.members.user', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    
    
    public function delete($id){
        
        $user = User::find($id);
        $user->delete();
        
        return redirect('members');
        
    }
    
    public function deleted(){
        
        $users = User::onlyTrashed()->get();
        
        return view('admin.members.deleted',compact('users'));
    }
    
    
    public function restore($id){
        
        $u = User::onlyTrashed()->where('id',$id);
        
        $u->restore();
        
        
        
        
        
        return redirect('members');
    }
    
    
    public function admin(){
        
        
    }
    
    
    public function logout(){
        
         Auth::logout();
  return redirect('/login');
    }
    
    
}
