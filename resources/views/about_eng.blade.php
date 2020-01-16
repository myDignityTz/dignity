@extends('layout')

@section('content')
    <header class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:mb-12 mb-6 mt-12">
        <h1 class="text-2xl font-bold text-pink-500">About Us</h1>
    </header>

    <div class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:mb-24 mb-12 lg:mt-12 mt-6">
        <q class="text-2xl font-handwriting text-pink-900 font-bold">
            Let’s help HER graduate together with him
        </q>
    </div>

    <section class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:mb-24 mb-12 lg:mt-12 mt-6">
        <iframe class="w-full rounded shadow" height="420" src="https://www.youtube.com/embed/UjT42UrQ6mA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <div class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:pb-24 pb-12">
         <header class="mb-12">
            <h2 class="text-pink-500 uppercase tracking-wider border-b border-pink-200 pb-8 ">
                Our Values
            </h2>
        </header>

        <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Listen</h3>
                <p class="mt-6">
                    Be ready to listen, because when you listen you learn.
                </p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Faith</h3>
                <p class="mt-6">
                    We have faith in God, we are the change makers, we will be winners even when everything seems
                    impossible.
                </p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Hope</h3>
                <p class="mt-6">
                    Hope We have hope for what we believe in.
                </p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Ownership</h3>
                <p class="mt-6">
                    Every member at My Dignity is the owner, we strive for success.
                </p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Equality</h3>
                <p class="mt-6">
                    Everyone should fight until the day girls and boys are equal academically.
                </p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Integrity</h3>
                <p class="mt-6">
                    Complete honesty is the key to success.
                </p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 ">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Innovation</h3>
                <p class="mt-6">
                    Everything that brings positive change in our community is innovation, everyone is an innovator.
                </p>
            </div>
            <div class="w-1/2 px-6"></div>
        </div>
    </div>

    <div class="bg-white lg:py-16 py-8">
        <div class="lg:w-2/3 w-full mx-auto">
            <div class="flex lg:flex-row flex-col lg:-mx-6">
                <div class="lg:w-1/2 w-full px-10 py-10">
                    <header class="mb-4">
                        <h2 class="text-sm text-gray-600 uppercase tracking-wider">
                            Our Mission
                        </h2>
                    </header>
                    <div class="lg:text-xl text-lg leading-relaxed lg:leading-loose tracking-wider">
                        To provide parents with knowledge and techniques on how to talk about sexual and reproductive
                        health with their children through a platform accessible across Tanzania. We envision a Tanzania
                        where young girls have adequate education on sexual and reproductive health, early pregnancies
                        are reduced and girls are not forced to drop out of school.
                    </div>
                </div>

                <div class="lg:w-1/2 w-full px-10 py-10 bg-pink-600 rounded-lg shadow-lg">
                    <header class="mb-4">
                        <h2 class="text-sm text-pink-200 uppercase tracking-wider">
                            Our Vision
                        </h2>
                    </header>
                    <div class="lg:text-xl text-lg leading-relaxed lg:leading-loose tracking-wider text-white">
                        My Dignity techniques will be spread across Tanzania. Helping parents to communicate with
                        their children and reducing the number of girls dropping out of school due to early pregnancies.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
