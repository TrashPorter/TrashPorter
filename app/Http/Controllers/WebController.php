<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index(Request $request)
    {
    }

    public function payment(Request $request)
    {

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 25000,
            ),
            'item_details' => array(

                [
                    'id' => 'a1',
                    'price' => '5000',
                    'quantity' => intval($request->get('jumlah_botol')),
                    'name' => 'botol plastik'
                ],
                [
                    'id' => 'b1',
                    'price' => '5000',
                    'quantity' => intval($request->get('jumlah_kaleng')),
                    'name' => 'kaleng'
                ],
                [
                    'id' => 'c1',
                    'price' => '8000',
                    'quantity' => intval($request->get('jumlah_kardus')),
                    'name' => 'kaleng'
                ],
                [
                    'id' => 'd1',
                    'price' => '6000',
                    'quantity' => intval($request->get('jumlah_so')),
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
        $json = json_decode($request->get('json'));
        $order = new order();
        $order->status = $json->transaction_status;
        $order->nama = $request->get('nama');
        $order->nomor = $request->get('nomor');
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        return $order->save() ? redirect(url('/'))->with('alert-success', 'Order Berhasil Dibuat') : redirect(url('/'))->with('alert-failed', 'Terjadi Kesalahan');
    }
}
