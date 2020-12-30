<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/tailwind.css">
</head>

<nav class="bg-gray-200 shadow-sm">
    <div class="container mx-auto md:py-3">
        <div class="w-full flex">
            <div class="mx-auto py-4 md:py-1">
                <a href="{{ route('homepage') }}" class="tracking-wide py-1 px-2 text-gray-700 rounded text-sm font-medium uppercase hover:bg-gray-400 hover:text-white transition ease-out duration-200 md:mx-2">
                    Home
                </a>
                <a href="{{ route('posts.all') }}" class="tracking-wide py-1 px-2 text-gray-700 rounded text-sm font-medium uppercase hover:bg-gray-400 hover:text-white transition ease-out duration-200 md:mx-2">
                    Posts
                </a>
                <a href="#" class="tracking-wide py-1 px-2 text-gray-700 rounded text-sm font-medium uppercase hover:bg-gray-400 hover:text-white transition ease-out duration-200 md:mx-2">
                    Portfolio
                </a>
            </div>
        </div>
    </div>
</nav>

<section>
    <div class="container mx-auto px-10 md:px-16 lg:px-32 pt-12">
        @yield('welcome')
    </div>
</section>

<body class="bg-gray-100">
    <!-- Blog -->
    <section class="text-gray-600 body-font">
        <div class="container px-10 md:px-16 lg:px-32 py-8 md:py-10 lg:py-12 mx-auto">
            @if(request()->is('/'))
            <h2 class="text-gray-800 tracking-wide font-medium capitalize mb-5 text-center sm:text-center text-2xl md:text-3xl md:text-left">
                Postingan Terbaru
            </h2>
            @endif
            <div class="flex flex-wrap -m-4">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- End blog -->

    <!-- Footer -->
    <footer class="text-gray-600 bg-white">
        <div class="container px-10 md:px-14 lg:px-28 py-4 mx-auto">
            <p class="text-sm text-center text-gray-400 my-auto ml-auto">
                © {{ date('Y') }} Daeng Blog. Built using <a href="https://tailwindcss.com/" target="_blank" class="underline text-gray-500 hover:no-underline">Tailwind</a> and <a href="https://github.com/themsaid/wink" target="_blank" class="underline text-gray-500 hover:no-underline">Wink</a>
            </p>
        </div>
    </footer>
    <!-- End footer -->

</body>
</html>
