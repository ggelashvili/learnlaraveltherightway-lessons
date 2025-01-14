<x-layout title="Transactions" header-title="Transactions" :extend-header="true">
    <x-slot:header>
        <div class="mx-auto max-w-7xl py-3 px-4 sm:px-6 lg:px-8 text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <x-cards.stat color="green" label="Total Income" :amount="$totalIncome" />
                <x-cards.stat color="red" label="Total Expense" :amount="$totalExpense" />
                <x-cards.stat color="blue" label="Net Savings" :amount="$netSavings" />
                <x-cards.stat color="yellow" label="Goal" :amount="$goal" />
            </div>
        </div>
    </x-slot:header>
    <div>
        <div class="flex justify-end">
            <div>
                <x-btn type="primary" :link="route('transactions.create')">
                    Create Transaction
                </x-btn>
            </div>
        </div>
        <div class="mt-6"></div>
    </div>
</x-layout>
