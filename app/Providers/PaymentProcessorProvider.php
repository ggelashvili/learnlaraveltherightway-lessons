<?php

namespace App\Providers;

use App\Contracts\PaymentProcessor;
use App\Services\Stripe;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PaymentProcessorProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentProcessor::class, function(Application $app) {
            return $app->make(Stripe::class, ['config' => []]);
        });
    }

    public function provides(): array
    {
        return [PaymentProcessor::class];
    }
}
