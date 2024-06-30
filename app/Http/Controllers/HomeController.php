<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){


        if (Auth::id()) {
            if (Auth::user()->user_type=='0') {
                        $users = user::all();
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
                        $userCount = $users->count();
                        return view('admin.home', compact('userCount', 'userdetails'));
                    } 
        else if (Auth::user()->user_type=='farmer') {
                        $userId = auth()->id();
                        $userdetails = User::where('id', $userId)->first();
                        return view('farmer.home', compact('userdetails'));
                    }    
        }else{
                   return view('users.home');
        }

    }

        public function index(){
        return view('users.home');
    }
    
}