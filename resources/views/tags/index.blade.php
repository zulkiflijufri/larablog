@extends('layouts.app')

@section('title', 'Hello my friend | Semua Tag')

<!-- Title detail post -->
@section('welcome')
<div class="lg:w-full text-center">
    <div class="text-gray-300 lg:text-4xl font-medium p-20">
        <p class="hover:underline">Tags: {{ $winkTag->name }}</p>
    </div>
</div>
<!-- End title detail post -->
@endsection

<!-- Blog -->
@section('content')
@forelse($winkTag->posts as $post)
@if($post->liveToRead())
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
            <a href="{{ route('tags.all', $tag->slug) }}" class="text-gray-500 mb-4 text-sm bg-gray-100 rounded p-1 m-1 transition duration-150 hover:text-gray-500 hover:bg-gray-200">{{ $tag->name }}</a>
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
@endif

@empty
<div class="w-18 mx-auto bg-blue-500 text-white">
    <div class="flex justify-between items-center container mx-auto py-4 px-6">
        <div class="flex">
            <svg viewBox="0 0 40 40" class="h-6 w-6 fill-current">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
            </svg>
            <p class="mx-3">Belum ada postingan dengan tag <strong>{{ $winkTag->name }}</p>
        </div>
    </div>
</div>
@endforelse
<!-- End blog -->
</body>

</html>
@endsection
