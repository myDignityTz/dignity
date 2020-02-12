@extends('layout')

@section('content')
    <header class="lg:w-2/3 mx-auto lg:mb-12 mb-6 lg:mt-12 mt-6 px-6 lg:px-0">
        <h1 class="text-2xl font-bold text-pink-500 mb-4">Timu</h1>
    </header>

    <div class="lg:w-2/3 mx-auto lg:mb-24 mb-12 lg:mt-12 mt-6 px-6 lg:px-0">
        <q class="text-2xl font-handwriting text-pink-900 font-bold">Individual can do and make difference, but it take a team to really...</q>
    </div>

    <section class="lg:w-2/3 mx-auto">
        <div class="flex lg:flex-row flex-col lg:-mx-6 border-b pb-6">
            <div class="lg:w-1/3 w-full px-6 mb-6">
                <div><img class="w-full object-cover h-48 rounded-lg shadow-lg" src="{{ asset("img/team/elizabeth.jpg")}}" alt=""></div>
                <ul class="mt-8">
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M17 15.245v6.872a.5.5 0 0 1-.757.429L12 20l-4.243 2.546a.5.5 0 0 1-.757-.43v-6.87a8 8 0 1 1 10 0zM12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm0-2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                            </svg>
                            <span>Member of Apps and Girls</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M9.745 21.745C5.308 20.722 2 16.747 2 12 2 6.477 6.477 2 12 2s10 4.477 10 10c0 4.747-3.308 8.722-7.745 9.745L12 24l-2.255-2.255zm-2.733-3.488a7.953 7.953 0 0 0 3.182 1.539l.56.129L12 21.172l1.247-1.247.56-.13a7.956 7.956 0 0 0 3.36-1.686A6.979 6.979 0 0 0 12.16 16c-2.036 0-3.87.87-5.148 2.257zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <span>Founder of MyDignity</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/>
                            </svg>
                            <span>elizabethmwakatimbo@gmail.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lg:w-2/3 w-full px-6 mb-6">
                <h3 class="text-pink-500 mb-4 font-semibold text-lg">Elizabeth Mwakatimbo</h3>
                <div>
                    <p class="mb-4">
                        I am a first-year Bachelor of Science in Business Information Technology
                        student at the University of Dar es Salaam.
                    </p>

                    <p class="mb-4">
                        I believe in innovation and that everyone is an innovator. We just need to think a little
                        bit deeper, because for me innovation is anything that brings positive change to the
                        community, My Dignity is innovation.
                    </p>

                    <p class="mb-4">I hope you learn a lot through our platform.</p>

                    <p class="mb-4">Let’s help her graduate together with him.</p>
                </div>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 border-b pb-6 pt-10">
            <div class="lg:w-2/3 w-full px-6 mb-6 lg:order-first order-last">
                <h3 class="text-pink-500 mb-4 font-semibold text-lg">Magdalena Mhelezi</h3>
                <div>
                    <p class="mb-4">
                        I am a first-year student at the University of Dar es salaam taking a Bachelor of Science
                        in Metrology. My passion is to talk to young girls about self-determination.
                        It’s been great to do this project for the girls in Tanzania, it helps me feel useful,
                        every single day I wake up and remember I have a duty, I hope this duty will soon be
                        overtaken by our parents and helps us walk this road.
                    </p>
                    <p class="mb-4">We help the girls, we help the future mothers; we create the future of Tanzania.</p>
                </div>
            </div>
            <div class="lg:w-1/3 w-full px-6 mb-6 lg:order-last order-first">
                <div><img class="w-full object-cover h-48 rounded-lg shadow-lg" src="{{ asset("img/team/magdalena.png")}}" alt=""></div>
                <ul class="mt-8">
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M17 15.245v6.872a.5.5 0 0 1-.757.429L12 20l-4.243 2.546a.5.5 0 0 1-.757-.43v-6.87a8 8 0 1 1 10 0zM12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm0-2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                            </svg>
                            <span>Member of Apps and Girls</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M9.745 21.745C5.308 20.722 2 16.747 2 12 2 6.477 6.477 2 12 2s10 4.477 10 10c0 4.747-3.308 8.722-7.745 9.745L12 24l-2.255-2.255zm-2.733-3.488a7.953 7.953 0 0 0 3.182 1.539l.56.129L12 21.172l1.247-1.247.56-.13a7.956 7.956 0 0 0 3.36-1.686A6.979 6.979 0 0 0 12.16 16c-2.036 0-3.87.87-5.148 2.257zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <span>Founder of MyDignity</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/>
                            </svg>
                            <span>cherrymhelezi@gmail.com</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 border-b pb-6 pt-10">
            <div class="lg:w-1/3 w-full px-6 mb-6">
                <div><img class="w-full object-cover h-48 rounded-lg shadow-lg" src="{{ asset("img/team/jackline.png")}}" alt=""></div>
                <ul class="mt-8">
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M17 15.245v6.872a.5.5 0 0 1-.757.429L12 20l-4.243 2.546a.5.5 0 0 1-.757-.43v-6.87a8 8 0 1 1 10 0zM12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm0-2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                            </svg>
                            <span>Member of Apps and Girls</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M9.745 21.745C5.308 20.722 2 16.747 2 12 2 6.477 6.477 2 12 2s10 4.477 10 10c0 4.747-3.308 8.722-7.745 9.745L12 24l-2.255-2.255zm-2.733-3.488a7.953 7.953 0 0 0 3.182 1.539l.56.129L12 21.172l1.247-1.247.56-.13a7.956 7.956 0 0 0 3.36-1.686A6.979 6.979 0 0 0 12.16 16c-2.036 0-3.87.87-5.148 2.257zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                            <span>Founder of MyDignity</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center block text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-5 w-5 mr-2 text-pink-300">
                                <path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/>
                            </svg>
                            <span>jackmashauri211@gmail.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lg:w-2/3 w-full px-6 mb-6">
                <h3 class="text-pink-500 mb-4 font-semibold text-lg">Jackline Mashauri</h3>
                <div>
                    <p class="mb-4">
                        I am 19 years old and taking Bachelor of Science in Civil Engineering degree.
                        Some people think that I am too young with what I’ve achieved, considering the country
                        I am living in. They are even more astonished when I tell them I am working on a project
                        and I am one of the founders, I hope you enjoy your stay here.
                    </p>
                    <p class="mb-4">Truth be told, we are simply amazing!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
