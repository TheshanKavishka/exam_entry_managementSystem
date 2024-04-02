@auth
@if (Auth::user()->role != 1)
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
    <a class="btn btn-outline-dark me-3" href="{{route('drdashboard')}}"  ><i class="bi bi-arrow-return-left" style="color: #fff"></i></a>
    <a class="navbar-brand mx-5" href="#" style="color: #fff">
    {{Auth::user()->name}} (DR)
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


  {{-- content start --}}

      <div class="c3 m-5">
        <h5>Course code: {{$course[0]->coursecode}}</h5>
        <h5>Course name: {{$course[0]->coursename}}</h5>
      </div>

  <div class="text-white mb-5 m-5">

      <table id="example" class="table" style="width:100%;color:rgb(0, 0, 0)" border="1px"">
      <thead>
        <tr>
          <th>Student reg no</th>
          <th>Lecture recommendation</th>
          <th>Hod recommendation</th>
          <th>Dean approval</th>
          <th>Approve</th>
        </tr>
      </thead>

      @foreach ($exam as $e)
        <tr>
          <td>{{$e->examcid}}</td>
          <td>@if ($e->lech == '1')
            True
        @else
            False
        @endif</td>
          <td>@if ($e->hodch == '1')
            True
        @else
            False
        @endif</td>
          <td>@if ($e->deanch == '1')
            True
        @else
            False
        @endif</td>
          <td><div class="form-check form-switch">
              <input class="form-check-input " onclick="coursearr({{$e->id}})" type="checkbox" id="">
            </div>

          </td>
        </tr>
        @endforeach

    </table>

    <form action="{{route('dr.update','1')}}" method="post" id="dataform">
        @method('PUT')
        @csrf
        <input type="hidden" name="data[]" value="" id="data">
    </form>

    <button type="submit" class="btn btn-info mt-3" onclick="submitdata()" style="margin-left:95%;">Submit</button>
  </div>


  {{-- content end --}}



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

    }

    function submitdata() {
        document.getElementById('data').value = courseid;
        document.getElementById('dataform').submit();
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







