<x-layout>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
    <div class="mt-4 mb-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
