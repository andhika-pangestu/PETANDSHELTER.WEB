<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

use Midtrans\Config;

// Inside your constructor or method
Config::$serverKey = config('services.midtrans.serverKey');
Config::$clientKey = config('services.midtrans.clientKey');
Config::$isProduction = config('services.midtrans.isProduction');
Config::$isSanitized = config('services.midtrans.isSanitized');
Config::$is3ds = config('services.midtrans.is3ds');
