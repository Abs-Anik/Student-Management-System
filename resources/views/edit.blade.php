@extends('master')

@section('content')
    <h2>Update Student Information</h2>
    <form action="{{ route('update',$student->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{ $student->name }}">
        </div>

        <div class="form-group">
            <label for="registration_id">Registration</label>
            <input type="number" class="form-control" placeholder="Enter Registration number" id="registration_id" name="registration_id" value="{{ $student->registration_id }}">
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" placeholder="Enter Department" id="department" name="department" value="{{ $student->department }}">
        </div>

         <div class="form-group">
            <label for="info">Info</label>
            <br>
            <textarea name="info" id="info" rows="5" class="form-control">
            {{ $student->info }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection