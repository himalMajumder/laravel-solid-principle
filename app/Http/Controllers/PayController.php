<?php

namespace App\Http\Controllers;

use App\Service\Payment;
use Illuminate\Http\Request;
use PaymentFactory;

class PayController extends Controller {
    /**
     * Pay
     *
     * @param Request $request
     * @return PayableInterface $payment
     */
    public function pay(Request $request) {
        $paymentFactory = new PaymentFactory();

        $payment = $paymentFactory->initializePayment($request->type);
        $payment->pay();
    }

}
