@extends('layouts.app')

@section('content')
    {{-- Show Detail Books --}}
    <div class="container py-5">
        <a href="{{ route('books') }}" class="btn btn-secondary mb-4">Back to Index</a> <!-- Add this line -->
        <div class="card p-3 shadow">
            <h3 class="text-center font-weight-bold">Detail Book</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center ">
                        <img src="{{ asset('/uploads/image_product/' .$books->cover_image) }}" alt="Cover Image" class="img-fluid shadow rounded w-50">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div>
                            <h2 class="font-weight-bold mb-4">{{ $books->title }}</h2>
                            <p class="font-weight-bold">Author: {{ $books->author }}</p>
                            <p class="font-weight-bold">Publisher: {{ $books->publisher }}</p>
                            <p class="font-weight-bold">Year: {{ $books->year }}</p>
                            <p class="font-weight-bold">Category: {{ $books->category }}</p>
                            <p class="font-weight-bold">Description: {{ $books->description }}</p>
                            <p class="font-weight-bold">Stock: {{ $books->stock }}</p>
                            <h4 class="font-weight-bold">Price: Rp. {{ number_format($books->price, 0, ',', '.') }}</h4>
                        </div>
                        <div class="mt-3 row">
                            <div class="col">
                                <button class="btn btn-success w-100" disabled>Buy</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary w-100" disabled>Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection