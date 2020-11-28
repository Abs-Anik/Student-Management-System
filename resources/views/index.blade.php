<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>SMS</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container">
          <a class="navbar-brand" href="#">Student Management System</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Create</a>
              </li>
          </div>
        </div>
    </nav>

    <div class="container">
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>