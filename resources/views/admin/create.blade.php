@extends('admin.main')
@section('content')
    <form action="{{ url('dashboard') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="body " class="mx-4 my-8 md:ml-[30rem] md:mr-10 md:my-8 bg-background-color">
            <div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-2 items-center font-bold text-biru-font text-2xl">
                        <p> Tambah data Ormada </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 mb-10">
                <div class="text-biru-font w-full drop-shadow-md">
                    <div class="rounded-t-lg text-white bg-green-1">
                        <p class="px-8 py-4 font-bold">Tambah Ormada</p>
                    </div>
                    <div class="bg-white">
                        <div class="px-8 pt-5 pb-10 block md:grid md:grid-cols-2 md:gap-5 w-full">
                            <div class="block">
                                <p class="font-semibold">Nama Ormada</p>
                                <input id="name" name="name" type="text" placeholder="Nama Ormada"
                                    class="rounded-lg border border-green-1 p-2 w-full" />
                            </div>

                            <div class="block md:mt-0 mt-5">
                                <p class="font-semibold">Asal Ormada</p>
                                <input id="regional" name="regional" type="text" placeholder="Daerah asal ormada"
                                    class="rounded-lg border border-green-1 p-2 w-full" />
                            </div>

                            <div class="block md:mt-0 mt-5">
                                <p class="font-semibold">Logo Ormada</p>
                                <input type="file" id="logo" name="logo"
                                    class="w-full p-2 border border-green-1 rounded-lg">
                            </div>

                            <div class="block md:mt-0 mt-5">
                                <p class="font-semibold">Instagram</p>
                                <input id="instagram" name="instagram" type="text"
                                    placeholder="Username instagram ormada"
                                    class="rounded-lg border border-green-1 p-2 w-full" />
                            </div>

                            <div class="block md:mt-0 mt-5">
                                <p class="font-semibold">Whatsapp*</p>
                                <input id="whatsapp" name="whatsapp" type="text" placeholder="Link whatsapp ormada"
                                    class="rounded-lg border border-green-1 p-2 w-full" />
                            </div>



                            <button type="submit"
                                class="md:mt-0 mt-24 font-semibold bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-white hover:border hover:border-blue-600 transition duration-75 delay-75 ease-in hover:text-blue-600">
                                Tambah Ormada

                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>
@endsection
