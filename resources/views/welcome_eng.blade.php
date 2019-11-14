@extends('layout')

@section('content')
    {{-- Page Cover --}}
    <div class="relative">
        <img
            src="{{ asset("img/cover/iiona-virgin-Pb8_guWhws4-unsplash.jpg") }}"
            alt="Cover photograph"
            class="w-full object-cover"
            style="height: calc(100vh - 73px)"
        />

        <div class="absolute top-0 bottom-0 right-0 w-1/2 bg-white mt-16 mb-16 mr-12 rounded-lg shadow-lg opacity-75">
            <div class="px-16 py-16">
                <h2 class="text-4xl font-bold tracking-wider mb-4">MyDignity</h2>
                <p class="leading-loose text-xl">
                    The platform has an SMS based system for both smartphones and
                    feature phones to enable easy <span class="font-semibold text-pink-500">accessibility</span>
                    and <span class="font-semibold text-pink-500">reach  to the targeted users</span>.
                    Furthermore, we will <span class="font-semibold text-pink-500">create awareness</span>
                    via seminars, events, print and digital media on the importance
                    of SRH for young girls Parents and Guardians and stakeholders thus
                </p>
            </div>
        </div>
    </div>

    {{-- Why we need SRH Education --}}
    <section class="bg-white pt-24 pb-24">
        <div class="w-2/3 mx-auto">
            <header class="mb-4">
                <h3 class="text-3xl font-handwriting heading-indicator">Why we need SRH education:</h3>
            </header>

            <div class="text-lg text-gray-700 leading-loose">
                <p class="mb-4">
                    My Dignity is all about breaking the wall between adolescents especially young girls
                    and parents when it comes to having a conversation on sexual reproductive health
                    education (SRH), by giving techniques to parents which will make their communication
                    easier. Most parents do not have detailed information about SRH in a more technical way,
                    it is important for the parent to have detailed information before talking to their
                    children as it helps them to attain the confidence and boldness that they need to talk
                    to their young adolescents. Therefore, In this website, we give sexual reproductive
                    health education to parents to increase their knowledge in Sexual Reproductive Health.
                </p>

                <p class="mb-4">
                    We also provide these techniques on SRH through an SMS based platform through the
                    following <span class="text-pink-500 font-semibold">USSD Code #######</span>
                    in an interactive manner.
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
                            My Dignity web-system and the SMS platform give parents detailed information on
                            sexual reproductive health, especially topics that we’ve found more interesting
                            and helpful to young adolescents, providing them more confidence and boldness to
                            talk about such topics.
                        </div>
                    </div>

                    <div class="flex mb-12">
                        <div class="w-1/5 text-left mr-12 text-5xl text-pink-200 font-bold">02</div>
                        <div class="w-4/5 text-2xl leading-loose">
                            We also equip adolescents with Sexual Reproductive Health Education.
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="text-xl text-pink-600 font-semibold leading-loose">
                    The  topics that adolescents are more interested with and have been found
                    helpful in their sexual life, so as to abstain themselves from sex and
                    provide them self protection, which mostly have to be more professional and
                    educational are
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
                                        females who have gone through puberty will experience menstrual bleeding.
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
                                        Puberty is the process of physical changes through which a child's body
                                        matures into an adult body capable of sexual reproduction. Our content
                                        for Puberty is in Swahili.
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
                                        They are sexually transmitted diseases. This means they are most often -- but not
                                        exclusively -- spread by sexual intercourse. Some of the examples are HIV, chlamydia,
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

    {{-- Team Members --}}
    <section class="w-2/3 mx-auto mt-12 mb-12">
        <div class="my-16">
                <header class="mb-12 mt-12">
                    <h4 class="font-sans text-2xl">Established by three young girls</h4>
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
                            <img src="{{ asset("img/team/avatar.png") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                            <div class="ml-4">
                                <h4 class="text-sm font-sans font-semibold">Magdalena .R. Mhelezi</h4>
                                <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Co-Founder</p>
                                <a href="#" class="text-xs mt-2 block text-gray-600">cherrymhelezi@gmail.com</a>
                            </div>
                        </div>
                    </li>
                    <li class="w-1/3">
                        <div class="flex items-center">
                            <img src="{{ asset("img/team/avatar.png") }}" class="h-16 w-16 object-cover rounded-full" alt="">
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
