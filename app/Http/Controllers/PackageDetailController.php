<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\package;
use App\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PackageDetailController extends Controller
{
    public function create(){
        $package=package::first();
        $schedule=schedule::first();
        $package->schedule()->attach($schedule);
        
    }

    public function show(){
        $package=package::all();
        $schedule=schedule::all();
        return view('/pos/show',compact('package','schedule'));
    }
}
