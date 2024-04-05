<?php

namespace MpesaPayment\Payment;

use Webkul\Payment\Payment\Payment;

class MpesaPaymentGateway extends Payment

{
    protected $code  = 'mpesa';

    public function getRedirectUrl()
    {
    }
}
