@php
    $tags = $job->tags->toArray();
@endphp
<x-card class="flex flex-col text-center min-w-[20rem]">

    <h4 class="text-xs font-semibold self-start italic">{{ $job->employer->name }}</h4>

    <div class="py-8">
        <h3 class="text-xl font-bold group-hover:text-blue-800 transition-colors duration-200">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">Full Time - From ${{ number_format($job->salary) }}</p>
    </div>

    <div class="flex justify-between items-end mt-auto">

        <div>
            @foreach (array_slice($tags, 0, 3) as $tag)
                <x-tag href="/tags/{{ $tag['name'] }}">{{ $tag['name'] }}</x-tag>
            @endforeach
            @if (count($tags) > 3)
                <x-tag>...</x-tag>
            @endif
        </div>

        <img src="{{ asset('storage/' . $job->employer->logo) }}" alt="User Image"
            class="rounded-2xl w-[48px] h-[48px]" />
    </div>
</x-card>
