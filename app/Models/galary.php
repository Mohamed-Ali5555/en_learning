<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galary extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'image',
    ];

    public function galaryBanner(){
        return $this->hasMany('App\Models\galaryBanner','galary_id','id');

    }
}
