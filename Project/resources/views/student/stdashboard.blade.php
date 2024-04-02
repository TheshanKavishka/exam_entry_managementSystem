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
    <button type=" button" class="btn btn-outline-dark me-3"><i class="bi bi-house-door-fill"  style="color: #fff"></i></button>
    <a class="navbar-brand mx-5" href="#" style="color: #fff">
    {{Auth::user()->name}} (Student)
  </a>
  <div class=" d-flex justify-content-center">

      {{-- <button type=" button" class="btn btn-outline-dark me-3"><a href="download.php" style="color:rgb(255, 255, 255);text-decoration:none" ;>REPORT</a><i class="bi bi-box-arrow-down ms-2" style="color: #fff"></i></button> --}}
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

  <img src="{{asset('asset/image1.jpg')}}" width="100%" height="500px">

  <!-- new table start -->

  <div class="container">

    <form action="{{ route('student.store')}}" method="post" enctype="multipart/form-data">
    <!-- new -->
  <div class="row">

    @csrf
  <div class="col-sm-4">
    <div class="card my-4">
      <div class="card-body cd">
        <h5 class="card-title">Year</h5>
        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

        <select class="form-select" name="year" required aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">First year</option>
            <option value="2">Second year</option>
            <option value="3">Third year</option>
            <option value="4">Fourth year</option>
          </select>
      </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="card my-4">
      <div class="card-body cd">
        <h5 class="card-title">Semester</h5>
        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         --}}
         <select class="form-select" name="sem" required aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">First semester</option>
            <option value="2">Second semester</option>

          </select>


      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card my-4">
      <div class="card-body cd">
        <h5 class="card-title">General/Special</h5>
        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

        <select class="form-select" name="gs" required aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="gen">General</option>
            <option value="spec">Special</option>

          </select>


      </div>
    </div>
  </div>
  <div style="text-align: center">
     <button type="submit" class="btn btn-info" style="width: 200px">Select the courses</button>
  </div>
 
</form>
</div>
<br>
<p>Select the Year, Semester and General/Special and click on "select the courses" button to display the courses that you are currently following. 
  If the courses are correct Select the options infront of each course. Then go to the Fill Exam Entry form.
</p>

<!-- new end -->

<div class="mt-5">
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
        <th></th>

      </tr>
    </thead>

    @foreach ($courses as $c)
      <tr>
        <td>{{ $c->coursecode }}</td>
        <td>{{ $c->coursename }}</td>
        <td><div class="form-check form-switch">
            <input class="form-check-input " type="checkbox" onchange="coursearr({{$c->id}})" id="">

          </div>
        </td>



      </tr>
      @endforeach

  </table>
</div>

  <div class="row" >
  <div class="col-sm-6">
    <div class="card my-4 text-white h-300" style="background-color: #90EE90">
      <div class="card-body">

        {{-- signature upload start --}}
        <div class="container col-md-6">
            <form action="{{route('lecture.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="mb">
                <label for="Image" class="form-label" style="color: black; font-size: 14.5px">Upload Signature Here</label>
                <input class="form-control" type="file" id="formFile" name="image" onchange="preview()">
                <button type="submit" class="btn btn-primary mt-3" style="background-color: #0dcaf0; color:black">Submit</button>
            </div>
            </form>
            <img id="frame" src="" class="img-fluid" />
        </div>

        <script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
        </script>

 {{-- signeture upload end --}}


      </div>
    </div>
  </div>


  <div class="col-sm-6">
  <div class="card my-4 text-white h-300"style="background-color: #90EE90" >
      <div class="card-body">
        <h5 class="card-title" style="color: black; font-size: 24px">Notice  </h5>
        <form action="{{route('exam.show', '1')}}" method="get">
            @csrf
            <input type="hidden" name="ccode[]" value="" id="ccode">
            <button type="submit" class="btn btn-info">Fill Exam Entry Form</button>
        </form>
        {{-- <a href="{{route('examentryform')}}" class="link-primary">Fill Exam Entry Form</a> --}}
        <br>
        <br>
        <h6  style="color: rgb(255, 0, 0)">Due Date : 30/04/2023</h6>

      </div>
    </div>
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


<div class="foo mt-4">
<footer class="bg-light text-center text-lg-start mt-5">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright : University Of Vavuniya
     
    </div>
    <!-- Copyright -->
  </footer>
</div>

<script>
    let courseid = [];

    function coursearr(id){
        courseid.push(id);

        console.log('====================================');
        console.log(courseid);
        console.log('====================================');

        document.getElementById("ccode").value = courseid;

    }
</script>


</body>

</html>

@endif
@else
<script>
  window.location.replace("login");
</script>
@endauth







