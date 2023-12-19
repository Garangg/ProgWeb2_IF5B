@extends('layouts')

@section('content')

<div class="container mx-auto px-4">
    <div class="bg-white rounded mt-5 p-4 shadow">
        <div class="text-center mb-5">
            <h2 class="text-5xl"><a href="https://www.agussuratna.net" class="text-blue-500">Data Guru</a>
            </h2>
        </div>

        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif --}}

        <div class="mt-3 flex justify-between">
            <div class="flex items-center">
                <a href="{{ route('teachers.create') }}" class="ml-2 px-5 py-1 bg-green-600 text-white rounded-md hover:bg-green-800">Add data</a>
            </div>
            <form action="{{ route('teachers.index') }}" method="GET" class="mt-4">
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Cari Guru .." value="{{ old('search') }}" class="mr-2 px-2 py-1 border border-gray-300 rounded-md">
                    <input type="submit" value="Cari" class="px-2 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                    <a href="{{ route('teachers.index') }}" class="ml-2 px-2 py-1 bg-green-700 text-white rounded-md hover:bg-green-800">Reset</a>
                </div>
            </form>
        </div>
        <div class="mt-3">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">NIP</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Alamat</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $g)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $g->nip }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $g->nama }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $g->alamat }}</td>
                            <td>
                                <a href="{{ route('teachers.edit', $g->id) }}" class="px-4 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-700">Edit</a>
                                <form id="delete-form-{{ $g->id }}" action="{{ route('teachers.destroy', $g->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-700" onclick="confirmDelete(event, {{ $g->id }})">Delete</button>
                                </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                <p class="text-sm text-gray-700">Halaman : {{ $teachers->currentPage() }}</p>
                <p class="text-sm text-gray-700">Jumlah Data : {{ $teachers->total() }}</p>
                <p class="text-sm text-gray-700">Data Per Halaman : {{ $teachers->perPage() }}</p>
                <div class="mt-2">
                    {{ $teachers->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


