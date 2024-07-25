<?php

return [
    'merchant_id' => env('MIDTRANS_MERCHANT_ID', ''),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-'),
    'server_key' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-'),
    'is_production' => false, // Set to true if you want to use the production environment
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];

/*return [
    'serverKey' => env('MIDTRANS_SERVER_KEY'),
    'is_production'=> env('MIDTRANS_IS_PRODUCTION'),
    'is_sanitized'=> env('MIDTRANS_IS_SANITIZED'),
    'is_3ds'=> env('MIDTRANS_IS_3DS'),
];*/