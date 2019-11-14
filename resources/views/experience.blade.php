@extends('layout')

@section('content')
    <header class="w-2/3 mx-auto mb-12 mt-12">
        <h1 class="text-2xl font-bold text-pink-500">Testimonies</h1>
    </header>


    <section class="w-2/3 mx-auto mb-12">
        <div class="bg-pink-200 border-t-4 border-pink-500 rounded-b-lg text-pink-900 px-4 py-4 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-pink-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold mb-2">User experience sharing.</p>
                    <p class="text-sm">
                        If you have learn, experience, or gain something from what MyDignity offer 
                        to community will appriciate if you share your experience via this emaile 
                        address <span class="font-semibold underline">experience@mydignity.co.tz</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="w-2/3 mx-auto mb-12">
        <div class="flex border-b">
            <div class="w-1/2 pr-6">
                <div class="mb-5 leading-loose text-lg italic text-gray-600">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, 
                        soluta? Enim fuga natus, dolores, quaerat amet incidunt in dignissimos 
                        ex quisquam qui facere totam officia neque earum aliquam recusandae. 
                        Quia.
                    </p>
                </div>
                <footer class="flex items-center pb-6">
                    <div class="mr-4">
                        <img src="{{ asset("img/experience/user01.jpg") }}" class="block w-12 h-12 object-cover rounded-full" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Eleanor Porter</h3>
                        <span class="text-xs uppercase tracking-wider text-pink-500">Parent</span>
                    </div>
                </footer>
            </div>
            <div class="w-1/2 pl-6 border-l">
                <p class="mb-5 leading-loose text-lg italic text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, 
                    soluta? Enim fuga natus, dolores, quaerat amet incidunt in dignissimos 
                    ex quisquam qui facere totam officia neque earum aliquam recusandae. 
                    Quia.
                </p>
                <footer class="flex items-center pb-6">
                    <div class="mr-4">
                        <img src="{{ asset("img/experience/user02.jpg") }}" class="w-12 h-12 object-cover rounded-full" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Crystal Hart</h3>
                        <span class="text-xs uppercase tracking-wider text-pink-500">Student</span>
                    </div>
                </footer>
            </div>
        </div>
        <div class="flex border-b">
            <div class="w-1/2 pt-8 pr-6">
                <div class="mb-5 leading-loose text-lg italic text-gray-600">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, 
                        soluta? Enim fuga natus, dolores, quaerat amet incidunt in dignissimos 
                        ex quisquam qui facere totam officia neque earum aliquam recusandae. 
                        Quia.
                    </p>
                </div>
                <footer class="flex items-center pb-6">
                    <div class="mr-4">
                        <img src="{{ asset("img/experience/user03.jpg") }}" class="block w-12 h-12 object-cover rounded-full" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Tony Smith</h3>
                        <span class="text-xs uppercase tracking-wider text-pink-500">Student</span>
                    </div>
                </footer>
            </div>
            <div class="w-1/2 pt-8 pl-6 border-l">
                <p class="mb-5 leading-loose text-lg italic text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, 
                    soluta? Enim fuga natus, dolores, quaerat amet incidunt in dignissimos 
                    ex quisquam qui facere totam officia neque earum aliquam recusandae. 
                    Quia.
                </p>
                <footer class="flex items-center pb-6">
                    <div class="mr-4">
                        <img src="{{ asset("img/experience/user04.jpg") }}" class="w-12 h-12 object-cover rounded-full" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Josephine Richards</h3>
                        <span class="text-xs uppercase tracking-wider text-pink-500">Parent</span>
                    </div>
                </footer>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/2 pt-8 pr-6">
                <div class="mb-5 leading-loose text-lg italic text-gray-600">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, 
                        soluta? Enim fuga natus, dolores, quaerat amet incidunt in dignissimos 
                        ex quisquam qui facere totam officia neque earum aliquam recusandae. 
                        Quia.
                    </p>
                </div>
                <footer class="flex items-center">
                    <div class="mr-4">
                        <img src="{{ asset("img/experience/user05.jpg") }}" class="block w-12 h-12 object-cover rounded-full" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Danny Pierce</h3>
                        <span class="text-xs uppercase tracking-wider text-pink-500">Parent</span>
                    </div>
                </footer>
            </div>
            <div class="w-1/2 pt-8 pl-6 border-l">
                <p class="mb-5 leading-loose text-lg italic text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, 
                    soluta? Enim fuga natus, dolores, quaerat amet incidunt in dignissimos 
                    ex quisquam qui facere totam officia neque earum aliquam recusandae. 
                    Quia.
                </p>
                <footer class="flex items-center">
                    <div class="mr-4">
                        <img src="{{ asset("img/experience/user06.jpg") }}" class="w-12 h-12 object-cover rounded-full" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700">Samantha Long</h3>
                        <span class="text-xs uppercase tracking-wider text-pink-500">Parent</span>
                    </div>
                </footer>
            </div>
        </div>
    </section>
@endsection