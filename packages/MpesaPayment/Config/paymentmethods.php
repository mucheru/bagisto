<?php

return [
    'mpesa'  => [
        'code'        => 'mpesa',
        'title'       => 'mpesa',
        'description' => 'mpesa',
        'class'       => 'MpesaPayment\Payment\MpesaPaymentGateway',
        'active'      => true,
        'sort'        => 1,
    ],
];
