<?php

namespace App;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
  protected $fillable=['package_id','schedule_id','ticket','total_price'];
  
public function schedule(){
    return $this->belongsTo(schedule::class);
} 
}
