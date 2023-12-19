@extends('layouts')

@section('content')
    <div class="container mx-auto px-4 flex items-center justify-center">
        <div class="mt-4 bg-white shadow-md w-50 rounded px-5 pt-6 pb-8 mb-4">
            <h2 class="text-2xl text-center">Add New Teacher</h2>
            <div class="mb-4 flex ">
                <a href="{{ url()->previous() }}"
                    class="px-3 py-2 rounded-md text-sm font-medium border-transparent text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 mr-2">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Back
                </a>
            </div>
            <form action="{{ route('teachers.store') }}" method="POST" class="mt-4 w-full">
                @csrf

                <div class="mb-4">
                    <label for="nip" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="shadow appearance-none border w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-4">
                    <label for="name" class=" text-gray-700 text-sm font-bold mb-2">NIP</label>
                    <input type="text" id="nip" name="nip"
                        class="shadow appearance-none border w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-4">
                    <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                    <input type="text" id="alamat" name="alamat"
                        class="shadow appearance-none border w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="px-4 py-2 w-50 rounded-md text-sm font-medium border-transparent text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
