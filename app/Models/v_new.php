<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class v_new extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'image',
        'video_id',
        'banner_img',
        'title_detail',
        'desc_detail',
        'img'
    ];

}
