@props(['active' => false])

@php
    $classes = 'font-bold px-4 py-2 rounded-md hover:bg-white/10 transition-colors duration-200';

    if ($active) {
        $classes .= ' text-blue-500 bg-white/5 hover:bg-white/5';
    }

@endphp

<a class="{{ $classes }}" {{ $attributes }}>{{ $slot }}</a>
