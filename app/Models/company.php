<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'desc',
        'image',
        'banner_img',
        'title_detail',
        'desc_detail',
        // 'img'

    ];

}
