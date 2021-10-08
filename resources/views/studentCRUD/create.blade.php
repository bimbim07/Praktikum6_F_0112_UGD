@extends('dashboard')

@section('content')

    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Create New Student</h2>
        </div>
        <div>
            <a class="btn btn-secondary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name : </strong>
                    <input type="text" name="nama_depan" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <strong>Last Name : </strong>
                    <input type="text" name="nama_belakang" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <strong>Email : </strong>
                    <input type="text" name="Email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <strong>no Telephone : </strong>
                    <input type="text" name="no_telp" class="form-control" placeholder="Telephone">
                </div>
                <div class="form-group">
                    <strong>Tempat Lahir : </strong>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Birth Place">
                </div>
                <div class="form-group">
                    <strong>Tanggal lahir : </strong>
                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Birth Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endsection