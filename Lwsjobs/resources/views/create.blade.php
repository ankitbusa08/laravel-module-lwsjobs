<x-lwsjobs::layout>
    <x-lwsjobs::page-heading>New Job</x-lwsjobs::page-heading>

    <x-lwsjobs::forms.form method="POST" action="/jobs">
        <x-lwsjobs::forms.input label="Title" name="title" placeholder="CEO" />
        <x-lwsjobs::forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-lwsjobs::forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-lwsjobs::forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-lwsjobs::forms.select>

        <x-lwsjobs::forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-lwsjobs::forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-lwsjobs::forms.divider />

        <x-lwsjobs::forms.input label="Tags (comma separated)" name="tags"
            placeholder="laracasts, video, education" />

        <x-lwsjobs::forms.button>Publish</x-lwsjobs::forms.button>
    </x-lwsjobs::forms.form>
</x-lwsjobs::layout>
