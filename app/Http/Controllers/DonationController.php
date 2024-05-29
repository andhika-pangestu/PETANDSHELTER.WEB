<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Midtrans\Config;
use Midtrans\CoreApi;
use Illuminate\Routing\Controller;


class DonationController extends Controller
{
    public function processDonation(Request $request)
    {
        // Validasi input
        $request->validate([
            'amount' => 'required|numeric|min:1000',
            'donor_name' => 'required|string|max:255'
        ]);

        // Buat donasi baru di database
        $donation = Donation::create([
            'order_id' => 'order-' . time(),
            'amount' => $request->input('amount'),
            'donor_name' => $request->input('donor_name')
        ]);

        // Set konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Siapkan data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $donation->order_id,
                'gross_amount' => $donation->amount,
            ],
            'payment_type' => 'gopay',
            'gopay' => [
                'enable_callback' => true,
                'callback_url' => url('/donate/callback')
            ]
        ];

        // Panggil API Midtrans untuk membuat transaksi
        try {
            $response = CoreApi::charge($params);

            if ($response->payment_type === 'gopay') {
                if ($response->actions) {
                    foreach ($response->actions as $action) {
                        if ($action->name === 'generate-qr-code') {
                            return view('donate', ['qr_url' => $action->url]);
                        } elseif ($action->name === 'deeplink-redirect') {
                            return redirect($action->url);
                        }
                    }
                }
            }

        } catch (\Exception $e) {
            return redirect('/donate')->with('error', $e->getMessage());
        }
    }
}
