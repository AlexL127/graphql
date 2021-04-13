<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
    protected $table = "empleados";
    public $timestamps = false;
    protected $fillable = ['nombre','apellido_pa','apellido_ma','departamento','telefono','turno'];
    
    public function entradas(){
        return $this->hasMany(Entrada::class);
    }

    public function salidas(){
        return $this->hasMany(Salida::class);
    }
}