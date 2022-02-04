<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function __construct()
    {
              $this->middleware(auth()->user());
    }
    public function create()
    {
        $schedule=schedule::first();
        return view('/pos.schedule');
    }
    public function store(Request $request){
        $userid=auth()->id();
        $request['user_id']=$userid;
       
     $schedule= new schedule();
     $schedule->hotel_name=$request->hotel_name;
     $schedule->bus=$request->bus;
     $schedule->depature_date=$request->depature_date;
     $schedule->depature_time=$request->depature_time;
     $schedule->total_seat=$request->total_seat;
     $schedule->available_seat=$request->available_seat;
     $schedule->user_id=$request->user_id;
   
     $schedule->save();
     return redirect('pos/show');
       
    
    }
    public function edit(schedule $schedule,$id){
        $schedule=schedule::all();
        $user_id=Auth()->user()->id;
        return view('pos/editschedule',compact('schedule','user_id'));
    }
    public function update(Request $request,$id){
        $schedule=schedule::find($id);
        $schedule->user_id=$request->user_id;
        $schedule->hotel_name=$request->hotel_name;
        $schedule->bus=$request->bus;
        $schedule->depature_date=$request->depature_date;
        $schedule->depature_time=$request->depature_time;
        $schedule->total_seat=$request->total_seat;
        $schedule->available_seat=$request->available_seat;
     
    
        $schedule->save();
        return redirect('pos/show');
    }
    public function destroy($id){
        schedule::where('id',$id)->delete();
        return redirect()->back();
    }
}
