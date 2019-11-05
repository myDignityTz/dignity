<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-sans bg-pink-100 text-gray-800">
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
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101082948008609">
      </div>

        <div>
            <header class="shadow bg-white">
                <div class="flex items-center justify-between w-2/3 mx-auto">
                    <a href="/" class="font-bold text-xl">
                        My<span class="text-pink-500">Dignity</span>
                    </a>
    
                    <nav>
                        <a 
                            href="/"             
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "welcome" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Home</a>

                        <a 
                            href="/about"        
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "about" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >About us</a>
                        {{-- <a 
                            href="/techniques"   
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "techniques" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Techniques</a> --}}

                        <a 
                            href="/topics"   
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "topics" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Topics</a>

                        {{-- <a 
                            href="/girls"        
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "girls" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Girls</a> --}}

                        <a 
                            href="/team"        
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "team" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Team</a>
                        
                        <a 
                            href="/experience"   
                            class="mx-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "experience" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Experience</a>
                        <a 
                            href="/letter"       
                            class="ml-4 inline-block py-6 text-sm capitalize tracking-wider border-b-4 {{ Route::currentRouteName() == "letter" ? "border-pink-500" : "border-transparent" }} hover:border-pink-500"
                        >Letter from eagle</a>
                    </nav>
                </div>
            </header>

            @yield('content')
        </div>
    </body>
</html>
