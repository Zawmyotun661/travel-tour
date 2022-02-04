<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
  
    protected $fillable=['user_id','package_name','route','duration','price','image'];


    public function user(){
        return $this->belongsTo(user::class);
    } 
    public function schedule(){
        return $this->belongsToMany(schedule::class,'package_details','schedule_id','package_id');
    }
}
