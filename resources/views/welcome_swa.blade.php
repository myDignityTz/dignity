@extends('layout')

@section('content')
    {{-- Page Cover --}}
    <div class="lg:relative">
        <img
            src="{{ asset("img/cover/image01.jpg") }}"
            alt="Cover photograph"
            class="w-full object-cover cover"
        />

        <div class="lg:absolute top-0 bottom-0 right-0 lg:w-1/2 bg-white lg:mt-16 lg:mb-16 lg:mr-12 lg:rounded-lg shadow-lg opacity-75">
            <div class="lg:px-16 px-6 lg:py-16 py-8">
                <h2 class="lg:text-4xl text-3xl font-bold tracking-wider mb-4">Utu Wangu</h2>
                <p class="lg:leading-loose leading-relaxed text-xl">
                    Ni jukwaa linaloleta mabinti na walezi pamoja kupitia njia ya SMS na wavuti, kupata elimu kuhusu
                    afya ya uzazi ya awali ya mabinti pamoja na walezi kupata mbinu za jinsi ya kuongelea afya ya
                    uzazi ya awali.
                    Jukwaa hili litaandaa semina, matamasha, machapisho na vyombo vya kidigitali kuhimiza juu ya umuhimu
                    wa afya ya uzazi ya awali kwa mabinti.
                </p>
            </div>
        </div>
    </div>

    {{-- Why we need SRH Education --}}
    <section class="bg-white lg:pt-24 lg:pb-24 pt-12 pb-12">
        <div class="lg:w-2/3 w-full mx-auto px-6 lg:px-0">
            <header class="mb-4">
                <h3 class="text-3xl font-handwriting heading-indicator">Kwa nini afya ya Uzazi?</h3>
            </header>

            <div class="text-lg text-gray-700 leading-loose">
                <p class="mb-4">
                    Kazi yetu imejikita haswa kwenye kurahisisha mawasiliano baina ya mabinti na wazazi linapokuja
                    suala la mazungumzo juu ya elimu ya afya ya uzazi, kwa kuwapa mbinu ambazo zitasaidia kuongelea
                    suala hili kwa urahisi.
                </p>

                <p class="mb-4">
                    Si kweli kwamba siku zote wazazi huwa na habari za kina juu ya afya ya uzazi, na hivyo ni muhimu
                    kwa mzazi kuwa na habari za kina kabla ya kuongea na watoto wao kwani inawaongezea ujasiri na
                    ushujaa ambao wanauhitaji kuongea na vijana wao, kwa hivyo kwenye wavuti yetu tutatoa elimu ya afya
                    ya uzazi kwa wazazi ili kuongeza ujuzi wao katika afya ya uzazi.
                </p>

                <div class="mb-4">
                    Kwa kuendelea tungependa kufanya kazi na vijana, ili kuwafanya wahusika zaidi katika suluhisho,
                    kutoa elimu ya moja kwa moja ya afya ya uzazi lakini kwa njia rahisi zaidi. Hii itawezesha kupima
                    ufanisi wa mbinu ambazo tumewapa wazazi.
                </div>

                <p class="mb-4">
                    Pia tunatoa elimu na mbinu za elimu ya afya ya uzazi kupitia njia ya SMS kwa kutuma neno
                    <span class="text-pink-500 font-semibold">"utu"</span>
                    kwenda nambari <span class="text-pink-500 font-semibold">15070</span>
                </p>
            </div>

            <div class="border-b mb-16">
                <header class="mb-12 mt-12">
                    <h3 class="text-lg uppercase tracking-wider">Hivyo kwa kifupi:</h3>
                </header>

                <div>
                    <div class="flex mb-12">
                        <div class="w-1/5 text-left mr-12 lg:text-5xl text-3xl text-pink-200 font-bold">01</div>
                        <div class="w-4/5 lg:text-2xl lg:leading-loose">
                            Itawapa wazazi habari za kina juu ya afya ya uzazi, haswa mada ambazo tumepata za
                            kufurahisha zaidi na kusaidia vijana vijana, kuwapa ujasiri zaidi na ujasiri wa kuzungumza.
                        </div>
                    </div>

                    <div class="flex mb-12">
                        <div class="w-1/5 text-left mr-12 lg:text-5xl text-3xl text-pink-200 font-bold">02</div>
                        <div class="w-4/5 lg:text-2xl lg:leading-loose">
                            Utatuwezesha kuunda mfumo wa ujumbe kwa wasichana wanaopeana SRH moja kwa moja kwa kutumia
                            mbinu zilizoundwa, kuona jinsi mbinu hizo zinavyofaa na uwafanya washiriki zaidi.
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="text-xl text-pink-600 font-semibold lg:leading-loose leading-relaxed">
                    Mada ambazo vijana wanavutiwa nazo zaidi zimeonakana kuwa msaada katika maisha yao ya kimapenzi,
                    ili kujiepusha na ngono na kuwapa kinga, ambayo lazima zaidi ya kuwa taaluma na elimu ni
                </div>

                <div class="mt-12">
                    {{-- MAGONJWA YA ZINAA & Balehe --}}
                    <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
                        <div class="lg:w-1/2 w-full lg:px-6 mb-6">
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
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Magonjwa ya Zinaa</h3>
                                    </header>
                                    <p>

                                        Ni magonjwa ya zinaa. Hii inamaanisha mara nyingi - huenea kwa kujamiiana.
                                        Baadhi ya mifano ni VVU, chlamydia, herpes ya tezi ya tezi, gonorrhea, aina
                                        kadhaa za hepatitis, syphilis, na trichomoniasis.
                                        Yaepuke kwa kutofanya zinaa
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-full lg:px-6 mb-6">
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
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Balehe</h3>
                                    </header>
                                    <p>
                                        Kati ya umri wa miaka 10 hadi 14 wasichana na wavulana wengi huanza kuona
                                        mabadiliko kwenye miili yao. Balehe huanza wakati ambapo kemikali (vichocheo)
                                        ziitwazo homoni huanza kuzaliana ndani ya mwili na kusababisha mabadiliko
                                        mwilini.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- HEDHI --}}
                    <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
                        <div class="lg:w-1/2 w-full lg:px-6 mb-6">
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
                                        <h3 class="text-sm uppercase tracking-wider text-pink-700">Hedhi</h3>
                                    </header>
                                    <p>
                                        Hedhi ni neno la kiufundi la kupata siku zako. Angalau mara moja kwa mwezi,
                                        wanawake ambao wamekwisha balehe hupata hedhi
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-full lg:px-6 mb-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  Supporters  --}}
    <section class="bg-white border-t lg:py-16 pt-8 lg:pt-16">
        <div class="lg:w-2/3 w-full mx-auto">
            <header class="mb-4 px-6">
                <h3 class="text-lg uppercase">Imeungwa mkono na:</h3>
            </header>
            <div class="flex lg:flex-row flex-col w-full rounded py-6">
                <div class="lg:w-1/2 lg:px-4 w-full px-6 mb-6 lg:mb-0">
                    <div class="flex items-center rounded shadow">
                        <div class="mr-6 px-4 py-4 rounded bg-pink-100">
                            <img src="{{ asset("img/logo/genu.png") }}" class="h-16" alt="Genu Logo">
                        </div>
                        <header>
                            <h4 class="text-pink-900 font-semibold text-lg mb-2">Generation Unlimited</h4>
                            <a class="flex items-center text-xs text-pink-500 uppercase tracking-wider" href="https://www.generationunlimited.org" target="_blank">
                                <span class="mr-2">Tembelea tovuti</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                </svg>
                            </a>
                        </header>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:px-4 w-full px-6 mb-6 lg:mb-0">
                    <div class="flex items-center rounded shadow">
                        <div class="mr-6 px-4 py-4 rounded bg-pink-100">
                            <img src="{{ asset("img/logo/apps_and_girls.png") }}" class="h-16" alt="Genu Logo">
                        </div>
                        <header>
                            <h4 class="text-pink-900 font-semibold text-lg mb-2">Apps And Girls</h4>
                            <a class="flex items-center text-xs text-pink-500 uppercase tracking-wider" href="https://www.appsandgirls.com" target="_blank">
                                <span class="mr-2">Tembelea tovuti</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                </svg>
                            </a>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Members --}}
    <section class="lg:w-2/3 mx-auto lg:mt-12 mb-12 px-6 lg:px-0">
        <div class="lg:my-16">
            <header class="mb-12 mt-12">
                <h4 class="font-sans text-xl lg:text-2xl">Imeundwa na wasichana watatu wadogo:</h4>
            </header>

            <ul class="flex lg:flex-row flex-col block w-full mb-8">
                <li class="lg:w-1/3 w-full mb-8">
                    <div class="flex items-center">
                        <img src="{{ asset("img/team/elizabeth.jpg") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                        <div class="ml-4">
                            <h4 class="text-sm font-sans font-semibold">Elizabeth .A. Mwakatimbo</h4>
                            <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Mwasisi</p>
                            <a href="#" class="text-xs mt-2 block text-gray-600">elizabethmwakatimbo@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="lg:w-1/3 w-full mb-8">
                    <div class="flex items-center">
                        <img src="{{ asset("img/team/magdalena.png") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                        <div class="ml-4">
                            <h4 class="text-sm font-sans font-semibold">Magdalena .R. Mhelezi</h4>
                            <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Mwasisi</p>
                            <a href="#" class="text-xs mt-2 block text-gray-600">cherrymhelezi@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="lg:w-1/3 w-full mb-8">
                    <div class="flex items-center">
                        <img src="{{ asset("img/team/jackline.png") }}" class="h-16 w-16 object-cover rounded-full" alt="">
                        <div class="ml-4">
                            <h4 class="text-sm font-sans font-semibold">Jackline  .F. Mashauri</h4>
                            <p class="font-sans text-xs uppercase tracking-wider text-pink-400">Mwasisi</p>
                            <a href="#" class="text-xs mt-2 block text-gray-600">jackmashauri211@gmail.com</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
