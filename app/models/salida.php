<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model{
    protected $table = "salidas";
    public $timestamps = false;

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
}