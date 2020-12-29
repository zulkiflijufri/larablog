<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/tailwind.css">
</head>

<section class="bg-gray-800">
    <div class="container mx-auto px-20 py-20">
        <div class="md:flex items-center">
            @yield('welcome')
        </div>
    </div>
</section>

<body class="bg-gray-100">
    <!-- Blog -->
    <section class="text-gray-600 body-font">
        <div class="container px-20 py-12 mx-auto">
            @if(request()->is('/'))
            <h2 class="text-gray-800 tracking-wide font-medium capitalize mb-5 text-center sm:text-center text-xl sm:text-2xl md:text-3xl md:text-left">
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
    <footer class="text-gray-600 body-font bg-gray-700">
        <div class="container px-20 py-4 mx-auto flex items-center sm:flex-row flex-col">
            <p class="text-sm text-gray-100 my-auto">
                © {{ date('Y') }} Makassar, Built using <a href="https://tailwindcss.com/" target="_blank" class="underline">Tailwind</a> and <a href="https://github.com/themsaid/wink" target="_blank" class="underline">Wink</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="mx-2" href="https://www.linkedin.com/in/zulkiflijufri/" aria-label="Linkedin">
                    <svg class="fill-current text-gray-400 hover:text-gray-200 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z" />
                    </svg>
                </a>
                <a class="mx-2" href="https://www.github.com/zulkiflijufri" aria-label="Github">
                    <svg class="fill-current text-gray-400 hover:text-gray-200 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                    </svg>
                </a>
            </span>
        </div>
    </footer>
    <!-- End footer -->

</body>
</html>