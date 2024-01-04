@extends('layouts.app')

@section('title', 'SIMAMPU - Petani')

@section('content')
<div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
        <!-- sidebar -->
        @include('layouts.partials.sidebar')

        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- navbar -->
            @include('layouts.partials.navbar')

            <!-- Isi Konten -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container px-6 py-8 mx-auto">
                    <h3 class="text-3xl font-semibold text-gray-700 font-inter">Petani</h3>

                    <div class="mt-4"></div>

                    <!-- Konten -->
                    <div class="flex flex-wrap -mx-6">

                        <!-- Tombol Tambah Data -->
                        <div class="w-full px-6 font-inter">
                            <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                <button onclick="document.getElementById('myModal').showModal()" id="btn" class="w-full md:w-auto text-sm bg-green-500 px-4 py-2 text-white rounded-3xl font-semibold hover:bg-green-800">
                                    <i class='bx bx-plus-medical'></i>
                                    Tambah Data Petani
                                </button>
                            </div>
                        </div>

                        <!-- Modal klik Tombol Tambah Data -->
                        <dialog id="myModal" class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadssow-lg  bg-white font-inter">
                            <div class="">
                                <div class="text-center p-5 flex-auto justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="mt-4 text-lg text-gray-500 font-bold px-8">Anda yakin menghapus data ini?</p>
                                </div>
                                <div class="p-3 text-center space-x-4 md:block">
                                    <button onclick="document.getElementById('myModal').close();" class="mb-2 md:mb-0 bg-green-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-white rounded-full hover:shadow-lg hover:bg-green-800">
                                        Batal
                                    </button>
                                    <button class="mb-2 md:mb-0 bg-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-800">Hapus</button>
                                </div>
                            </div>
                        </dialog>
                    </div>

                    <!-- script animasi tombol tambah data -->
                    <style>
                        dialog::backdrop {
                            background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
                            backdrop-filter: blur(3px);
                        }


                        @keyframes appear {
                            from {
                                opacity: 0;
                                transform: translateX(-3rem);
                            }

                            to {
                                opacity: 1;
                                transform: translateX(0);
                            }
                        }
                    </style>
                </div>
            </main>
        </div>
    </div>
    @endsection