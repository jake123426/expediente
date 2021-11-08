<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    use HasFactory;

    protected $fillable = ['asunto', 'fecha'];

    public function usuarios(){
        return $this->belongsToMany('App\Models\User');
    }

}
