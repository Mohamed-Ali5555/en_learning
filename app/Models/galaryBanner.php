<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galaryBanner extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'image',
        'galary_id',
    ];

    // public function rel_banner(){
    //     return $this->hasMany('App\Models\galaryBanner','galary_id','galary_id');

    // }

  

    
  
}
