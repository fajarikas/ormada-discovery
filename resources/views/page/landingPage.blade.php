@extends('partial.main')
@section('content')
    <section id="section1" class="mx-5 md:mx-[50px] text-green-1 md:flex mt-10 md:mt-52">
        <div id="left">
            <img class="h-80 mx-auto md:mx-0 md:h-[720px]" src="{{ url('/images/char-landing.png') }}" alt="" />
        </div>

        <div id="right" class="text-center justify-center mx-auto">
            <p class="md:mt-0 mt-3 font-semibold text-3xl md:text-[48px]">
                Waktunya Menjelajah!
            </p>
            <p class="mt-3 md:mt-5 font-regular text-xl">
                Jelajahi dan temukan Ormadamu!
            </p>
            <a href="#section2"
                class="focus:drop-shadow-2xl transition delay-50 duration-100 ease-in mt-3 md:mt-8 flex mx-auto justify-center font-regular text-lg md:text-2xl text-white bg-green-1 hover:bg-green-3 hover:border-2 hover:border-green-1 hover:text-green-1 w-36 md:w-[262px] py-2 rounded-full">
                Explore more
            </a>

            <img class="w-[1200px] mt-10" src="{{ url('/images/indonesia 1.png') }}" alt="" />
        </div>
    </section>

    <section id="section2" class="px-5 py-[68px] bg-grey-1">
        <div class="">
            <p id="top" class="text-center text-3xl md:text-[48px] text-black">Apa itu <span
                    class="font-bold text-blue-1">Ormada UNY?</span></p>
            <p id="bottom" class="text-lg mt-3 text-center justify-center flex mx-auto text-blue-1 md:w-[709px]">
                Organisasi mahasiswa daerah di Universitas Negeri Yogyakarta yang
                menjadi rumah dan mewadahi aktivitas mahasiswa daerah untuk berkembang
                dan berkumpul dengan rekan seperantauan.</p>
        </div>

        <div
            class="mt-12 w-full md:w-[904px] py-10 bg-white mx-auto rounded-[50px] shadow-xl hover:drop-shadow-2xl transition duration-50 delay-100 ease-in">
            <p id="right"
                class="text-2xl md:text-[32px] text-blue-1 text-center w-full md:w-[475px] mx-auto justify-center">
                Kenapa kamu harus bergabung dengan
                <span class="font-bold"> Ormada UNY</span>?
            </p>
            <div class="py-10">
                <div class="md:grid md:grid-cols-2 block gap-y-14 mx-auto">
                    <div id="left" class="mx-auto my-auto bg-blue-1 py-10 md:py-16 w-72 md:w-[332px] rounded-[40px]">
                        <img class="w-44 md:w-[200px] mx-auto"
                            src="{{ url('/images/lounge-house-entrance-background.png') }}" alt="" />

                        <p class="mt-5 text-lg md:text-xl text-white w-[200px] md:w-[268px] text-center mx-auto">
                            Peluang membangun relasi dengan mahasiswa dari daerah yang sama
                        </p>
                    </div>

                    <div id="right"
                        class="md:mt-0 mt-5 mx-auto my-auto bg-blue-1 py-10 md:py-16 w-72 md:w-[332px] rounded-[40px]">
                        <img class="w-44 md:w-[200px] mx-auto"
                            src="{{ url('/images/lounge-woman-and-a-man-with-a-laptop-discuss-a-project.png') }}"
                            alt="" />
                        <p class="mt-5 text-lg md:text-xl text-white w-[200px] md:w-[268px] text-center mx-auto">
                            Mendapatkan rekan dari asal daerah yang sama sehingga dapat membantu beradaptasi di lingkungan
                            baru
                        </p>
                    </div>

                    <div id="left"
                        class="md:mt-0 mt-5 mx-auto my-auto bg-blue-1 py-10 md:py-16 w-72 md:w-[332px] rounded-[40px]">
                        <img class="w-44 md:w-[200px] mx-auto"
                            src="{{ url('/images/lounge-target-with-arrow-in-the-center-and-data-charts.png') }}"
                            alt="" />
                        <p class="mt-5 text-lg md:text-xl text-white w-[200px] md:w-[268px] text-center mx-auto">
                            Ragam kegiatan yang memberikan dampak positif yang nyata pada daerah masing-masing
                        </p>
                    </div>

                    <div id="right"
                        class="md:mt-0 mt-5 mx-auto my-auto bg-blue-1 py-10 md:py-16 w-72 md:w-[332px] rounded-[40px]">
                        <img class="w-44 md:w-[200px] mx-auto" src="{{ url('/images/lounge-street-dancer.png') }}"
                            alt="" />
                        <p class="mt-5 text-lg md:text-xl text-white w-[200px] md:w-[268px] text-center mx-auto">
                            Serta berbagai aktivitas yang mendorong pengembangan pribadi dan profesional
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:mx-0 mx-5 py-20 bg-white text-orange" id="section3">
        <p
            class="w-[280px] md:px-0 px-10 md:w-[409px] font-bold text-3xl md:text-5xl py-25 text-center mx-auto justify-center border-l border-r">
            <span id="top"> Ormada Discovery </span>
        </p>

        <img id="bottom" class="mx-auto w-[300px] md:w-[547px] my-5"
            src="{{ url('/images/lounge-woman-in-headphones-working-on-a-laptop-in-the-office.png') }}" alt="" />

        <p id="left" class="text-center text-xl md:text-[32px]">
            Kunjungi <span class="font-bold"> Ormada Discovery </span> , dan temukan
            <span class="font-bold"> Ormada </span>
            mu!
        </p>

        <a id="right"
            class="focus:outline-none focus:drop-shadow-2xl transition delay-50 duration-100 ease-in flex justify-center font-bold text-xl md:text-[32px] py-4 w-[293px] mx-auto bg-orange text-white text-center rounded-full mt-10 hover:bg-white hover:border-2 hover:border-orange hover:text-orange"
            href="{{ url('/ormada') }}">
            Ormada Discovery
        </a>
    </section>
@endsection
