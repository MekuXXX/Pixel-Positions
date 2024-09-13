<x-layout>
    <x-section class="text-center space-y-4">
        <h1 class="capitalize text-4xl font-bold">Let's find your next job</h1>

        <x-forms.form action="/search">
            <x-forms.input placeholder="Web Developer..." name="q" :label="false" />
        </x-forms.form>
    </x-section>

    <x-section>
        <x-section-heading>Top Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-y-4 gap-x-3 mx-auto">
            @foreach ($featuredJobs as $job)
                <x-job-card :$job />
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-section-heading>Tags</x-section-heading>

        @foreach ($job->tags as $tag)
            <x-tag href="/tags/{{ $tag->name }}">{{ $tag->name }}</x-tag>
        @endforeach
    </x-section>

    <x-section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div class="space-y-4">
            @foreach ($notFeaturedJobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        </div>
        <div class="px-2 mt-6">
            {{ $notFeaturedJobs->links() }}
        </div>
    </x-section>
</x-layout>
