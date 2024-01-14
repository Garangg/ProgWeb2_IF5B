@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Books</h1>
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{ route('books.create') }}" class="btn btn-success float-right mb-3">Add New Book</a>
                    </div>
                    <div class="col-md-4 float-right">
                        <form action="{{ route('books') }}" method="GET">
                            <div class="input-group ">
                                <input type="text" class="form-control me-4" name="search"
                                    value="{{ request()->get('keyword') }}" placeholder="Search by title">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                    <a href="{{ route('books') }}" class="ml-2 btn btn-primary">Reset</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    @foreach ($books as $book)
                        <div class="col-md-4 mb-4">
                            <div class="card card-book h-100 d-flex flex-column" style="width: 25rem;">
                                <img src="{{ asset('/uploads/image_product/' . $book->cover_image) }}"
                                    alt="{{ $book->title }}" class="image-fluid image-book">
                                <div class="card-body flex-grow-1 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h5 class="card-title flex-grow-1"><strong>{{ $book->title }}</strong></h5>
                                        <!-- Dropdown button -->
                                        <div class="dropdown">
                                            <button class="btn btn-tertiary" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <strong>...</strong>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('books.edit', $book) }}">Edit
                                                    Book</a>
                                                <form action="{{ route('books.destroy', $book) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete Book</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text">{{ $book->author }}</p>
                                    <p class="card-text">{{ $book->publisher }}</p>
                                    <p class="card-text"><strong>Rp.
                                            {{ number_format($book->price, 0, ',', '.') }}</strong></p>
                                    <a href="{{ route('books.show', $book) }}" class="btn btn-primary mt-auto">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-5">
                    {{ $books->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
