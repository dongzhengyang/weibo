<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create(){
        return view('user.create');
    }
    
    public function index(){
        return "列表首页";
    }
    
    public function show(User $user){
        return view('user.show',compact('user'));
    }
    
    public function store(Request $request){
        $this->validate($request,  [
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return "";
        
    }
}
