@extends('layouts.app')

@section('title', 'SIMAMPU - Petani')

@section('content')
<div>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <!-- sidebar -->
        @include('layouts.partials.sidebar')

        <div class="flex flex-col flex-1 overflow-hidden">

            <!-- navbar -->
            @include('layouts.partials.navbar')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container px-6 py-8 mx-auto">
                    <h3 class="text-3xl font-semibold text-gray-700 font-inter">Petani</h3>

                    <div class="mt-4"></div>

                    <div class="p-8 rounded-md border border-gray-200 bg-white font-inter">
                        <h1 class="font-semibold text-2xl">Tambah Data Petani</h1>

                        <form action="{{ url('/petani') }}" method="POST">
                            @csrf 
                            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Nama Petani</label>
                                    <input type="text" name="nama" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan nama petani disini..." />
                                </div>

                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Jenis Varietas</label>
                                    <input type="text" name="varietas_sawit" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan jenis varietas disini..." />
                                </div>

                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Nomor Telepon</label>
                                    <input type="text" name="no_hp" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan nomor telepon disini..." />
                                </div>

                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Jenis Pupuk</label>
                                    <input type="text" name="pupuk" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan jenis pupuk disini..." />
                                </div>

                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Alamat</label>
                                    <input type="text" name="alamat" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan alamat disini..." />
                                </div>

                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Tahun Sawit</label>
                                    <input type="text" name="tahun_sawit" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan tahun sawit disini..." />
                                </div>

                                <div>
                                    <label for="" class="text-gray-700 block mb-1 font-semibold">Luas Lahan</label>
                                    <input type="text" name="luas_lahan" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan luas lahan disini..." />
                                </div>

                            </div>

                            <div class="space-x-4 mt-8">
                                <button type="submit" class="py-2 px-4 rounded disabled:opacity-50 text-white bg-green-500 hover:bg-green-800 focus:bg-gray-600">Tambah</button>

                                <!-- Secondary -->
                                <a class="py-3 px-4 rounded disabled:opacity-50  text-white bg-red-500 hover:bg-red-800 focus:bg-gray-600" href="{{ url('/petani') }}">Batal</a>
                            </div>
                        </form>
                    </div>

                </div>
        </div>
    </div>
</div>
@endsection