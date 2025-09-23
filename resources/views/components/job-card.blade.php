@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    
    <div class="py-8 font-bold">
        <div class="group-hover:text-blue-800 group-hover:transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title}}
            </a>
        </div>
        <div>{{ $job->schedule }} - From {{ $job->salary }}</div>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="flex space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="45"/>
    </div>
</x-panel>