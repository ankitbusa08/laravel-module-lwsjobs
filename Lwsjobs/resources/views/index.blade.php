{{-- @extends('lwsjobs::layouts.master')

@section('content')
    <x-lwsjobs::section-heading>
        Hello World
    </x-lwsjobs::section-heading>

    <p>Module: {!! config('lwsjobs.name') !!}</p>
@endsection --}}

<x-lwsjobs::layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Find Job</h1>
            <x-lwsjobs::forms.form action="/search" class="mt-6">
                <x-lwsjobs::forms.input name="q" placeholder="web dev" :label="false" />
            </x-lwsjobs::forms.form>
        </section>

        <section>
            <x-lwsjobs::section-heading>Top/featued Jobs</x-lwsjobs::section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-lwsjobs::jobcard :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-lwsjobs::section-heading>Tags</x-lwsjobs::section-heading>
            <div class="space-x-2 mt-6">
                @foreach ($tags as $tag)
                    {{-- <x-tag :tag="$tag" /> --}}
                    <x-lwsjobs::tag :$tag />
                @endforeach
            </div>

        </section>
        <section>
            <x-lwsjobs::section-heading>Recent Jobs</x-lwsjobs::section-heading>
            <div class="space-y-3 mt-6">
                @foreach ($jobs as $job)
                    <x-lwsjobs::job-card-wide :$job />
                @endforeach
            </div>
        </section>

    </div>
</x-lwsjobs::layout>
