<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=([
        'producto',
        'precio',
        'observacion',
        'codigo',
        'pais'
    ]);

    public function cliente(){

        //return $this->hasOne("App\Models\Cliente");
        return $this->belongsTo("App\Models\Cliente");
    }

    //Relacion Polimorfica
    public function calificaciones(){
        return $this->morphMany("App\Models\Calificacion","calificacion");
    }
    
}
