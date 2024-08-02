@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 space-y-6">
        <h3 class="font-bold text-2xl group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p>{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-end mt-auto">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" />
    </div>
</x-panel>
