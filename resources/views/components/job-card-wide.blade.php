@props(['job'])

<x-panel class="flex items-start justify-between">

    <div class="flex gap-x-4 items-start flex-1">
        <x-employer-logo :employer="$job->employer" :size=90 />

        <div class="flex flex-col gap-y-6">
            <div class="flex flex-col gap-y-2">
                <a class="text-sm text-gray-400">{{ $job->employer->name }}</a>
                <h3 class="text-xl font-bold group-hover:text-blue-600 transition-colors duration-300">
                    <a href="{{ $job->url }}" target="_blank">
                        {{ $job->title }}
                    </a>
                </h3>
            </div>
            <p class="text-sm text-gray-400">{{ $job->salary }}</p>
        </div>
    </div>

    <div class="flex justify-end items-end space-x-1 mt-auto">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
