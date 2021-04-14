<?php

use App\Models\Empleado;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
require_once('types.php');

$rootQuery = new ObjectType([
    'name' => 'Query',
    'fields' =>[
        'empleado' =>[
            'type' => $empleado_type,
            'args' => [
                'id' => Type::nonNull(Type::int())
            ],
            'resolve' => function($root, $args){
                $empleado = Empleado::where('id_empleado',$args["id"])->get();
                return $empleado;
            }
        ]
    ]
]);