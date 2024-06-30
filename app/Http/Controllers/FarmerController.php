<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use App\Models\Orders;
use App\Models\Booking;

class UserController extends Controller
{
     public function upload(Request $request){
        $booking = new booking;

        $name = $request->input('name');
        $email = $request->input('email');
        $date = $request->input('date');
        $subject = $request->input('subject');
        $comments = $request->input('comments');

        $booking->name=$name;
        $booking->email=$email;
        $booking->date=$date;
        $booking->subject=$subject;
        $booking->status="Pending";
        $booking->comments=$comments;

        $booking->save();

        return redirect()->back();
    }

     public function upload1(Request $request){
        $orders = new orders;

        $pid = $request->input('pid');
        $email = $request->input('email');
        $amo = $request->input('amo');
        $comments = $request->input('comments');

        $price = ( $amo / 10 ) * 7000;

        $orders->product_id=$pid;
        $orders->email=$email;
        $orders->amount=$amo;
        $orders->price=$price;
        $orders->status="Pending";        
        $orders->comments=$comments;

        $orders->save();

        return redirect()->back();
    }
}
