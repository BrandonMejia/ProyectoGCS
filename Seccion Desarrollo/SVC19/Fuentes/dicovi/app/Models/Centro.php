<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(User::class);
    }

    public function distrito(){
        return $this->belongsTo(Distrito::class);
    }    
}
