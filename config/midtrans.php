<?php
return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-tMkqPbfhGZzmb2EFlQ2qigX2'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-yZM7vga4ZiQXB7gE'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];


return [
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];
