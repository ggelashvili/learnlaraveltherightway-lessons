<?php

declare(strict_types = 1);

namespace App\Services;

class TransactionService
{
    public function findTransaction(int $transactionId): array
    {
        return [
            'transactionId' => $transactionId,
            'amount'        => 25,
        ];
    }
}
