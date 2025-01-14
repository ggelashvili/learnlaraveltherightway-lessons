<x-layout title="Add New Transaction" header-title="Add New Transaction">
    <div class="max-w-md mx-auto">
        <form action="{{ route('transactions.store') }}" method="POST" class="space-y-4">
            <div>
                @csrf
                <label for="date" class="block text-gray-700 mb-1">Transaction Date</label>
                <input
                    type="datetime-local"
                    name="date"
                    id="date"
                    class="w-full border-slate-200 rounded p-2 focus:outline-blue-500 border-2"
                    required
                />
            </div>
            <div>
                <label for="amount" class="block text-gray-700 mb-1">Transaction Amount</label>
                <input
                    type="number"
                    step="0.01"
                    name="amount"
                    id="amount"
                    class="w-full border-slate-200 rounded p-2 focus:outline-blue-500 border-2"
                    placeholder="e.g. -50.00 or 100.00"
                    required
                />
            </div>
            <div>
                <label for="description" class="block text-gray-700 mb-1">Description</label>
                <textarea
                    name="description"
                    id="description"
                    rows="3"
                    class="w-full border-gray-300 rounded p-2 focus:outline-blue-500 border-2"
                    placeholder="Optional details about the transaction..."
                ></textarea>
            </div>
            <div class="w-full flex space-x-2">
                <x-btn type="secondary" :link="route('transactions.index')">Cancel</x-btn>
                <x-btn type="primary" :submit="true">Save Transaction</x-btn>
            </div>
        </form>
    </div>
</x-layout>
