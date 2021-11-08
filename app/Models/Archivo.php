<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = ['Url', 'tipo', 'presentation_id'];

    /* public function presentacion(){
        return $this->belongsTo('App\Models\Presentation');
    } */
}
