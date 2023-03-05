<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'content',
        'image',
        'size_guid',

    ];
}
