<?php

namespace App\Service;

use App\Interface\PayableInterface;

class PaypalPayment implements PayableInterface {
    public function pay() {
        // Execute paypal payment logic
    }
}
