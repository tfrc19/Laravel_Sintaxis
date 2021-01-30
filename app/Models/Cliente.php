<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable=
    (
        ["nombre",
        "apellido"
        ]
    );
    //protected $primaryKey = 'cliente_id';
    public function articulo () {

        return $this->hasOne("App\Models\Articulo");

    }

    public function articulos(){
        return $this->hasMany("App\Models\Articulo");
    }

    public function perfils(){
        return $this->belongsToMany("App\Models\Perfil");
    }

    //Relacion Polimorfica
    public function calificaciones(){
        return $this->morphMany("App\Models\Calificacion","calificacion");
    }
   /* protected $fillable=([
        'nombre',
        'apellido'
    ]);
*/
    
}
