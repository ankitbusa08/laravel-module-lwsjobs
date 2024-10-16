@props(['label', 'name'])

<div>
    @if ($label)
        <x-lwsjobs::forms.label :$name :$label />
    @endif

    <div class="mt-1">
        {{ $slot }}

        <x-lwsjobs::forms.error :error="$errors->first($name)" />
    </div>
</div>
