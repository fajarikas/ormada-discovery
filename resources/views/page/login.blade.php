@extends('partial.main')
@section('content')
    <div class="mt-40  mb-[300px]">
        <p class="text-4xl  text-green-1 font-medium text-center">
            Halo yang mulia, yuk sini login!
        </p>

        <div class="mt-24">
            <img src="{{ url('/images/indonesia 1(1).png') }}" class="z-0 absolute" alt="">
            <div class="mx-auto justify-center flex relative z-10">
                <div
                    class="block transition duration-50 delay-50 ease-in shadow-2xl hover:drop-shadow-2xl bg-white w-[662px] h-[554px] rounded-[50px]">
                    <p class="mt-12 text-center text-4xl text-green-1 font-medium">Login</p>
                    <form action="/login" method="post">
                        @csrf
                        <input value="email" type="email" name="email" @error('email') is-invalid @enderror
                            class="bg-green-3 w-[557px] h-[73px] rounded-[30px] mt-12 text-left px-8 mx-auto justify-center flex text-2xl text-green-1 font-medium shadow-2xl"
                            placeholder="" required>
                        <input value="password" name="password"
                            class="bg-green-3 w-[557px]
                            h-[73px] rounded-[30px] mt-10 text-left px-8 mx-auto justify-center flex text-2xl text-green-1
                            font-medium shadow-2xl"
                            placeholder="Password" type="password" required>

                        <button
                            class="transition duration-50 delay-50 ease-in bg-green-1 hover:bg-green-3 hover:border hover:border-green-1 hover:text-green-1 text-green-3 w-[557px] h-[73px] rounded-[30px] mt-10 items-center px-8 mx-auto justify-center flex text-2xl  font-medium shadow-2xl"
                            placeholder="Password">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
