<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color:#696969;">

  <div class="bg-dark py-3">
    <h2 class="text-white text-center" >Simple Laravel V_11 CRUD </h2>
  </div>

  <div class="container">
    <!--this is Back button-->
    <div class="row justify-content-center mt-4">
      <div class="col-md-10 d-flex justify-content-end">
        <a href="{{route('stinfo.index')}}"class="btn btn-black text-white bg-black">BACK</a>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-10">
        <div class="card borde-0 shadow-lg my-0">
          <div class="card-header bg-dark">
            <h3 class="text-white bg-dark py-3 text-center">ADD NEW STUDENT</h3>
          </div>
          <form action="{{ route('stinfo.store') }}" method="post">
            @csrf
          <div class="card-body bg-dark">

            <div class="md-3">
              <label for="" class="form-label h4 text-white my-3">Name</label>
              <input type="text" value="{{ old('sname') }}" style="width: 350px;" class="@error('sname') is-invalid @enderror form-control from-control-lg" placehoder="Name" name="sname">
              @error('sname')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>

            <div class="md-3">
              <label for="" class="form-label h4 text-white my-3">Exam Roll No.</label>
              <input type="number" value="{{ old('sroll') }}" style="width: 250px;" class="form-control from-control-lg" placehoder="RollNo." name="sroll">
            </div>

            <div class="md-3">
              <label for="" class="@error('sclass') is-invalid @enderror form-label h4 text-white my-3">Class</label>
              <input type="number" value="{{ old('sclass') }}" style="width: 250px;" class="form-control from-control-lg" placehoder="Class" name="sclass">
              @error('sclass')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>

            <div class="md-3">
              <label for="" class="form-label h4 text-white my-3">Program</label>
              <input type="text" value="{{ old('sprg') }}" style="width: 250px;" class="form-control from-control-lg" placehoder="Program" name="sprg">
            </div>

            <div class="md-3">
              <label for="" class="form-label h4 text-white my-3">PP SIZE PHOTO</label>
              <input type="file" style="width: 450px;" class="form-control from-control-lg" placehoder="Upload your photo" name="img">
            </div>

            <div class="d-grid justify-content-end">
              <button class="btn btn-lg btn-primary my-5">SUBMIT</button>
            </div>
          </div>
          </from>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>