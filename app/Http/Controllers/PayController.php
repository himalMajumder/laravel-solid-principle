<?php

namespace App\Http\Controllers;

use App\Service\Payment;
use Illuminate\Http\Request;

class PayController extends Controller {
    /**
     * Pay
     *
     * @param Request $request
     */
    public function store(Request $request) {
        $payment = new Payment();
        $type    = $request->type;

        if ($type == 'credit') {
            // prepare credit card details
            // for processing
            $payment->payWithCreditCard();
        } elseif ($type == 'paypal') {
            // prepare paypal details
            // for processing
            $payment->payWithPaypal();
        } else {
            // prepare wire transfer details
            // for processing
            $payment->payWithWireTransfer();
        }

    }

}
