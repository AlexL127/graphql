<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$empleado_type = new ObjectType([
    'name' => 'empleado',
    'description' => 'Tipo de dato Empleado',
    'fields' => [
        'id_empleado' => Type::int(),
        'nombre' => Type::string(),
        'apellido_pa' => Type::string(),
        'apellido_ma' => Type::string(),
        'departamento' => Type::string(),
        'telefono' => Type::string(),
        'turno' => Type::int()
    ]
]);