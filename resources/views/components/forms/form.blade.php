<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto flex flex-col gap-y-4', 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
