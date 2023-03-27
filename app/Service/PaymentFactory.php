<?php

use App\Service\CreditCardPayment;
use App\Service\PaypalPayment;
use App\Service\WirePayment;

class PaymentFactory{
    public function initializePayment($type){
        if($type == 'credit'){
            return new CreditCardPayment();
        }
        else if($type == 'paypal'){
            return new PaypalPayment();
        }
        else if($type == 'wire'){
            return new WirePayment();
        }

        throw new Exception("Unsupported payment method");
    }
}
