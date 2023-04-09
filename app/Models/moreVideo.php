<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moreVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'link','categoryVideo_id','image'
    ];

    public function categoryVideo()
    {
        return $this->belongsTo('App\Models\CategoryVideo','categoryVideo_id','id');
    }

    public function rel_videos(){
        return $this->hasMany('App\Models\moreVideo','categoryVideo_id','categoryVideo_id')->limit(10); //get all products that has the same cat_id
    }

}
