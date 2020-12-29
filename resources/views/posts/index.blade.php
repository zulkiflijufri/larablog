@extends('layouts.app')

@section('title', 'Hello my friend | Semua Postingan')

<!-- Title detail post -->
@section('welcome')
<div class="lg:w-full text-center">
    <div class="text-gray-300 lg:text-4xl font-medium p-20">
        <p class="hover:underline">Semua Postingan</p>
    </div>
</div>
<!-- End title detail post -->
@endsection

<!-- Blog -->
@section('content')
@foreach($winkPosts as $post)
<div class="p-4 lg:w-1/3">
    <div class="h-full bg-white bg-opacity-90 px-8 pt-8 p-6 tracking-wide rounded-lg shadow-sm overflow-hidden relative">
        <a href="{{ route('posts.read', $post->slug) }}" class="title-font sm:text-2xl text-xl -m-1 mb-3 font-medium text-gray-900 hover:text-gray-600">
            {{Str::limit($post->title, 55)}}
        </a>
        <div>
            <span class="text-gray-400 text-xs">{{ date('F j, o', strtotime($post->publish_date)) }}</span>
            <span class="text-gray-400">.</span>
            <span class="text-gray-400 text-xs">{{ $post->readingTime($post->body) }}</span>
        </div>
        <div class="flex -m-1">
            @foreach($post->tags as $tag)
            <a href="#" class="text-gray-500 mb-4 text-sm bg-gray-100 rounded p-1 m-1 transition duration-150 hover:text-gray-500 hover:bg-gray-200">{{ $tag->name }}</a>
            @endforeach
        </div>
        <div class="mb-5">
            <p class="leading-relaxed mb-3">{!! Str::limit($post->body, 200) !!}</p>
        </div>
        <div class="-m-1">
            <a href="{{ route('posts.read', $post->slug) }}" class="text-blue-400 text-sm rounded p-2 transition duration-150 hover:text-blue-600 hover:bg-blue-200">
                Selengkapnya
            </a>
        </div>
    </div>
</div>
@endforeach

<!-- End blog -->
</body>
</html>
@endsection
