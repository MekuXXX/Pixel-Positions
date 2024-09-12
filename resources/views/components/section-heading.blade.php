@php
    $classes = 'mb-2 flex items-center gap-2 text-lg font-bold';
@endphp

<h3 {{ $attributes->merge(['class' => $classes]) }}>
    <span class="w-2 h-2 bg-white inline-block"></span>
    {{ ucwords($slot) }}
</h3>
