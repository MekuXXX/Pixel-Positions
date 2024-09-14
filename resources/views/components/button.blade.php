@props(['disabled' => false])

@php
    // Determine the default classes and the 'active' state
    $classes =
        $disabled ?? false
            ? 'border-b-2 border-blue-600 font-semibold pointer-events-none' // Active state
            : 'hover:text-blue-600 border-b border-transparent hover:border-blue-600 transition duration-300 ease-in-out'; // Default state
@endphp

<a {{ $attributes->merge(['class' => $classes . ' px-3 py-2 text-sm font-semibold']) }}>
    {{ $slot }}
</a>
