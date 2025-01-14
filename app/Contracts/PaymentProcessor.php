<?php

declare(strict_types = 1);

namespace App\Contracts;

interface PaymentProcessor
{
    public function process(array $transaction): void;
}
