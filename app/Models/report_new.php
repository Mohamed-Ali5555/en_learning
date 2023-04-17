<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report_new extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'banner_img',
        'title_detail',
        'desc_detail',

    ];
}
