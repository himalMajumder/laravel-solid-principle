<?php

namespace App\Service;

use App\Interface\PayableInterface;

class WirePayment implements PayableInterface {
    public function pay() {
        // Execute wire payment logic
    }
}
