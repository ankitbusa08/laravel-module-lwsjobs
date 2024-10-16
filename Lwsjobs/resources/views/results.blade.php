<x-lwsjobs::layout>
    <x-lwsjobs::page-heading>Results</x-lwsjobs::page-heading>

    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-lwsjobs::job-card-wide :$job />
        @endforeach
    </div>
</x-lwsjobs::layout>
