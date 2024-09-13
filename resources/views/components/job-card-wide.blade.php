<x-card class="flex gap-x-4">
    <div>
        <img src="{{ asset('storage/' . $job->employer->logo) }}" alt="User Image" class="rounded-2xl w-[3rem] h-[3rem]" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="text-xs font-semibold self-start italic text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="text-xl font-extrabold group-hover:text-blue-800 transition-colors duration-200">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="mt-auto">{{ $job->schedule }} - From ${{ number_format($job->salary) }}</p>

    </div>

    <div class="flex flex-col justify-between items-end">

        @if ($job->featured)
            <p class="bg-blue-500 py-1 px-3 rounded-lg font-bold italic">Featured</p>
        @endif
        <div class="mt-auto">

            @foreach ($job->tags as $tag)
                <x-tag href="/tags/{{ $tag->name }}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    </div>

</x-card>
