<?php

return [
    // Custom
    'unexpected' => [
        'type'      => 'error',
        'code'      => -1,
        'message'   => 'Error inesperado'
    ],
    // 200
    'success' => [
        'type'      => 'success',
        'code'      => 200,
        'message'   => 'Éxito'
    ],
    'created' => [
        'type'      => 'success',
        'code'      => 201,
        'message'   => 'Creado con éxito'
    ],
    'no_content' => [
        'type'      => 'error',
        'code'      => 204,
        'message'   => 'Sin contenido'
    ],
    // 400
    'missing_params' => [
        'type'      => 'error',
        'code'      => 400,
        'message'   => 'Faltan parámetros obligatorios'
    ],
    'no_auth' => [
        'type'      => 'error',
        'code'      => 401,
        'message'   => 'Acceso denegado'
    ],
    'rejected_by_server' => [
        'type'      => 'error',
        'code'      => 409,
        'message'   => 'El servidor ha rechazado la solicitud'
    ],
    'invalid_ext' => [
        'type'      => 'error',
        'code'      => 415,
        'message'   => 'Extensión inválida'
    ],
    // 500
    'err_ext_gateway' => [
        'type'      => 'error',
        'code'      => 501,
        'message'   => 'Error en gateway externo'
    ]
];