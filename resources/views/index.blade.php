@extends('layouts.app')

@section('title', 'Daeng Blog')


<!-- Welcome -->
@section('welcome')
<div class="md:inline-block lg:flex items-center bg-white p-8 rounded-md shadow-sm">
    <div class="lg:w-3/5">
        <h2 class="text-gray-700 text-3xl lg:text-4xl font-bold text-center lg:text-left">Daeng Blog</h2>

        <p class="text-gray-700 tracking-wide lg:w-full mt-4 text-justify">
            Berisi hal menarik yang dijumpai saat melakukan <i>experiment</i> dalam dunia maya maupun dunia nyata, dan dokumentasi <i>error</i> yang sering muncul secara berulang saat menulis <i>code</i>.
        </p>

        <div class="flex justify-center lg:justify-start -ml-3 mt-6">
            <a class="mx-2" href="https://www.linkedin.com/in/zulkiflijufri/" aria-label="Linkedin">
                <svg class="fill-current text-gray-400 hover:text-gray-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z" />
                </svg>
            </a>

            <a class="mx-2" href="https://www.github.com/zulkiflijufri" aria-label="Github">
                <svg class="fill-current text-gray-400 hover:text-gray-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                </svg>
            </a>
        </div>
    </div>

    <div class="lg:mt-4 md:w-2/5">
        <div class="flex items-center justify-center">
            <div class="hidden lg:block max-w-lg">
                <img class="w-40 h-40 object-cover object-center rounded-full" src="/img/avatar.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
<!-- End welcome -->

<!-- Blog -->
@section('content')
@forelse($winkPosts as $post)
<div class="p-4 lg:w-1/3">
    <div class="h-full bg-white bg-opacity-90 px-8 pt-8 p-6 tracking-wide rounded-lg shadow-sm overflow-hidden relative">
        <a href="{{ route('posts.read', $post->slug) }}" class="title-font sm:text-2xl text-xl -m-1 mb-3 font-medium text-gray-900 hover:text-gray-600">
            {{Str::limit($post->title, 55)}}
        </a>
        <div>
            <span class="text-gray-400 text-xs">{{ date('F j, o', strtotime($post->publish_date)) }}</span>
            <span class="text-gray-400">.</span>
            <span class="text-gray-400 text-xs">{{ Post::readingTime($post->body) }}</span>
        </div>
        <div class="block -m-1 mt-2">
            @foreach($post->tags as $tag)
            <a href="{{ route('tags.all', $tag->slug) }}" class="text-gray-500 text-sm bg-gray-100 border-red-600 rounded p-1 m-1 transition duration-150 hover:text-gray-500 hover:bg-gray-200">
                {{ $tag->name }}
            </a>
            @endforeach
        </div>
        <div class="mb-5">
            <p class="leading-relaxed mb-3">{!! Str::limit($post->body, 200) !!}</p>
        </div>
        <div class="-m-1">
            <a href="{{ route('posts.read', $post->slug) }}" class="text-blue-400 text-sm rounded p-2 transition duration-150 hover:text-blue-200 hover:bg-blue-400">
                Selengkapnya
            </a>
        </div>
    </div>
</div>
@empty
<div class="w-18 mx-auto bg-blue-500 text-white">
    <div class="flex justify-between items-center container mx-auto py-4 px-6">
        <div class="flex">
            <svg viewBox="0 0 40 40" class="h-6 w-6 fill-current">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
            </svg>
            <p class="mx-3">Belum ada postingan</p>
        </div>
    </div>
</div>
@endforelse
@if($winkPosts->total() > 6)
<div class="my-6 mx-auto">
    <a href="{{ route('posts.all') }}" class="text-blue-500 bg-blue-200 text-sm rounded p-2 transition duration-150 hover:text-blue-200 hover:bg-blue-400">
        Semua postingan
    </a>
</div>
@endif
<!-- End blog -->
</body>
</html>
@endsection
