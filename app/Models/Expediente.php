<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;


    protected $fillable = ['NroExpediente', 'proceso', 'tribunal', 'departamento_id', 'mateia_id', 'despacho_id'];

    public function usuarios(){
        return $this->belongsToMany('App\Models\User');
    }

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }

    public function materia(){
        return $this->belongsTo('App\Models\Materia');
    }

    public function despacho(){
        return $this->belongsTo('App\Models\Despacho');
    }

    public function presentaciones(){
        return $this->hasMany('App\Models\Presentation');
    }

}
