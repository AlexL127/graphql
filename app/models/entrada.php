<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model{
    protected $table = "entradas";
    public $timestamps = false;

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
}