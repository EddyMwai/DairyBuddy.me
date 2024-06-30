<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AdminController extends Controller
{


    public function logout(){
        session()->forget('adminLogin');
        return redirect('/login');
    }
    
     public function registerUser(Request $request){
        $user = new user;
        $file = \Request::file('image');
        $destination = 'user_images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('fname');
        $phone_number = $request->input('phone');
        // $user_type = $request->input('user_type');
        $user_type = 'farmer';
        $email = $request->input('email');
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->password=$password;

        $user->save();

        return redirect()->back();
    }

        public function deleteUser($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }

        public function update_graduation($id){
        $data = User::find($id);
        $data->Status='Active';
        $data->save();
        return redirect()->back();
    }

}
