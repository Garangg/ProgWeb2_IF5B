@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <a href="{{ route('books') }}" class="btn btn-secondary mb-4">Back to Index</a>
        <div class="card p-3 shadow">
            <h3 class="text-center font-weight-bold">Edit Book</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('books.update', $books) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $books->title }}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author"
                                    value="{{ $books->author }}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="publisher"
                                    value="{{ $books->publisher }}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year" name="year"
                                    value="{{ $books->year }}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" id="category" name="category"
                                    value="{{ $books->category }}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $books->description }}</textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock"
                                    value="{{ $books->stock }}" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ $books->price }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
