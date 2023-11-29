@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Edit Student</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.update', $student) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name">Name</label>
                            <input type="text" name="nama" id="name" class="form-control" value="{{ $student->nama }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="uts">UTS</label>
                            <input type="text" name="uts" id="uts" class="form-control" value="{{ $student->uts }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="uas">UAS</label>
                            <input type="text" name="uas" id="uas" class="form-control" value="{{ $student->uas }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="tugas">Tugas</label>
                            <input type="text" name="tugas" id="tugas" class="form-control" value="{{ $student->tugas }}" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="kehadiran">Kehadiran</label>
                            <input type="text" name="kehadiran" id="kehadiran" class="form-control" value="{{ $student->kehadiran }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection