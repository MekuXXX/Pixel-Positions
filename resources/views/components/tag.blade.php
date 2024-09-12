@php
    $classes =
        'bg-white/10 px-2 py-1 rounded-xl text-2xs font-bold select-none hover:bg-white/25 transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ strtolower($slot) }}</a>
