@props(['tag' => null, 'href' => '#', 'size' => 'base'])

@php
    $commonClasses = "bg-white/10 hover:bg-white/20 rounded-xl font-bold transition-colors duration-300";

    if ($size === 'base') {
        $commonClasses .= " px-5 py-1 text-sm";
    }
    
    if ($size === 'small') {
        $commonClasses .= " px-2 py-1 text-2xs";
    }
@endphp

@if ($tag)
    <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $commonClasses }}">
        {{ $tag->name }}
    </a>
@else
    <a href="{{ $href }}" class="{{ $commonClasses }}">
        {{ $slot }}
    </a>
@endif