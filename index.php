<?php

require('vendor/autoload.php');

//use App\Models\Empleado;
use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'db_control',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);



$capsule->setAsGlobal();

$capsule->bootEloquent();

require('graphql/boot.php');

/* $emp = Empleado::where('id_empleado',1)->get();

var_dump($emp->toArray()); */