<?php

namespace App\Http\Controllers;

use App\booking;
use App\package as AppPackage;
use App\package_detail;
use App\schedule;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function show(schedule $schedule){
        $schedule=schedule::all();
        return view('/pos/booking',compact('schedule'));
    }
    public function store(Request $request,booking $booking){
        $schedule=schedule::first('id');
        $request['schedule_id']=$schedule;
        $booking=new booking();
        $booking->schedule_id=$request->schedule_id;
        $booking->ticket=$request->ticket;
        $booking->total_price=$request->total_price;
        $booking->save();
        $booking=booking::all();
        return('pos/booking');
    }
}
