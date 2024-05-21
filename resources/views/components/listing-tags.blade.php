@props(['tagsCsv'])


@php
    $tags = explode(',', $tagsCsv)
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?tags={{ $tags }}">{{ $tags }}</a>
    </li>
    @endforeach
</ul>



