<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-sans bg-pink-100 antialiased text-gray-800">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyDignity</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v6.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="106095114160774"
             theme_color="#ed64a6">
        </div>

        <div>
            <header class="shadow bg-white w-full">
                <div class="flex lg:flex-row flex-col items-center justify-between w-full lg:px-12 mx-auto">
                    <div class="w-full flex items-center justify-between lg:justify-start py-4 px-6 lg:px-0 lg:py-0">
                        <a href="/" class="font-bold text-xl">
                            <img src="{{ asset('img/logo/genu.png') }}" class="h-10" alt="">
                        </a>
                        <span class="px-4 text-gray-400 lg:inline hidden">|</span>
                        <a href="/" class="font-bold text-xl">
                            <img src="{{ asset('img/logo/logo-black.svg') }}" class="h-10" alt="">
                        </a>
                    </div>

                    <nav class="flex lg:flex-row flex-col items-center w-full lg:w-auto text-sm capitalize tracking-wider">
                        <div class="flex whitespace-no-wrap lg:flex-row flex-col items-center w-full px-6 lg:px-0">
                            <a
                                href="/"
                                class="w-full lg:mx-4 lg:inline-block block py-6  border-b-4 {{ Route::currentRouteName() == "welcome" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                            >
                                {{ cache('lang') == 'eng' ? 'Home' : 'Nyumbani' }}
                            </a>

                            <a
                                href="{{ url('about') }}"
                                class="w-full lg:mx-4 lg:inline-block block py-6 border-b-4 {{ Route::currentRouteName() == "about" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                            >
                                {{ cache('lang') == 'eng' ? 'About us' : 'Kuhusu' }}
                            </a>

                            <a
                                href="{{ url('topics') }}"
                                class="w-full lg:mx-4 lg:inline-block block py-6 border-b-4 {{ Route::currentRouteName() == "topics" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                            >
                                {{ cache('lang') == 'eng' ? 'Topics' : 'Mada' }}
                            </a>

                            <a
                                href="{{ url('team') }}"
                                class="w-full lg:mx-4 lg:inline-block block py-6 border-b-4 {{ Route::currentRouteName() == "team" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                            >
                                {{ cache('lang') == 'eng' ? 'Team' : 'Timu' }}
                            </a>

                            {{-- <a href="/experience" class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "experience" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500">Testimonies</a>--}}

                            <a
                                href="{{ asset('letter') }}"
                                class="w-full lg:ml-4 lg:inline-block block py-6 border-b-4 {{ Route::currentRouteName() == "letter" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                            >
                                {{ cache('lang') == 'eng' ? 'Letter from eagle' : 'Barua kutoka kwa tai' }}
                            </a>
                        </div>

                        <div class="flex w-full lg:w-auto items-center lg:ml-6 bg-pink-200 lg:px-1 px-6 py-2 lg:py-1 lg:mt-0 lg:rounded mt-4 text-xs uppercase tracking-wider">
                            <a
                                href="?lang=eng"
                                class="lg:px-1 lg:py-1 px-3 py-2 rounded {{ cache('lang') == 'eng' ? 'bg-white shadow' : '' }}"
                            >Eng</a>
                            <a
                                href="?lang=swa"
                                class="lg:px-1 lg:py-1 px-3 py-2 rounded {{ cache('lang') == 'swa' ? 'bg-white shadow' : '' }}"
                            >Swa</a>
                        </div>
                    </nav>
                </div>
            </header>

            @yield('content')
        </div>
    </body>
</html>
