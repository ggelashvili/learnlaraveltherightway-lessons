<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="size-8"
                         src="{{ Vite::asset('resources/images/logo.png') }}"
                         alt="Your Company">
                </div>
                <div>
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="{{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                           aria-current="page">Dashboard</a>
                        <a href="{{ route('transactions.index', absolute: false) }}"
                           class="{{ request()->routeIs('transactions.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Transactions</a>
                        <a href="/categories"
                           class="{{ request()->routeIs('categories') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
