@php
    $classes = 'mb-6';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</section>
