<?php

use App\Models\Empleado;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$rootQuery = new ObjectType([
    'name' => 'Query',
    'fields' =>[
        'user' =>[
            'type' => $empleado_type,
            'args' => [
                'id_empleado' => Type::int()
            ],
            'resolve' => function($root, $args){
                $empleado = Empleado::where('id_empleado',$args["id_empleado"])->get()->toArray();
                return $empleado;
            }
        ]
    ]
]);