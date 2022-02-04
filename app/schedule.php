<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillabel=['user_id','hotel_name','bus','depature_date','depature_time','total_seat','available_seat'];

    public function user(){
        return $this->belongsTo(user::class);
    }
    public function package(){
        return $this->belongsToMany(package::class,'package_details','package_id','schedule_id');
    }
    public function booking(){
        return $this->hasMany(booking::class);
    } 
}
