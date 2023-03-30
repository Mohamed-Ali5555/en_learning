<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class versionMesAtrr extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'image',

        'version_m_id',
    ];

    // public function versionMes(){
    //     return $this->belongsTo('App\Models\VersionMes','version_m_id','id');
    // }
}
