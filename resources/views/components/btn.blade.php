@props(['type' => 'default', 'submit' => false, 'link' => ''])

@php
    $colorClasses = [
        'default' => 'text-gray-800 border-2 border-slate-200 hover:bg-slate-50',
        'primary'   => 'bg-blue-600 hover:bg-blue-700 text-white',
        'danger'    => 'bg-red-600 hover:bg-red-700 text-white',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white',
    ]
@endphp

@empty($link)
    <button
        type="{{ $submit ? 'submit' : 'button' }}"
        {{ $attributes->merge(['class' => 'w-full text-center px-5 py-2.5 text-medium rounded font-medium ' . $colorClasses[$type] ?? '']) }}
    >
        {{ $slot }}
    </button>
@else
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => 'w-full text-center px-5 py-2.5 text-medium rounded font-medium ' . $colorClasses[$type] ?? '']) }}
    >
        {{ $slot }}
    </a>
@endempty
