@extends('layouts.app')

@section('title', 'Daeng Blog - '. $winkPost->title)

<!-- Blog -->
@section('content')
<div class="max-w-full lg:max-w-3xl mx-auto pt-2">
    <div class="h-auto bg-white bg-opacity-90 px-8 pt-8 pb-6 rounded-lg overflow-hidden">
        <h1 class="title-font sm:text-xl md:text-3xl lg:text-4xl mb-1 font-medium text-gray-900">
            {{ $winkPost->title }}
        </h1>
        <div>
            <span class="text-gray-400 text-xs round">{{ date('j F o', strtotime($winkPost->publish_date)) }}</span>
            <span class="text-gray-400">.</span>
            <span class="text-gray-400 text-xs">{{ Post::readingTime($winkPost->body) }}</span>
        </div>
        <div class="sm:text-md lg:text-lg tracking-wide text-gray-500">
            <p class="leading-relaxed mb-3">{!! $winkPost->body !!}</p>
        </div>
        <div class="flex -ml-1 mt-4">
            @foreach($winkPost->tags as $tag)
            <a href="{{ route('tags.all', $tag->slug) }}" class="text-gray-500 mb-4 text-sm bg-gray-100 rounded transition duration-150 p-2 m-1 hover:text-gray-800 hover:bg-gray-200">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="bg-white mt-10 mb-10 lg:flex p-5 rounded">
        <div class="lg:w-1/6 mb-3">
            <img src="/img/profil.jpg" class="rounded-full mx-auto">
        </div>
        <div class="lg:pl-5 leading-relaxed text-center lg:text-left w-full lg:w-5/6">
            <span class="font-bold">{{ $winkPost->author->name }}</span>
            <div class="text-md text-justify">
                <p>{!! $winkPost->author->bio !!}</p>
            </div>
        </div>
    </div>
    <div class="bg-white bg-opacity-90 mt-4 px-8 py-8 rounded-lg overflow-hidden">
        @include('posts.comments', ['slug' => $winkPost->slug])
    </div>
</div>
<!-- End blog -->
</body>
</html>
@endsection
