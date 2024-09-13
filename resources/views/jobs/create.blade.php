<x-layout>
    <x-page-heading>
        Create A New Job

    </x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" type="number" placeholder="$90,000" />

        <x-forms.select label="Location" name="location">
            <option>Remote</option>
            <option>Hyprid</option>
            <option>On-Site</option>
        </x-forms.select>

        <x-forms.select label="Schedule" name="schedule">
            <option>Service</option>
            <option>Part-Time</option>
            <option>Full-Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />


        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
