@extends('master')

@section('content')
<h2> Create New Student </h2>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('store') }}" method="post" data-parsley-validate>
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="registration_id">Registration</label>
        <input type="number" class="form-control" placeholder="Enter Registration number" id="registration_id" name="registration_id" required>
    </div>

    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" class="form-control" placeholder="Enter Department" id="department" name="department" required>
    </div>

    <div class="form-group">
        <label for="info">Info</label>
        <br>
        <textarea name="info" id="info" rows="5" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
