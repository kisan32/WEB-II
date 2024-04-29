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
    <h2 class="text-white text-center">Simple Laravel V_11 CRUD </h2>
  </div>

  <div class="container">
    <!--this is Addnew button-->
    <div class="row justify-content-center mt-4">
      <div class="col-md-12 d-flex justify-content-end">
        <a href="{{route('stinfo.Add')}}"class="btn btn-black text-white bg-black">ADD NEW STUDENT</a>
      </div>
    </div>
    <!--we added Addnew button-->

    <div class="row justify-content-center ">
      <div class="col-md-12">
        <div class="card borde-4 shadow-lg ">
          <div class="card-header bg-dark">
          <h4 class="text-white bg-dark text-center">
            @if(Session::has('Success'))
           <div class="col-md-5">
            {{Session::get('Success')}}
           </div>
          </h4>
           @else
            <h4 class="text-white bg-dark text-center">STUDENT DATA</h4>
            @endif  
          </div>
        </div>
      </div>
    </div>
    <div class="card-body bg-dark">
              <table class="table text-white">
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Exam Roll No.</th>
                  <th>Year</th>
                  <th>Program</th>
                  <th>Submitted At</th>
                  <th>ACTIONS</th>
                  <th></th>
                </tr>
                @if($student->isNotEmpty())
                @foreach ($student as $student)
                  <tr>
                    <td>{{$student->id}}</td>
                    <td>
                        @if($student->img!="")
                        <img width="50" src="{{asset('Uploads/Images/').$student->img}}">
                        @endif
                    </td>
                    <td>{{$student->sname}}</td>
                    <td>{{$student->roll}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->program}}</td>
                    <td>{{\Carbon\Carbon::parse($student->created_at)->format('d,M,Y')}}</td>
                    <td>
                      <a href="#" class="btn btn-dark">UPDATE</a>
                      <a href="#" class="btn btn-danger">DELETE</a>
                    </td>
                  </tr>
                @endforeach  
                @endif
              </table>

            </div>
  </div>
  </body>
</html>