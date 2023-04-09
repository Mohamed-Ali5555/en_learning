<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryVideo extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
    ];
    public function moreVideo()
{
    return $this->hasMany('App\Models\moreVideo','categoryVideo_id','id');
}
}
