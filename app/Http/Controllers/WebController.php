<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index(Request $request)
    {
    }

    public function payment(Request $request)
    {

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-KTlPzWlzhSTyuF1VdtU_RZf2';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 18000,
            ),
            'item_details' => array(

                [
                    'id' => 'a1',
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'botol plastik'
                ],
                [
                    'id' => 'b1',
                    'price' => '8000',
                    'quantity' => 1,
                    'name' => 'kaleng'
                ],

            ),
            'customer_details' => array(
                'first_name' => $request->get('nama'),
                'last_name' => '',
                'email' => 'budi.pra@example.com',
                'phone' => $request->get('nomor'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);


        $title = 'Pembayaran';
        return view('layouts.pembayaran', compact('title'), ['snap_token' => $snapToken]);
    }

    public function payment_post(Request $request)
    {
        return $request;
    }
}
