<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        // Set Midtrans configuration
        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('donations.index');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'amount'    => 'required|numeric|min:1000',
            'note'      => 'nullable|string',
        ]);

        // Create the transaction payload for Midtrans
        $payload = [
            'transaction_details' => [
                'order_id'      => 'INV-' . Str::upper(Str::random(8)),
                'gross_amount'  => $request->amount,
            ],
            'customer_details' => [
                'first_name' => $request->name,
                'email'      => $request->email,
            ],
        ];

        // Get Snap Token from Midtrans
        $snapToken = Snap::getSnapToken($payload);

        // Return Snap Token for payment pop-up
        return response()->json([
            'snapToken' => $snapToken,
            'redirect_url' => route('donations.index'),
        ]);
    }
}
