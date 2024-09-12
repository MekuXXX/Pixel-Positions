@php
    $classes =
        'p-4 bg-white/5 rounded-xl  transition-colors duration-200 border-transparent hover:border-blue-800 border-2 group';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
