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
}
