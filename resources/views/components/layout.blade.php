<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Laravel' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <x-nav />
            @isset($header)
                @if($extendHeader ?? false)
                    <x-header>{{ $headerTitle ?? 'Default Title' }}</x-header>
                @endif
                {{ $header }}
            @else
                <x-header>{{ $headerTitle ?? 'Default Title' }}</x-header>
            @endisset
            <main>
                <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    <div class="py-6 bg-white shadow-md rounded-lg px-4 min-h-72">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
