@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <a href="{{ route('books') }}" class="btn btn-secondary mb-4">Back to Index</a> <!-- Add this line -->
        <div class="card p-3 shadow">
            <h3 class="text-center font-weight-bold">Add Book</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="publisher" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year" name="year" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" id="category" name="category" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group mb-5">
                                <label for="cover_image">Cover Image</label>
                                <input type="file" class="form-control-file" id="cover_image" name="cover_image" required
                                    onchange="loadFile(event)">
                            </div>
                            <button type="submit" class="btn btn-primary  d-block" style="width: 50%;">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="background-color: #f0f0f0;" >
                        <h2>Preview Image</h2>
                        <img class="shadow" id="output" width="300" /> <!-- Move the image preview here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
