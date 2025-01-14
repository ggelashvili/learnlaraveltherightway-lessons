<?php

namespace App\Http\Controllers;

use App\Services\TransactionService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TransactionController
{
    public function index(): View
    {
        return view('transactions.index', [
            'totalIncome'  => 50000,
            'totalExpense' => 45000,
            'netSavings'   => 5000,
            'goal'         => 7500,
        ]);
    }

    public function show(int $transactionId, TransactionService $transactionService): string
    {
        $transaction = $transactionService->findTransaction($transactionId);

        return 'Transaction: ' . $transactionId . ', ' . $transaction['amount'];
    }

    public function create(): View
    {
        return view('transactions.create');
    }

    public function store(Request $request): string
    {
        return 'Transaction Created';
    }
}
