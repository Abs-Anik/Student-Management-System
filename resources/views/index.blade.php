@extends('master')

@section('content')
         <table class="table table-responsive table-hover">
            <tr>
              <th> # </th>
              <th> Name </th>
              <th> Registration </th>
              <th> Department </th>
              <th> info </th>
              <th> Action </th>
            </tr>
            @foreach($students as $student)
              <tr>
                <td> # </td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->registration_id }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->info }}</td>
                <td><a href="#" class="btn btn-success">Edit</a></td>
              </tr>
            @endforeach
        </table>
@endsection