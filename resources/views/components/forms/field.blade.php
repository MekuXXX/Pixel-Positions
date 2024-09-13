@props(['label', 'name'])

<div>
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-1 min-w-[20rem] md:min-w-[30rem]">
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
