<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany('App\Models\User');
    }

    public function distrito(){
        return $this->belongsTo('App\Models\Distrito');
    }
}