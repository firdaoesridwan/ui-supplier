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

                    <div class="flex flex-wrap -mx-6">

                        <!-- Tombol Tambah Data Petani -->
                        <div class="w-full px-6 font-inter">
                            <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                <a class="w-full md:w-auto text-sm bg-green-500 px-4 py-2 text-white rounded-3xl font-semibold hover:bg-green-800" href="{{ url('/petani/create') }}">
                                    <i class='bx bx-plus-medical'></i>
                                    Tambah Data Petani
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel -->
                    <div class="mt-4 container mx-auto text-black font-inter">
                        <div class="overflow-x-auto rounded-lg">
                            <table class="min-w-full">
                                <colgroup>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col class="w-24">
                                </colgroup>
                                <thead class="bg-green-200">
                                    <tr class="text-left">
                                        <th class="p-3">No.</th>
                                        <th class="p-3">Nama Petani</th>
                                        <th class="p-3">Alamat</th>
                                        <th class="p-3">No. Hp</th>
                                        <th class="p-3">Luas Lahan</th>
                                        <th class="p-3">Jenis Varietas</th>
                                        <th class="p-3">Jenis Pupuk</th>
                                        <th class="p-3">Tahun Sawit</th>
                                        <th class="p-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- satu -->
                                    @foreach($data as $item)
                                    <tr class="border-b border-opacity-20 border-gray-700 bg-white">
                                        <td class="p-3">
                                            <p>{{ "$loop->iteration"."." }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->nama }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->alamat }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->no_hp }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->luas_lahan }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->varietas_sawit }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->pupuk }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $item->tahun_sawit }}</p>
                                        </td>
                                        <td class="p-3 text-right">
                                            <div class="flex item-center justify-center">
                                                <form action="{{ url("/petani/$item->id") }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <a class="mr-3 bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" href="{{ url("/petani/$item->id/edit") }}">Edit</a>
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline mt-2">Hapus</button>
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
            </main>

        </div>
    </div>
</div>
@endsection