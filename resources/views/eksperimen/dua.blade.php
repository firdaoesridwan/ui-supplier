@extends('layouts.app')

@section('title', 'SIMAMPU')

@section('content')
<div class="max-w-2xl mx-auto font-inter">
    <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="authentication-modal">
        Toggle login modal
    </button>
    <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative">
                <div class="">
                    <div class="text-center p-5 flex-auto justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <p class="mt-4 text-lg text-gray-800 font-bold px-8">Anda yakin menghapus data ini?</p>
                    </div>
                    <div class="p-3 text-center space-x-4 md:block">
                        <button data-modal-toggle="authentication-modal" class="mb-2 md:mb-0 bg-green-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-white rounded-full hover:shadow-lg hover:bg-green-800">
                            Batal
                        </button>
                        <button class="mb-2 md:mb-0 bg-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-800">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-5">This modal element is part of a larger, open-source library of Tailwind CSS components. Learn more by going to the official <a class="text-blue-600 hover:underline" href="#" target="_blank">Flowbite Documentation</a>.</p>
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
@endsection