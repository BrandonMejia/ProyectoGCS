<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    public function centros(){
        return $this->hasMany('App\Models\Centro');
    }

    public function provincia(){
        return $this->belongsTo('App\Models\Provincia');
    }
}
