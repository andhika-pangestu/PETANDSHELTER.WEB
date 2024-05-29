<?php
namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class DonationController extends Controller
{
    protected $request;
    protected $response = [];

    public function __construct(Request $request)
    {
        $this->request = $request;

        // Set Midtrans configuration
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function index()
    {
        $data['donations'] = Donation::orderBy('id', 'desc')->paginate(8);
        return view('donation', $data);
    }

    public function submitDonation()
    {
        $validator = Validator::make($this->request->all(), [
            'donor_name'  => 'required',
            'donor_email' => 'required|email',
            'amount'      => 'required|numeric'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first()
            ]);
        }
    
        DB::transaction(function() {
            // Proses penyimpanan donasi ke database
            $donation = Donation::create([
                'donor_name' => $this->request->donor_name,
                'donor_email' => $this->request->donor_email,
                'donation_type' => $this->request->donation_type,
                'amount' => floatval($this->request->amount),
                'note' => $this->request->note,
            ]);
    
            // Proses pembuatan snap token dari Midtrans
            $payload = [
                'transaction_details' => [
                    'order_id'      => $donation->id,
                    'gross_amount'  => $donation->amount,
                ],
                'customer_details' => [
                    'first_name'    => $donation->donor_name,
                    'email'         => $donation->donor_email,
                ],
                'item_details' => [
                    [
                        'id'       => $donation->donation_type,
                        'price'    => $donation->amount,
                        'quantity' => 1,
                        'name'     => ucwords(str_replace('_', ' ', $donation->donation_type))
                    ]
                ]
            ];
    
            $snapToken = Snap::getSnapToken($payload);
            $donation->snap_token = $snapToken;
            $donation->save();
    
            $this->response['snap_token'] = $snapToken;
        });
    
        return response()->json($this->response);
    }
    

    public function notificationHandler(Request $request)
    {
        $notif = new Notification();

        $transaction = $notif->transaction_status;
        $type = $notif->payment_type;
        $orderId = $notif->order_id;
        $fraud = $notif->fraud_status;
        $donation = Donation::findOrFail($orderId);

        if ($transaction == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $donation->setPending();
                } else {
                    $donation->setSuccess();
                }
            }
        } elseif ($transaction == 'settlement') {
            $donation->setSuccess();
        } elseif ($transaction == 'pending') {
            $donation->setPending();
        } elseif ($transaction == 'deny') {
            $donation->setFailed();
        } elseif ($transaction == 'expire') {
            $donation->setExpired();
        } elseif ($transaction == 'cancel') {
            $donation->setFailed();
        }
    }
}
