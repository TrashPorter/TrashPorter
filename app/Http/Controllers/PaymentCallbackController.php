<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Services\Midtrans\CallbackService;

class PaymentCallbackController extends Controller
{
    public function receive()
    {
        $callback = new CallbackService;

        if ($callback->isSignatureKeyVerified()) {
            $notification = $callback->getNotification();
            $order = $callback->getOrder();

            if ($callback->isSuccess()) {
                Pesan::where('id', $order->id)->update([
                    'status' => 1,
                ]);
            }

            if ($callback->isExpire()) {
                Pesan::where('id', $order->id)->update([
                    'status' => 2,
                ]);
            }

            if ($callback->isCancelled()) {
                Pesan::where('id', $order->id)->update([
                    'status' => 3,
                ]);
            }

            return response()
                ->json([
                    'success' => true,
                    'message' => 'Notifikasi berhasil diproses',
                ]);
        } else {
            return response()
                ->json([
                    'error' => true,
                    'message' => 'Signature key tidak terverifikasi',
                ], 403);
        }
    }
}
