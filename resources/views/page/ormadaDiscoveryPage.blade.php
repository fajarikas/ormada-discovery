@extends('partial.main')
@section('content')
    <section id="section1" class="mx-5 md:mx-[50px] text-green-1 mt-10 md:mt-28">
        <p id="top" class="text-5xl font-bold"> Ormada Discovery </p>
        <p id="left" class="text-2xl font-medium mt-5">
            Cari Ormada mu di sini, klik Join here dan bergabung dengan Ormada!
        </p>

        <div id="right" class="my-5">
            <form action="/ormada" method="GET">
                <div class="flex gap-10">
                    <input name="search"
                        class="shadow-xl hover:drop-shadow-2xl bg-white px-4 py-5 rounded-full w-full focus:outline-none focus:ring-2 focus:ring-green-2 focus:border-transparent transition duration-100 delay-50 ease-in"
                        type="search" placeholder="Cari daerah asalmu..." />
                    <button type="submit"
                        class="bg-green-1 text-white hover:bg-white hover:border hover:border-green-1 hover:text-green-1 shadow-xl hover:drop-shadow-2xl py-3 px-5 rounded-2xl transition duration-50 delay-100 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <div class="block  md:grid md:grid-cols-5 mx-auto gap-y-10 my-10">
            @foreach ($ormada as $ormada)
                <div id="left"
                    class="md:mt-0 mt-10 text-green-1 w-[325px] h-[406px] rounded-[50px] shadow-2xl hover:drop-shadow-2xl transition duration-100 delay-50 ease-in bg-white">
                    <img src="{{ asset('storage/images/' . $ormada->logo) }}" class="pt-5 mx-auto w-[180px]"
                        alt="" />
                    <p class="mt-3 mx-auto text-2xl font-bold text-center">{{ $ormada->regional }}</p>
                    <p class="mt-1 mx-auto text-xl font-medium text-center w-[215px]">{{ $ormada->name }}
                    </p>
                    <div class="flex gap-3 justify-center mt-1">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5281 2.00099C14.2578 1.99819 14.9876 2.00552 15.7171 2.02299L15.9111 2.02999C16.1351 2.03799 16.3561 2.04799 16.6231 2.05999C17.6871 2.10999 18.4131 2.27799 19.0501 2.52499C19.7101 2.77899 20.2661 3.12299 20.8221 3.67899C21.3305 4.17859 21.7239 4.78293 21.9751 5.44999C22.2221 6.08699 22.3901 6.81399 22.4401 7.87799C22.4521 8.14399 22.4621 8.36599 22.4701 8.58999L22.4761 8.78399C22.4939 9.51318 22.5015 10.2426 22.4991 10.972L22.5001 11.718V13.028C22.5026 13.7577 22.4949 14.4875 22.4771 15.217L22.4711 15.411C22.4631 15.635 22.4531 15.856 22.4411 16.123C22.3911 17.187 22.2211 17.913 21.9751 18.55C21.7247 19.2177 21.3312 19.8226 20.8221 20.322C20.3221 20.8303 19.7174 21.2237 19.0501 21.475C18.4131 21.722 17.6871 21.89 16.6231 21.94C16.3561 21.952 16.1351 21.962 15.9111 21.97L15.7171 21.976C14.9876 21.9938 14.2578 22.0014 13.5281 21.999L12.7821 22H11.4731C10.7434 22.0025 10.0136 21.9948 9.28409 21.977L9.09009 21.971C8.8527 21.9624 8.61536 21.9524 8.37809 21.941C7.31409 21.891 6.58809 21.721 5.95009 21.475C5.28277 21.2243 4.67833 20.8308 4.17909 20.322C3.67013 19.8223 3.27631 19.2175 3.02509 18.55C2.77809 17.913 2.61009 17.187 2.56009 16.123C2.54895 15.8857 2.53895 15.6484 2.53009 15.411L2.52509 15.217C2.50665 14.4875 2.49832 13.7577 2.50009 13.028V10.972C2.4973 10.2426 2.50463 9.51318 2.52209 8.78399L2.52909 8.58999C2.53709 8.36599 2.54709 8.14399 2.55909 7.87799C2.60909 6.81299 2.77709 6.08799 3.02409 5.44999C3.27546 4.78261 3.67005 4.17843 4.18009 3.67999C4.67898 3.17074 5.28305 2.77656 5.95009 2.52499C6.58809 2.27799 7.31309 2.10999 8.37809 2.05999L9.09009 2.02999L9.28409 2.02499C10.0133 2.00656 10.7427 1.99823 11.4721 1.99999L13.5281 2.00099ZM12.5001 7.00099C11.8376 6.99162 11.1798 7.11401 10.5651 7.36105C9.95029 7.6081 9.39074 7.97487 8.91893 8.44004C8.44713 8.90522 8.07249 9.45952 7.81678 10.0707C7.56106 10.682 7.42938 11.3379 7.42938 12.0005C7.42938 12.663 7.56106 13.319 7.81678 13.9302C8.07249 14.5414 8.44713 15.0958 8.91893 15.5609C9.39074 16.0261 9.95029 16.3929 10.5651 16.6399C11.1798 16.887 11.8376 17.0094 12.5001 17C13.8262 17 15.0979 16.4732 16.0356 15.5355C16.9733 14.5978 17.5001 13.3261 17.5001 12C17.5001 10.6739 16.9733 9.40213 16.0356 8.46445C15.0979 7.52677 13.8262 7.00099 12.5001 7.00099ZM12.5001 9.00099C12.8986 8.99364 13.2946 9.06578 13.6649 9.21319C14.0352 9.3606 14.3724 9.58033 14.6569 9.85953C14.9413 10.1387 15.1673 10.4718 15.3215 10.8393C15.4758 11.2068 15.5553 11.6014 15.5554 12C15.5554 12.3986 15.4761 12.7931 15.3219 13.1607C15.1678 13.5283 14.9419 13.8614 14.6576 14.1407C14.3732 14.42 14.0361 14.6399 13.6658 14.7874C13.2955 14.9349 12.8996 15.0072 12.5011 15C11.7054 15 10.9424 14.6839 10.3798 14.1213C9.81716 13.5587 9.50109 12.7956 9.50109 12C9.50109 11.2043 9.81716 10.4413 10.3798 9.87867C10.9424 9.31606 11.7054 8.99999 12.5011 8.99999L12.5001 9.00099ZM17.7501 5.50099C17.4275 5.5139 17.1224 5.65114 16.8987 5.88396C16.675 6.11678 16.5501 6.42712 16.5501 6.74999C16.5501 7.07285 16.675 7.38319 16.8987 7.61601C17.1224 7.84884 17.4275 7.98607 17.7501 7.99899C18.0816 7.99899 18.3996 7.86729 18.634 7.63287C18.8684 7.39845 19.0001 7.08051 19.0001 6.74899C19.0001 6.41747 18.8684 6.09952 18.634 5.8651C18.3996 5.63068 18.0816 5.49899 17.7501 5.49899V5.50099Z"
                                fill="#235B38" />
                        </svg>
                        <p> {{ $ormada->instagram }} </p>
                    </div>
                    <p>
                        <a class="mx-auto mt-3 w-[122px] flex justify-center font-bold px-5 py-1.5 border-2 border-green-2 bg-blue-1 hover:bg-white hover:text-blue-1 hover:border-blue-1 text-white transition-all duration-50 delay-100 ease-in rounded-full"
                            href="{{ $ormada->whatsapp }}">Join here!</a>
                    </p>
                </div>
            @endforeach

        </div>
    </section>
@endsection