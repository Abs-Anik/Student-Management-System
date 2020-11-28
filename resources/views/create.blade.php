@extends('master')

@section('content')
    <h2> Create New Student </h2>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="registration_id">Registration</label>
            <input type="number" class="form-control" placeholder="Enter Registration number" id="registration_id" name="registration_id">
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" placeholder="Enter Department" id="department" name="department">
        </div>

         <div class="form-group">
            <label for="info">Info</label>
            <br>
            <textarea name="info" id="info" rows="5" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection