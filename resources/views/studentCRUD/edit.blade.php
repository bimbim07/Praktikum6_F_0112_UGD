@extends('dashboard')

@section('content')

    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Edit Student</h2>
        </div>
        <div>
            <a class="btn btn-secondary" href="{{  route('student.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('student.update',$student->id) }}" method="POST">

        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row g-2">
                        <strong>Student First Name:</strong>
                            <input type="text" name="nama_depan" class="form_control" value="<?php echo $student["nama_depan"];?>">

                        <strong>Student Last Name:</strong>
                            <input type="text" name="nama_belakang" class="form_control" value="<?php echo $student["nama_belakang"];?>">

                        <strong>Student Email:</strong>
                            <input type="text" name="email" class="form_control" value="<?php echo $student["email"];?>">

                        <strong>Student Phone Number:</strong>
                            <input type="text" name="no_telp" class="form_control" value="<?php echo $student["no_telp"];?>">

                        <strong>Student Birthplace</strong>
                            <input type="text" name="tempat_lahir" class="form_control" value="<?php echo $student["tempat_lahir"];?>">

                        <strong>Student Birthdate</strong>
                            <input type="date" name="tanggal_lahir" class="form_control" value="<?php echo $student["tanggal_lahir"];?>">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
    </form>
@endsection