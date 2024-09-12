<x-card class="flex gap-x-4">
    <div>
        <img src="http://picsum.photos/seed/{{ rand(1, 100000) }}/90/90" alt="User Image" class="rounded-2xl" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#"
            class="text-xs font-semibold self-start italic text-gray-400">{{ $job->employer->user->name }}</a>
        <h3 class="text-xl font-extrabold group-hover:text-blue-800 transition-colors duration-200">{{ $job->title }}
        </h3>
        <p class="mt-auto">{{ $job->schedule }} - From ${{ number_format($job->salary) }}</p>

    </div>
    <div class="flex justify-between items-end mt-auto">

        <div>
            @foreach ($job->tags as $tag)
                <x-tag href="/tags/{{ $tag->name }}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>

    </div>
</x-card>
