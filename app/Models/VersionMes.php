<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VersionMes extends Model
{
    use HasFactory;
    protected $table="version_mes";
    protected $fillable = [
        'main_title',
        'image',
    ];


    // public function versionAtr(){
    //     return $this->hasMany('App\Models\versionMesAtrr','version_m_id','id');
    // }
}
