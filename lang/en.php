<?php

return [
    // Custom
    'unexpected' => [
        'type'      => 'error',
        'code'      => -1,
        'message'   => 'Unexpected error'
    ],
    // 200
    'success' => [
        'type'      => 'success',
        'code'      => 200,
        'message'   => 'Success'
    ],
    'created' => [
        'type'      => 'success',
        'code'      => 201,
        'message'   => 'Created'
    ],
    'no_content' => [
        'type'      => 'error',
        'code'      => 204,
        'message'   => 'No content'
    ],
    // 400
    'missing_params' => [
        'type'      => 'error',
        'code'      => 400,
        'message'   => 'Missing required parameters'
    ],
    'no_auth' => [
        'type'      => 'error',
        'code'      => 401,
        'message'   => 'Access denied'
    ],
    'rejected_by_server' => [
        'type'      => 'error',
        'code'      => 409,
        'message'   => 'The server has rejected the request'
    ],
    'invalid_ext' => [
        'type'      => 'error',
        'code'      => 415,
        'message'   => 'Invalid extension'
    ],
    // 500
    'err_ext_gateway' => [
        'type'      => 'error',
        'code'      => 501,
        'message'   => 'Error in external gateway'
    ]
];