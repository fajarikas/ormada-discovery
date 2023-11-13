<aside id="sidebar" class="hidden md:inline fixed top-0 w-[20%] h-screen bg-green-1">
    <div class="ml-12 my-8">
        <a href="{{ url('/') }}" class="flex items-center gap-5">
            <div>
                <img src="{{ url('/images/5.Logo Ormada UNY.png') }}" class="w-16" alt="" />
            </div>
            <div class="">
                <p class="text-2xl text-white font-bold"> Ormada Discovery </p>
            </div>
        </a>

        <div class="mt-8">
            <a href="#">
                <div
                    class="stroke-biru bg-white text-green-1 hover:text-biru hover:fill-biru rounded-l-full w-[100%] pl-8 py-4 mt-4">
                    <div class="flex">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>

                            <div>
                                <p class="font-medium"> Dashboard </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</aside>

<nav class="md:hidden inline">
    <div class="py-3 px-4 bg-green-1">
        <div class="flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ url('/images/5.Logo Ormada UNY.png') }}" class="w-10" alt="" />

                <p class="text-md text-white font-semibold"> Ormada Discovery </p>
            </a>
            <div>
                <a href="#">
                    <svg id="menu" name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div id="navbar"
        class="text-green-3 hidden transition duration-100 delay-100 ease-in bg-green-1 pr-4 pl-8 pb-5 pt-3">
        <div
            class="px-4 py-2 text-green-3 rounded-md text-background-color hover:text-biru-font font-semibold hover:bg-background-color">
            <a class="" href="#">Dashboard</a>
        </div>
    </div>
</nav>
