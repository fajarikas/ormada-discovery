@extends('admin.main')
@section('content')
    <div id="body " class="mx-4 my-8 md:ml-[30rem] md:mr-10 md:my-8 bg-background-color">
        <div>
            <div class="flex justify-between items-center">
                <div class="flex gap-2 items-center font-bold text-biru-font text-2xl">
                    <p> Dashboard Ormada Discovery </p>
                </div>

            </div>

            <div class="mt-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <form action="/dashboard" method="GET">
                            <input type="search" name="search"
                                class="bg-green-3 shadow-xl hover:drop-shadow-xl transition delay-100 duration-150 ease-in-out rounded-full px-4 py-2  text-green-1"
                                placeholder="Search... " />
                            <button type="submit" id="search">
                                <div
                                    class="flex items-center py-3 px-3 bg-green-1 rounded-full hover:bg-green-3 text-white hover:text-green-1 hover:border hover:border-green-1 transition delay-70 duration-100 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-3 h-3">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </form>

                    </div>

                    <a href="{{ url('/dashboard/create') }}">
                        <div
                            class="items-center
                        flex gap-1 text-lg font-medium py-2 px-4 bg-green-1 text-white rounded-full hover:bg-green-3
                        hover:text-green-1 hover:border-2 hover:border-green-1 transition delay-0 duration-100 ease-linear">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="hidden md:inline"> Tambah data Ormada</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="shadow-2xl relative overflow-x-auto rounded-xl">
                <table class="w-full rounded-lg text-biru-font text-center bg-white shadow-2xl">
                    <thead class="bg-green-1 text-green-3 text-xl font-medium">
                        <tr class="text-center border-b border-biru-font">
                            <td class="font-semibold py-5 px-2"> Nama Ormada </td>
                            <td class="font-semibold py-5 px-2"> Asal Ormada </td>
                            <td class="font-semibold py-5 px-2"> Logo Ormada </td>
                            <td class="font-semibold py-5 px-2"> Instagram </td>
                            <td class="font-semibold py-5 px-2"> Whatsapp </td>
                            <td class="font-semibold py-5 px-2"> Action </td>
                        </tr>
                    </thead>
                    <tbody class="text-xl border-separate">
                        @foreach ($ormada as $ormadas)
                            <tr class="my-3">
                                <td class=""> {{ $ormadas->regional }} </td>
                                <td class=""> {{ $ormadas->name }} </td>
                                <td class="font-medium">
                                    @if ($ormadas->logo)
                                        <img class="py-5 w-16 rounded-full mx-auto justify-center flex"
                                            src="{{ asset('storage/images/' . $ormadas->logo) }}" alt="" />
                                    @else
                                        <span>No Image Found!</span>
                                    @endif
                                </td>
                                <td class="font-medium class">
                                    <p class="w-40 truncate"> {{ $ormadas->instagram }} </p>
                                </td>
                                <td class="font-medium w-24 truncate">
                                    <p class="w-24 truncate"> {{ $ormadas->whatsapp }} </p>
                                </td>
                                <td class="font-medium">
                                    <div class="flex justify-center gap-5">
                                        <a href="{{ url('dashboard/' . $ormadas->id . '/edit') }}" type="submit"
                                            class="bg-indigo-500 py-2 px-4 rounded-2xl text-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 hover:bg-white transition duration-50 delay-100 ease-in">Edit</a>
                                        <form action="{{ url('dashboard/' . $ormadas->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit"
                                                class="bg-red-600 py-2 px-4 rounded-2xl text-white hover:text-red-600 hover:border-2 hover:border-red-600 hover:bg-white transition duration-50 delay-100 ease-in">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
