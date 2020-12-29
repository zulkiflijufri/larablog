@extends('layouts.app')

@section('title', $winkPost->title)

<!-- Title detail post -->
@section('welcome')
<div class="lg:w-full text-center">
    <h2 class="text-gray-300 lg:text-4xl font-medium px-16 py-16">
        <p class="hover:underline">
            {{ $winkPost->title }}
        </p>
    </h2>
</div>
<!-- End title detail post -->
@endsection

<!-- Blog -->
@section('content')
<div class="p-4 w-2/3">
    <div class="h-auto bg-white bg-opacity-90 px-8 pt-8 pb-6 rounded-lg overflow-hidden">
        <p class="title-font sm:text-2xl md:text-3xl mb-1 tracking-wide font-medium text-gray-900 hover:text-gray-600">
            {{ $winkPost->title }}
        </p>
        <div>
            <span class="text-gray-400 text-xs round">{{ date('j F o', strtotime($winkPost->publish_date)) }}</span>
            <span class="text-gray-400">.</span>
            <span class="text-gray-400 text-xs">{{ $winkPost->readingTime($winkPost->body) }}</span>
        </div>
        <div class="sm:text-md md:text-lg tracking-wide">
            <p class="leading-relaxed mb-3">{!! $winkPost->body !!}</p>
        </div>
        <div class="flex -ml-1 mt-4">
            @foreach($winkPost->tags as $tag)
            <a href="#" class="text-gray-500 mb-4 text-sm bg-gray-100 rounded transition duration-150 p-2 m-1 hover:text-gray-800 hover:bg-gray-200">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</div>
<div class="mt-4 w-2/6">
    <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-sm">
        @foreach($winkTag as $tag)
        <a href="{{ route('tags.all', $tag->slug) }}" class="text-gray-500 text-sm bg-gray-100 rounded transition duration-150 p-2 mr-1 mb-1 inline-block hover:bg-gray-200 hover:text-gray-800">{{ $tag->name }}</a>
        @endforeach
    </div>
</div>
<!-- End blog -->
</body>
</html>
@endsection
