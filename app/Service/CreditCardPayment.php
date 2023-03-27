<?php

namespace App\Service;

use App\Interface\PayableInterface;

class CreditCardPayment implements PayableInterface {
    public function pay() {
        // Execute credit card payment logic
    }
}
