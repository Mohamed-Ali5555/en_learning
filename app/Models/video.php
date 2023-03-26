<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
     protected $table = 'videos';
  protected $fillable = [
      'title', 'video'
  ];
public function v_news()
{
    return $this->hasMany('App\Models\v_new','video_id','id');
}
}
