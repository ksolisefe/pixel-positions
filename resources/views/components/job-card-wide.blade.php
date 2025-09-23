@props(['job'])

<x-panel class="flex flex-row justify-between min-h-40">
    <div class="flex flex-row flex-1">
        <x-employer-logo :employer="$job->employer" :width="100"/>
        <div class="flex flex-col ml-4  justify-between flex-1">
            <a href="#" class="self-start text-sm text-white/40">{{ $job->employer->name }}</a>
            <div class="self-start text-xl font-bold mb-8 group-hover:text-blue-800 group-hover:transition-colors duration-300">
                <a href="{{ $job->url }}" target="_blank">
                    {{ $job->title }}
                </a>
            </div>
            <div class="self-start text-sm text-white/40">{{ $job->schedule }} - From {{ $job->salary }}</div>
        </div>
    </div>

    <div class="flex flex-col justify-between items-end">
        <div class="flex space-x-2">
            <x-tag-void>{{ $job->location }}</x-tag-void>
            <x-tag-void>22h</x-tag-void>
        </div>
        <div class="flex space-x-2">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
    </div>
</x-panel>