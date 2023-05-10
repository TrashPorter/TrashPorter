<?php

namespace App\Services\Midtrans;

use App\Models\Pesan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();

        $this->order = $order;
    }

    public function getSnapToken()
    {
        $order = Pesan::where('status', 0)->first();
        $user = User::where('id', $order->user_id);
        $item_detail = [];
        if ($order->botol == 1) {
            array_push(
                $item_detail,
                [

                    'id' => 1,
                    'price' => $order->harga_botol,
                    'quantity' => $order->jumlah_botol,
                    'name' => 'Botol',

                ]
            );
        }

        if ($order->kaleng == 1) {
            array_push(
                $item_detail,
                [
                    'id' => 2,
                    'price' => $order->harga_kaleng,
                    'quantity' => $order->jumlah_kaleng,
                    'name' => 'Kaleng',
                ]
            );
        }

        if ($order->kardus == 1) {
            array_push(
                $item_detail,
                [
                    'id' => 3,
                    'price' => $order->harga_kardus,
                    'quantity' => $order->jumlah_kardus,
                    'name' => 'Kardus',
                ]
            );
        }
        if ($order->organik == 1) {
            array_push(
                $item_detail,
                [
                    'id' => 4,
                    'price' => $order->harga_so,
                    'quantity' => $order->jumlah_so,
                    'name' => 'Besi',
                ]
            );
        }
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->id,
                'gross_amount' => $this->order->ongkir,
            ],
            'item_details' => $item_detail,
            'customer_details' => [
                'first_name' => $order->nama,
                'email' => Auth::user()->email,
                'phone' => $order->nomor,
            ]
        ];
        // dd($params['item_details']);

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
