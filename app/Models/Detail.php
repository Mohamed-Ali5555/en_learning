<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $guarded =[]; 

    // protected $fillable = [
    //     'banner_img',
    //     'title',
    //     'desc',
    //     'image'
    // ];

    // public function company(){
    //     return $this->belongsTo('App\Models\Detail','company_id','id');

    // }
}
