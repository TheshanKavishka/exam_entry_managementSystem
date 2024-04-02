@auth
@if (Auth::user()->role != 5)
{{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
<script>
  window.location.replace("login");
</script>
@else


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="style2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>DataTable</title>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
 <style>

   .cd{
    margin-left: 10%;
   }
   .custom{
            background-color: #2B022C;
            color: #fff;
        }

  </style>
</head>


<body style="background-color: rgb(255, 255, 255)" class="mr-3">
  <nav class="navbar navbar custom">
    <a class="btn btn-outline-dark me-3" href="{{route('stdashboard')}}"  ><i class="bi bi-arrow-return-left" style="color: #fff"></i></a>
    <a class="navbar-brand mx-5" href="" style="color: #fff">
    {{Auth::user()->name}} (Student)
  </a>
  <div class=" d-flex justify-content-center">
      <button type=" button" class="btn btn-outline-dark me-3" id="download-button" style="color:white;">REPORT<i class="bi bi-box-arrow-down ms-2" style="color: #fff"></i></button>
      <button type=" button" class="btn btn-outline-dark me-3"><i class="bi bi-gear"  style="color: #fff"></i></button>
      <!-- Authentication -->
      <form method="POST" action="{{ route('logout') }}" x-data class="m-3">
        @csrf

        {{-- <a href="{{ route('logout') }}"
                 @click.prevent="$root.submit();" class="btn btn-info" >
            {{ __('Log Out') }}
      </a> --}}
      <button type="submit" class="btn btn-info"> logout</button>
    </form>
      </div>
  </nav>


  <!-- new table start -->

  <div class="container" id="content">

<div class="row">

    <div class="col-lg-6 col-sm-12">

    @foreach($students as $s)

        <form class="row g-3 m-5" action="{{route('exam.store')}}" method="post">
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Index No</label>
              <input type="text" class="form-control" name="regno" value="{{$s->regno}}" id="inputEmail4">
            </div>

            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Faculty</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select</option>
                <option value="{{$s->faculty}}">{{$s->faculty}}</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-12">
              <label for="inputAddress" class="form-label">Name Of Examination</label>
              <select class="form-select" name="examname" aria-label="Default select example">
                <option selected>Select</option>
                <option value="mid">MID semester</option>
                <option value="end">END semester</option>

              </select>
            </div>


            <form class="row g-3 m-5">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Year</label>
                    <select class="form-select" name="examyear" aria-label="Default select example">
                      <option selected value="{{$s->year}}">{{$s->year}}</option>
                      <option value="1">First Year</option>
                      <option value="2">Second Year</option>
                      <option value="3">Third Year</option>
                    </select>
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Semester</label>
                  <select class="form-select" name="examsem" aria-label="Default select example">
                    <option selected value="{{$s->semester}}">{{$s->semester}}</option>
                    <option value="1">First Semester</option>
                    <option value="2">Second Semester</option>

                  </select>
                </div>





            {{-- <div class="col-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Mr</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Mrs</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Miss</label>
                  </div>
            </div> --}}


            <div class="col-12">
              <label for="inputEmail4" class="form-label">Name With Initial</label>
              <input type="text" class="form-control" value="{{$s->name}}" id="inputEmail4">
            </div>

            {{-- <div class="col-12">
                <label for="inputEmail4" class="form-label">Name Denoted With Initial</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div> --}}


              {{-- <div class="col-12">
                <label for="inputEmail4" class="form-label">Registration No</label>
                <input type="email" class="form-control"  id="inputEmail4">
              </div> --}}

              @php
                $cid = implode(', ', $ccode);
              @endphp

              <input type="hidden" name="cid" value="{{$cid}}">

              <div class="col-12">
                <label for="inputEmail4" class="form-label">Address</label>
                <input type="text" class="form-control" value="{{$s->address}}" id="inputEmail4">
              </div>


            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        @endforeach

    </div>





<!-- new end -->
<div class="col-lg-6 col-sm-12">
<div class="mt-5"">
  <h2 class=" text-center text-white" style="font-size: 2rem; text-align: center; color: #fff">
    Available Courses
    </h2>
  </div>

<div class="text-white mb-5">
    <table id="example" class="table" style="width:100%;color:rgb(0, 0, 0)" border="1px"">
    <thead>
      <tr>
        <th>Course Code</th>
        <th>Course Name</th>
      </tr>
    </thead>

    @foreach($ccode as $code)

        @foreach($course as $c)

            @if($c->id == $code)
                <tr>
                    <td>{{$c->coursecode}}</td>
                    <td>{{$c->coursename}}</td>
                </tr>
            @endif
        @endforeach
    @endforeach
  </table>
</div>

<h6 class="mt-5 mb-4" style="color: rgb(255, 0, 0)">Note:</h6>
<ul>
    <li><h6 class=" mb-4" style="color: rgb(19, 19, 19)"> Examination entry form for candidate </h6>
    </li>
    <li><h6 class=" mb-4" style="color: rgb(19, 19, 19)"> Please fill out all required fields.</h6>
    </li>
</ul>


</div>


</div>

  </div>
  <!-- new table end -->
  <script src=" https://code.jquery.com/jquery-3.5.1.js">
  </script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

<script>
    const button = document.getElementById('download-button');

    function generatePDF() {
        // Choose the element that your content will be rendered to.
        const element = document.getElementById('content');
        // Choose the element and save the PDF for your user.
        html2pdf().from(element).save();
    }

    button.addEventListener('click', generatePDF);
</script>


<div class="foo mt-4">
<footer class="bg-light text-center text-lg-start mt-5">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright : University Of Vavuniya
    </div>
    <!-- Copyright -->
  </footer>
</div>


</body>

</html>

@endif
@else
<script>
  window.location.replace("login");
</script>
@endauth







