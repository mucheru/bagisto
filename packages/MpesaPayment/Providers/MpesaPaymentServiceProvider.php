<?php

namespace MpesaPayment\Providers;

use Illuminate\Support\ServiceProvider;





class MpesaPaymentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Code to register your payment gateway

       


    }

    public function register()
    {
        // Code to register your payment gateway

        $this->registerConfig();
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethods.php', 'paymentmethods'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );
    }
}
