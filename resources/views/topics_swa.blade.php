@extends('layout')

@section('content')
    <header class="w-2/3 mx-auto mb-12 mt-12">
        <h1 class="text-2xl font-bold text-pink-500">Mada</h1>
    </header>

    <section class="w-2/3 mx-auto">
        <div class="flex -mx-6">
            <aside class="w-1/3 px-6">
                <div class="flex border-b border-pink-200 py-6">
                    <span class="block text-4xl leading-none font-thin text-pink-200 font-semibold">111</span>
                    <span class="mx-4">&minus;</span>
                    <span class="block">Balehe</span>
                </div>

                <div class="flex border-b border-pink-200 py-6">
                    <span class="block text-4xl leading-none font-thin text-pink-200 font-semibold">112</span>
                    <span class="mx-4">&minus;</span>
                    <span class="block">Mzunguko wa mwezi</span>
                </div>

                <div class="flex border-b border-pink-200 py-6">
                    <span class="block text-4xl leading-none font-thin text-pink-200 font-semibold">113</span>
                    <span class="mx-4">&minus;</span>
                    <span class="block">Mimba</span>
                </div>

                <div class="flex border-b border-pink-200 py-6">
                    <span class="block text-4xl leading-none font-thin text-pink-200 font-semibold">114</span>
                    <span class="mx-4">&minus;</span>
                    <span class="block">Magonjwa</span>
                </div>

                <div class="flex border-b border-pink-200 py-6">
                    <span class="block text-4xl leading-none font-thin text-pink-200 font-semibold">115</span>
                    <span class="mx-4">&minus;</span>
                    <span class="block">Mimba za utotoni</span>
                </div>
            </aside>
            <div class="w-2/3 px-6">
                <section class="rounded-lg bg-white shadow px-6 py-6 mb-8">
                    <h3 class="text-lg mb-4 heading-indicator">111 - Balehe</h3>
                    <div class="leading-loose">
                        <p>
                            Kati ya miaka 10-14 wasichana na wavulana huanza kuona mabadiliko
                            katika miili yao, ya kimili na kihisia, na huchukua miaka kadhaa,
                            mabadiliko haya huitwa balehe, msichana huanza kuzalisha mayai ya
                            uzazi, mwili hupevuka na kujenga uwezo wa kupata watoto, lakini
                            haimaanishi kwamba huu ni wakati mwafaka wa kupata mtoto, maziwa
                            huanza kukua, nyonga hutanuka na nywele huota sehemu za siri na
                            makwapani.
                        </p>
                    </div>
                </section>


                <section class="rounded-lg bg-white shadow px-6 py-6 mb-8">
                    <h3 class="text-lg mb-4 heading-indicator">112 - Mzunguko wa mwezi</h3>
                    <div class="leading-loose">
                        <p>
                            Wakati wa hedhi, kuta za mfuko wa kizazi(uterasi) hubomoka na kutoka
                            nje pamoja na damu kupitia uke, hutokea kila mwezi ndani ya siku nne
                            hadi saba, jambo kama hili ni kawaida na hutokea kila mwezi.Tangu
                            kuingia kwenye siku zako(damu inapoanza kutoka) mpaka siku unayoingia
                            tena kwa kawaida ni siku 28, huo ndio mzunguko japo wengine huchukua
                            muda mrefu zaidi. Wegine hawasikii maumivu wakati wa hedhi, wakati
                            baadhi wakipata maumivu makali, kama unahitaji kubadili pedi au vitambaa
                            zaidi ya mara nne, omba ushauri wa mkubwa wako ama daktari.
                        </p>
                    </div>
                </section>


                <section class="rounded-lg bg-white shadow px-6 py-6 mb-8">
                    <h3 class="text-lg mb-4 heading-indicator">113 - Mimba</h3>
                    <div class="leading-loose">
                        <p>
                            Baada ya kuvunja ungo msichana hupata hedhi mara moja kila mwezi, siku ya
                            kwanza ya hedhi ni siku yakwanza ya mzunguko, baada ya damu kutoka, yai moja
                            linaanza kukua ndani ya kokwa, vilevile utando wa damu ndani ya mfuko wa uzazi
                            huanza kujengeka ili ukaribishe mimba, ndani ya siku 11-14 yai hupevuka ndani
                            ya kokwa na halafu husafiri kwenye mrija wa kupitisha mayai hadi mfuko wa uzazi,
                            mwanamke anapata mimba kama yai litaungana na mbegu ya kiume, ina maana kama
                            msichana akikutana na mvulana wakati yai linakaribia au limekwisha pevuka
                            atapata ujauzito.
                        </p>
                    </div>
                </section>

                <section class="rounded-lg bg-white shadow px-6 py-6 mb-8">
                    <h3 class="text-lg mb-4 heading-indicator">114 - Magonjwa</h3>
                    <div class="leading-loose">
                        <p>
                            Magonjwa haya huleta maumivu makali na hata wakati mwingine kifo, baadhi ya magonjwa
                            hayo ni pamoja na UKIMWI, kisonono, kaswende, klamdia na kadhalika, dalili zake huwa
                            kuwashwa sehemu za siri, vidonda sehemu za siri na kwa wanawake huweza kuhisi
                            maumivu makali chini ya tumbo , njia kuu ya kujiepusha na magonjwa hayo ni kuacha
                            kujamiiana hadi pale utakapoolewa, na itakapofikia muda huo kuwa mwaminifu kwa mwenza
                            wako.
                        </p>
                    </div>
                </section>

                <section class="rounded-lg bg-white shadow px-6 py-6 mb-8">
                    <h3 class="text-lg mb-4 heading-indicator">114 - Mimba za utotoni</h3>
                    <div class="leading-loose">
                        <p class="mb-4">
                            Wataalamu wanashauri msichana anastahili kubeba mimba akiwa na zaidi ya umri wa miaka 20,
                            kabla ya umri huu, mwili wa msichana bado haujakomaa vizuri, viungo vya uzazi bado ni vidogo
                            na ngozi ni laini, vilevile mfupa wa nyonga vado ni mwembamba kiasi cha kumwezesha mtoto
                            kupita wakati wa kuzaliwa.
                        </p>

                        <p class="mb-4">
                            Matatizo wanayokutana nayo ni pamoja na mapigo ya moyo kuwa juu, kukwama kwa mtoto,
                            upasuaji wakati wa kujifungua, kujifungua kabla ya wakati na watoto kuzaliwa njiti.
                        </p>

                        <p>
                            Athari nyingine ni kukatisha masomo, hali duni kiuchumi na wakti mwingine kutengwa
                            katika jamii.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
