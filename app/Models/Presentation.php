<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Presentation extends Model
{

    use HasFactory;
    use LogsActivity;

    protected $fillable = ['descripcion', 'tipo','NroFojas', 'file', 'expediente_id'];

    public function expediente(){
        return $this->belongsTo('App\Models\Expediente');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->setDescriptionForEvent(fn(string $eventName) => "Actuacion procesal registrada")
        ->useLogName('Registro')
        ->logOnly(['id', 'descripcion', 'created_at']);
        // Chain fluent methods for configuration options
    }

    /* public function archivo(){
        return $this->hasOne('App\Models\Archivo');
    } */
}
