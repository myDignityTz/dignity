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
                    version          : 'v5.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="106449127478757"
             theme_color="#ff5ca1">
        </div>

        <div>
            <header class="shadow bg-white">
                <div class="flex items-center justify-between w-full px-12 mx-auto">
                    <div class="flex items-center">
                        <a href="/" class="font-bold text-xl">
                            <img src="{{ asset('img/logo/logo-black.svg') }}" class="h-10" alt="">
                        </a>
                        <span class="px-4 text-gray-400">|</span>
                        <a href="/" class="font-bold text-xl">
                            <img src="{{ asset('img/logo/genu.png') }}" class="h-10" alt="">
                        </a>
                    </div>

                    <nav class="flex items-center">
                        <a href="/"
                           class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "welcome" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >
                            {{ cache('lang') == 'eng' ? 'Home' : 'Nyumbani' }}
                        </a>

                        <a href="{{ url('about') }}"
                           class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "about" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >
                            {{ cache('lang') == 'eng' ? 'About us' : 'Kuhusu' }}
                        </a>

                        <a href="{{ url('topics') }}"
                           class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "topics" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >
                            {{ cache('lang') == 'eng' ? 'Topics' : 'Mada' }}
                        </a>

                        <a href="{{ url('team') }}"
                           class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "team" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >
                            {{ cache('lang') == 'eng' ? 'Team' : 'Timu' }}
                        </a>

                        {{-- <a href="/experience" class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "experience" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500">Testimonies</a>--}}

                        <a
                            href="{{ asset('letter') }}"
                            class="ml-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "letter" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >
                            {{ cache('lang') == 'eng' ? 'Letter from eagle' : 'Barua kutoka kwa tai' }}
                        </a>

                        <div class="flex items-center ml-6 bg-pink-200 px-1 py-1 rounded">
                            <a href="?lang=eng"
                               class="px-2 text-xs uppercase tracking-wider rounded {{ cache('lang') == 'eng' ? 'bg-white shadow' : '' }}"
                            >Eng</a>
                            <a href="?lang=swa"
                               class="px-2 text-xs uppercase tracking-wider rounded {{ cache('lang') == 'swa' ? 'bg-white shadow' : '' }}"
                            >Swa</a>
                        </div>
                    </nav>
                </div>
            </header>

            @yield('content')
        </div>
    </body>
</html>
