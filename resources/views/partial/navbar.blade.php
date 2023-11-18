<nav class="hidden md:inline fixed top-0 w-full bg-green-1 z-50 py-2">
    <div class="mx-[50px] text-green-3 text-xl font-semibold">
        <div class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-4">
                <img class="w-[60px]" src="{{ url('/images/5.Logo Ormada UNY.png') }}" alt="" />
                <p class="font-semibold text-xl">Ormada Discovery</p>
            </a>

            <div class="flex items-center gap-[80px]">
                <p class="">
                    <a class="hover:text-green-4 transition-all duration-100 delay-100 ease-out"
                        href="{{ url('/#section1') }}">Home</a>
                </p>
                <p>
                    <a class="hover:text-green-4 transition-all duration-100 delay-100 ease-out"
                        href="{{ url('/#section2') }}">About</a>
                </p>
                <p>
                    <a class="hover:text-green-4 transition-all duration-100 delay-100 ease-out"
                        href="{{ url('/ormada') }}">Ormada
                        Expo</a>
                </p>
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button
                            class="px-[40px] py-2  text-white  bg-red  hover:bg-green-3  hover:text-red hover:border hover:border-red transition-all duration-50 delay-100 ease-in rounded-full">
                            Logout
                        </button>
                    </form>
                @else
                    <p>
                        <a class="px-[40px] py-2 border-2 border-green-3 bg-green-3 text-green-1 hover:bg-green-1  hover:text-green-3 transition-all duration-50 delay-100 ease-in rounded-full"
                            href="{{ url('/login') }}">Login</a>
                    </p>
                @endauth

            </div>
        </div>
    </div>
</nav>

<nav class="bg-green-3 px-5 top-0 w-full py-3 font-semibold text-green-2 md:hidden">
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="{{ url('/images/5.Logo Ormada UNY.png') }}" class="w-12" alt="" />
            <p>Ormada Discovery</p>
        </div>

        <div>
            <svg id="menu" name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>

    <div class="hidden" id="navbar">
        <div class="mx-8 my-5 block">
            <p class="">
                <a class="hover:text-green-4 transition-all duration-100 delay-100 ease-out"
                    href="{{ url('/#section1') }}">Home</a>
            </p>
            <p class="mt-2">
                <a class="mt-5 hover:text-green-4 transition-all duration-100 delay-100 ease-out"
                    href="{{ url('/#section2') }}">About</a>
            </p>
            <p class="mt-2">
                <a class="mt-5 hover:text-green-4 transition-all duration-100 delay-100 ease-out"
                    href="{{ url('/ormada') }}">Ormada Discovery</a>
            </p>
            <p class="mt-4">
                <a class="px-[40px] py-1 border-2 border-green-2 hover:bg-green-2 hover:text-white transition-all duration-50 delay-100 ease-in rounded-full"
                    href="{{ url('/login') }}">Login</a>
            </p>
        </div>
    </div>
</nav>
