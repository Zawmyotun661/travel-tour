<?php

namespace App\Http\Controllers;

use App\package;
use App\schedule;
use Illuminate\Http\Request;

class customershow extends Controller
{
    public function show(package $package){
        $package=package::all();
       
        return view('/pos/customerpackage',compact('package'));
    }
    public function showschedule(schedule $schedule,$id){
        $package=package::find($id);
        $schedule=schedule::all();
        
        return view('/pos/customerschedule',compact('schedule','package'));
    }
}
