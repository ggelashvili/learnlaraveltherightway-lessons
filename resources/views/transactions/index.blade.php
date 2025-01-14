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
        <div class="mt-6">
            <table class="min-w-full bg-white divide-gray-400">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($transactions as $transaction)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ \Carbon\Carbon::parse($transaction->transaction_date)->format('m/d/Y g:i A') }}
                            </td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap text-sm {{ $transaction->amount < 0 ? 'text-red-600' : 'text-green-600' }}">
                                @if ($transaction->amount < 0)
                                    (${{ number_format(abs($transaction->amount), 2) }})
                                @else
                                    ${{ number_format($transaction->amount, 2) }}
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $transaction->description }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm w-32">
                                <div class="flex space-x-2">
                                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                        @csrf
                                        @method('DELETE')
                                        <x-btn type="danger" :submit="true">Delete</x-btn>
                                    </form>
                                    <x-btn :link="route('transactions.edit', $transaction->id)">
                                        Edit
                                    </x-btn>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-center">
                                No transactions found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
