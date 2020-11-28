@extends('master')

@section('content')
         <table class="table table-responsive-lg table-hover text-center">
            <tr>
              <th> # </th>
              <th> Name </th>
              <th> Registration </th>
              <th> Department </th>
              <th> info </th>
              <th colspan="2"> Action </th>
              <th></th>
            </tr>
            @php
              $i = 1;
            @endphp
            @foreach($students as $student)
              <tr>
                <td> {{ $i }} </td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->registration_id }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->info }}</td>
                <td><a href="{{ route('edit',$student->id) }}" class="btn btn-success">Edit</a></td>
                <td>
                  <form action="{{ route('delete',$student->id) }}" method="post">
                      @csrf
                      <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </td>
              </tr>
              @php
                $i++;
              @endphp
            @endforeach
        </table>
@endsection