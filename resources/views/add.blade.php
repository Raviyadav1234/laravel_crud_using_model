<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            @if(session()->has('status'))
          <div class="alert alert-success">
          {{session('status')}}
           </div>
            @endif
            <form action="" method="POST">
                @csrf
             <div class="mb-3">
                 <label for="name" class="form-lable">Name</label>
                 <input type="text" name="name" id="name" class="form-control">
                  @error('name')
              {{$message}}
               @enderror
             </div>

             <div class="mb-3">
                 <label for="email" class="form-lable">Email</label>
                 <input type="email" name="email" id="email" class="form-control">
                  @error('email')
              {{$message}}
               @enderror
             </div>

             <div class="mb-3">
                 <label for="mobile" class="form-lable">Mobile</label>
                 <input type="text" name="mobile" id="mobile" class="form-control">
                  @error('mobile')
              {{$message}}
               @enderror
             </div>

             <div class="mb-3">
                 <label for="password" class="form-lable">Password</label>
                 <input type="text" name="password" id="password" class="form-control">
                  @error('password')
              {{$message}}
               @enderror
             </div>

              <div>
                 
                 <button class="btn btn-info" type="submit">Submit</button>
             </div>                
            </form>
        </div>
        
    </div>
    
</div>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>