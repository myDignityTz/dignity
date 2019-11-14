@extends('layout')

@section('content')
    <header class="w-2/3 mx-auto mb-12 mt-12">
        <h1 class="text-2xl font-bold text-pink-500">About Us</h1>
    </header>

    <div class="w-2/3 mx-auto mb-24 mt-12">
        <q class="text-2xl font-handwriting text-pink-900 font-bold">
            Let’s help HER graduate together with him
        </q>
    </div>

    <div class="w-2/3 mx-auto pb-24">
        {{-- <header class="mb-12">
            <h2 class="text-lg tracking-wider">
                Our Values
            </h2>
        </header> --}}

        <div>
            <div class="flex -mx-6 mb-10">
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Listen</h3>
                    <p class="mt-6">you never know enough, be ready to listen because only then you learn.</p>
                </div>
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Faith</h3>
                    <p class="mt-6">we have faith in God, knowing we are the change makers, we will end up winners even when everything seems impossible.</p>
                </div>
            </div>
            <div class="flex -mx-6 mb-10">
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Hope</h3>
                    <p class="mt-6">We hope for what we believe in.</p>
                </div>
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Ownership</h3>
                    <p class="mt-6">Every member at My Dignity is the owner, the owner strive for the success of what is theirs.</p>
                </div>
            </div>
            <div class="flex -mx-6 mb-10">
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Equality</h3>
                    <p class="mt-6">Everyone should fight until the day girls and boys are equal academically.</p>
                </div>
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Integrity</h3>
                    <p class="mt-6">complete honesty is the key to success.</p>
                </div>
            </div>

            <div class="flex -mx-6">
                <div class="w-1/2 px-6">
                    <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Innovation</h3>
                    <p class="mt-6">everything that brings positive change in our community is innovation, everyone is an innovator.</p>
                </div>
                <div class="w-1/2 px-6"></div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="w-2/3 mx-auto">
            <div class="flex -mx-6">
                <div class="w-1/2 px-10 py-10">
                    <header class="mb-4">
                        <h2 class="text-sm text-gray-600 uppercase tracking-wider">
                            Our Mission
                        </h2>
                    </header>
                    <div class="text-xl leading-loose tracking-wider">
                        To provide techniques to parents on how to provide sexual reproductive 
                        health education through a friendly platform that agrees  with the 
                        level of technology in Tanzania, so as to ensure young girls have 
                        adequate education on sexual reproductive health to reduce the number 
                        of dropouts due to pregnancy.
                    </div>
                </div>
    
                <div class="w-1/2 px-10 py-10 bg-pink-600 rounded-lg shadow-lg">
                    <header class="mb-4">
                        <h2 class="text-sm text-pink-200 uppercase tracking-wider">
                            Our Vision
                        </h2>
                    </header>
                    <div class="text-xl leading-loose tracking-wider text-white">
                        My Dignity techniques will be widespread all over Tanzania, helping 
                        parents to communicate all over Tanzania so as to reduce the number 
                        of dropouts among girls.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection