<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\package;
use Facade\Ignition\Support\Packagist\Package as PackagistPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PackageController extends Controller
{
    public function __construct()
    {
              $this->middleware(auth()->user());
    }
      public function create()
      {   
        $package=package::all();
       return view('/pos/package',compact('package'));
      
      }
      public function store(Request $request)
              {  
                $userid=auth()->id();
                $request['user_id']=$userid;
                //dd($request->all());
              $package = new package();
              $package->package_name=$request->package_name;
              $package->route=$request->route;
              $package->duration=$request->duration;
              $package->price=$request->price;
              if($request->hasFile('image'))
              {
                $img = $request->file('image');
                $upload_path = public_path() . 'upload/';
                $file = $img->getClientOriginalName();
                $img->move($upload_path,$file);
                $path = 'upload/'.$file;
              }else{
                $path = 'images/rs.jpg';
              }
              $package->image = $path;
             $package->user_id=$request->user_id;
               $package->save();
              //  dd($package);
         
          return view('/pos/schedule');
          
      }
      public function edit(package $package,$id){
        $package= package::find($id);
        $user_id = Auth()->user()->id;
        return view('/pos/editpackage',compact('package','user_id'));
      }
      public function update(Request $request,$id)
      {
        $package=package::find($id);
        $package->package_name=$request->package_name;
        $package->route=$request->route;
        $package->duration=$request->duration;
        $package->price=$request->price;
        if($request->hasFile('image'))
        {
          $img = $request->file('image');
          $upload_path = public_path() . 'upload/';
          $file = $img->getClientOriginalName();
          $img->move($upload_path,$file);
          $path = 'upload/'.$file;
        }
        
        $package->image = $path;
       $package->user_id=$request->user_id;
         $package->save();
       
         return redirect('/pos/show');
      }
      public function destroy($id){
        package::where('id',$id)->delete();
        
        return redirect()->back();
      
      }
    
}
