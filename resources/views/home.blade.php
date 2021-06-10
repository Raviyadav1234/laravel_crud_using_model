<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Crud Operation</h2>
    <nav class="nav">
        <a href="{{ route('show')}}" class="nav-item">Add Student</a>
    </nav>
    <hr>
    </div>

<div class="container mt-5">
    <div class="row">
        @if(session()->has('status'))
          <div class="alert alert-success">
          {{session('status')}}
           </div>
           @elseif(session()->has('delete_status'))
            <div class="alert alert-danger">
          {{session('delete_status')}}
           </div>
            @endif

            <table class="table table-hover text-center">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Password</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                @foreach($students as $stu)
                  <tr>
                      <td>{{$stu->id}}</td>
                      <td>{{$stu->name}}</td>
                      <td>{{$stu->email}}</td>
                      <td>{{$stu->mobile}}</td>
                      <td>{{$stu->password}}</td>
                      <td>
                          <a href="{{ url('/edit',$stu->id)}}" class="btn btn-info">Edit</a>
                          <a href="{{ url('/delete',$stu->id)}}" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>
                  @endforeach 
              </tbody>  
            </table>
        
    </div>
    
</div>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>