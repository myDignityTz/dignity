@extends('layout')

@section('content')
    <header class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:mb-12 mb-6 mt-12">
        <h1 class="text-2xl font-bold text-pink-500">Kuhusu</h1>
    </header>

    <section class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:mb-24 mb-12 lg:mt-12 mt-6">
        <q class="text-2xl font-handwriting text-pink-900 font-bold">Tumsaidie Binti kuhitimu pamoja na kijana</q>
    </section>

    <section class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:mb-24 mb-12 lg:mt-12 mt-6">
        <iframe class="w-full rounded shadow" height="420" src="https://www.youtube.com/embed/UjT42UrQ6mA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <section class="lg:w-2/3 w-full px-6 lg:px-0 mx-auto lg:pb-24 pb-12">
        <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Sikiliza</h3>
                <p class="mt-6">Huwezi kujua yote, kuwa tayari kusikiliza kwa sababu ndipo unapojifunza.</p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Imani</h3>
                <p class="mt-6">
                    Tunayo imani na Mungu, tukijua sisi ni watengenezaji wa mabadiliko, tutamaliza
                    washindi hata wakati kila kitu kitaonekana kuwa kisichowezekana.
                </p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Matumaini</h3>
                <p class="mt-6">Tunatumahi kwa kile tunachoamini.</p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Umiliki</h3>
                <p class="mt-6">Kila mjumbe katika Hadhi yangu ni mmiliki, mmiliki ajitahidi kufanikiwa kwa yale ambayo ni yao. </p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6 lg:mb-10">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Usawa</h3>
                <p class="mt-6">Kila mtu anapaswa kupigana hadi siku wasichana na wavulana ni sawa kitaaluma.</p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Uadilifu</h3>
                <p class="mt-6">Uaminifu kamili ndio ufunguo wa mafanikio. </p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-mx-6">
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0">
                <h3 class="mb-3 text-pink-800 font-semibold tracking-wider text-xl heading-indicator">Ubunifu</h3>
                <p class="mt-6">Kila kitu kinacholeta mabadiliko mazuri katika jamii yetu ni uvumbuzi, kila mtu ni mzushi. </p>
            </div>
            <div class="lg:w-1/2 lg:px-6 mb-8 lg:mb-0"></div>
        </div>
    </section>

    <section class="bg-white lg:py-16 py-8">
        <div class="lg:w-2/3 w-full mx-auto">
            <div class="flex lg:flex-row flex-col lg:-mx-6">
                <div class="lg:w-1/2 w-full px-10 py-10">
                    <header class="mb-4">
                        <h2 class="text-sm text-gray-600 uppercase tracking-wider">DIRA YETU</h2>
                    </header>
                    <div class="text-xl leading-relaxed tracking-wider">
                        Ili kutoa mbinu kwa wazazi juu ya jinsi ya kutoa elimu ya afya ya uzazi kupitia jukwaa la
                        kirafiki ambalo linakubaliana na kiwango cha teknolojia nchini Tanzania, ili kuhakikisha kuwa
                        wasichana wadogo wanapata elimu ya kutosha juu ya afya ya uzazi ili kupunguza idadi ya watoto
                        walioshuka kwa sababu ya ujauzito.
                    </div>
                </div>
                <div class="lg:w-1/2 w-full px-10 py-10 bg-pink-600 rounded-lg shadow-lg">
                    <header class="mb-4">
                        <h2 class="text-sm text-pink-200 uppercase tracking-wider">MAONO YETU</h2>
                    </header>
                    <div class="text-xl leading-relaxed tracking-wider text-white">
                        Mbinu zangu za Heshima zitaenea kote nchini Tanzania, kusaidia wazazi kuwasiliana Tanzania
                        nzima ili kupunguza idadi ya watoto walioshuka shule.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
