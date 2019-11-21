@extends('layout')

@section('content')
    {{-- Page Cover --}}
    <div class="relative">
        <img
            src="{{ asset("img/cover/image01.jpg") }}"
            alt="Cover photograph"
            class="w-full object-cover"
            style="height: calc(100vh - 73px)"
        />

        <div class="absolute top-0 bottom-0 right-0 w-1/2 bg-white mt-16 mb-16 mr-12 rounded-lg shadow-lg opacity-75">
            <div class="px-16 py-16">
                <h2 class="text-4xl font-bold tracking-wider mb-4">MyDignity</h2>
                <p class="leading-loose text-xl">
                    Is a web and SMS based platform for both smart and feature phones. My dignity is designed to
                    provide <span class="font-semibold text-pink-500">easy access</span> to information and reach
                    targeted users. Furthermore, My Dignity will <span class="font-semibold text-pink-500">create awareness</span>
                    on Sexual and Reproductive Health (SRH) via seminars, events, print and digital media.
                    It is our aim that through the website parents or guardians will be able to have open conversations
                    with their children on Sexual Reproductive Health and Rights.
                </p>
            </div>
        </div>
    </div>

    {{-- Why we need SRH Education --}}
    <section class="bg-white pt-24 pb-24">
        <div class="w-2/3 mx-auto">
            <header class="mb-4">
                <h3 class="text-3xl font-handwriting heading-indicator">Why SRH education:</h3>
            </header>

            <div class="text-lg text-gray-700 leading-loose">
                <p class="mb-4">
                    Our project is all about breaking the wall between young girls
                    and parents when it comes to having a conversation on sexual reproductive health education (SRH),
                    by giving techniques to parents which will make communication about this issue easier.
                </p>

                <p class="mb-4">
                    Parents do not always have key information about sexual and reproductive health. In addition to this
                    they also don’t have the skills to have open conversations with their children on sexual and
                    reproductive health. My Dignity is all about breaking down the walls between adolescents (especially
                    young girls) and their parents or guardians. Through this platform will be given key information
                    about sexual and reproductive health to empower them with all the information that they need.
                    It will also provide parents with techniques that will make conversations easier to have with their
                    children.
                </p>

                <p class="mb-4">
                    This information can be accessed through an SMS based platform by following
                    <span class="text-pink-500 font-semibold">USSD Code 15070</span> in an interactive manner.
                </p>
            </div>

            <div class="border-b mb-16">
                <header class="mb-12 mt-12">
                    <h3 class="text-lg uppercase tracking-wider">So in summary:</h3>
                </header>

                <div>
                    <div class="flex mb-12">
                        <div class="w-1/5 text-left mr-12 text-5xl text-pink-200 font-bold">01</div>
                        <div class="w-4/5 text-2xl leading-loose">
                            My Dignity web-system and the SMS platform gives parents detailed information on sexual and
                            reproductive health, especially topics interesting and helpful to young people, providing
                            them confidence and boldness to talk about sexual and reproductive health.
                        </div>
                    </div>

                    <div class="flex mb-12">
                        <div class="w-1/5 text-left mr-12 text-5xl text-pink-200 font-bold">02</div>
                        <div class="w-4/5 text-2xl leading-loose">
                            We also equip adolescents with Sexual and Reproductive Health Education.
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="text-xl text-pink-600 font-semibold leading-loose">
                    The topics that adolescents are more interested with and have been found helpful in their sexual
                    life, so as to abstain themselves from sex and provide them self protection, which mostly have to
                    be more professional and educational are.
                </div>

                <div class="mt-12">

                    <div class="flex -mx-6 mb-10">
                        <div class="w-1/2 px-6">
                            <div class="flex">
                                <div class="mr-4">
                                    <svg aria-hidden="true" class="h-5 w-5" focusable="false" data-prefix="fad" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <g class="fa-group">
                                            <path fill="currentColor" class="text-pink-200" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm155.31 195.31l-184 184a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62z"></path>
                                            <path fill="currentColor" class="text-pink-600" d="M227.31 387.31a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62l-184 184z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <header class="flex items-center mb-3">
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Menstruation</h3>
                                    </header>
                                    <p>
                                        Menstruation is the technical term for getting your period. About once a month,
                                        girls and women who have gone through puberty will experience menstrual bleeding.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 px-6">
                            <div class="flex">
                                <div class="mr-4">
                                    <svg aria-hidden="true" class="h-5 w-5" focusable="false" data-prefix="fad" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <g class="fa-group">
                                            <path fill="currentColor" class="text-pink-200" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm155.31 195.31l-184 184a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62z"></path>
                                            <path fill="currentColor" class="text-pink-600" d="M227.31 387.31a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62l-184 184z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <header class="flex items-center mb-3">
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Puberty</h3>
                                    </header>
                                    <p>
                                        Between the ages of 10 and 14 most girls and boys begin to notice changes in their bodies
                                        Puberty starts when extra amounts of chemicals called "hormones" begin to be reproduced in the body. These hormones lead to changes in the body.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex -mx-6 mb-10">
                        <div class="w-1/2 px-6">
                            <div class="flex">
                                <div class="mr-4">
                                    <svg aria-hidden="true" class="h-5 w-5" focusable="false" data-prefix="fad" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <g class="fa-group">
                                            <path fill="currentColor" class="text-pink-200" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm155.31 195.31l-184 184a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62z"></path>
                                            <path fill="currentColor" class="text-pink-600" d="M227.31 387.31a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62l-184 184z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <header class="flex items-center mb-3">
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Pregnancy</h3>
                                    </header>
                                    <p>
                                        What is Pregnancy? How does pregnancy occur? Wha you need to know about
                                        Early pregnancies (unwanted pregnancies) including risks and precautions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 px-6">
                            <div class="flex">
                                <div class="mr-4">
                                    <svg aria-hidden="true" class="h-5 w-5" focusable="false" data-prefix="fad" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <g class="fa-group">
                                            <path fill="currentColor" class="text-pink-200" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm155.31 195.31l-184 184a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62z"></path>
                                            <path fill="currentColor" class="text-pink-600" d="M227.31 387.31a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62l-184 184z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <header class="flex items-center mb-3">
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Abortion</h3>
                                    </header>
                                    <p>
                                        It’s the deliberate termination of a human pregnancy, most often performed
                                        during the first 28 weeks of pregnancy. What are the effects of abortions?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex -mx-6 mb-10">
                        <div class="w-1/2 px-6">
                            <div class="flex">
                                <div class="mr-4">
                                    <svg aria-hidden="true" class="h-5 w-5" focusable="false" data-prefix="fad" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <g class="fa-group">
                                            <path fill="currentColor" class="text-pink-200" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm155.31 195.31l-184 184a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62z"></path>
                                            <path fill="currentColor" class="text-pink-600" d="M227.31 387.31a16 16 0 0 1-22.62 0l-104-104a16 16 0 0 1 0-22.62l22.62-22.63a16 16 0 0 1 22.63 0L216 308.12l150.06-150.06a16 16 0 0 1 22.63 0l22.62 22.63a16 16 0 0 1 0 22.62l-184 184z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <header class="flex items-center mb-3">
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">STD’s and STI’s</h3>
                                    </header>
                                    <p>
                                        They are sexually transmitted diseases. This means they are most often, but not
                                        exclusively spread by sexual intercourse. Some of the examples are HIV, chlamydia,
                                        genital herpes, gonorrhea, some forms of hepatitis, syphilis, and trichomoniasis.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 px-6"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--  Supporters  --}}
    <section class="bg-white border-t py-16">
        <div class="w-2/3 mx-auto">
            <div>
                <header class="mb-4">
                    <h3 class="text-lg uppercase">With support from</h3>
                </header>
                <div class="flex w-full rounded py-6 -mx-4">
                    <div class="w-1/2 px-4">
                        <div class="flex items-center rounded shadow">
                            <div class="mr-6 px-4 py-4 rounded bg-pink-100">
                                <img src="{{ asset("img/logo/genu.png") }}" class="h-16" alt="Genu Logo">
                            </div>
                            <header>
                                <h4 class="text-pink-900 font-semibold text-lg mb-2">Generation Unlimited</h4>
                                <a class="flex items-center text-xs text-pink-500 uppercase tracking-wider" href="https://www.generationunlimited.org" target="_blank">
                                    <span class="mr-2">Visit website</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                    </svg>
                                </a>
                            </header>
                        </div>
                    </div>
                    <div class="w-1/2 px-4">
                        <div class="flex items-center rounded shadow">
                            <div class="mr-6 px-4 py-4 rounded bg-pink-100">
                                <img src="{{ asset("img/logo/apps_and_girls.png") }}" class="h-16" alt="Genu Logo">
                            </div>
                            <header>
                                <h4 class="text-pink-900 font-semibold text-lg mb-2">Apps And Girls</h4>
                                <a class="flex items-center text-xs text-pink-500 uppercase tracking-wider" href="https://www.appsandgirls.com" target="_blank">
                                    <span class="mr-2">Visit website</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                        <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                    </svg>
                                </a>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Members --}}
    <section class="w-2/3 mx-auto mt-12 mb-12">
        <div class="my-16">
            <header class="mb-12 mt-12">
                <h4 class="font-sans text-2xl">Created by three young girls:</h4>
            </header>

            <ul class="flex block w-full mb-8">
                <li class="w-1/3">
                    <div class="flex items-center">
                        <img src="{{ asset("img/team/elizabeth.jpg") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                        <div class="ml-4">
                            <h4 class="text-sm font-sans font-semibold">Elizabeth .A. Mwakatimbo</h4>
                            <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Co-Founder</p>
                            <a href="#" class="text-xs mt-2 block text-gray-600">elizabethmwakatimbo@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="w-1/3">
                    <div class="flex items-center">
                        <img src="{{ asset("img/team/magdalena.png") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                        <div class="ml-4">
                            <h4 class="text-sm font-sans font-semibold">Magdalena .R. Mhelezi</h4>
                            <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Co-Founder</p>
                            <a href="#" class="text-xs mt-2 block text-gray-600">cherrymhelezi@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="w-1/3">
                    <div class="flex items-center">
                        <img src="{{ asset("img/team/jackline.png") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                        <div class="ml-4">
                            <h4 class="text-sm font-sans font-semibold">Jackline  .F. Mashauri</h4>
                            <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Co-Founder</p>
                            <a href="#" class="text-xs mt-2 block text-gray-600">jackmashauri211@gmail.com</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
