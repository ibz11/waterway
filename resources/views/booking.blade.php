<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="driver/assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    
    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Booking dashboard</title>
    <link rel="icon" type="image/x-icon" href="driver/assets/images/favicon.png">
</head>
<body>
    <!--NAvbar-->
    <nav class="navbar navbar-expand-lg  text-dark navbar-dark bg-secondary">
        <div class="container-fluid">

        <a class="navbar-brand" style="font-weight:800;" href="#"><i><span style="color:black;">Wa</span>te<span style="color:red;">r</span>W<span style="color:green;">ay</span></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li  style="font-weight:900;"class="  nav-item text-white ">
            <h2 class="badge bg-danger mt-4">Therapist DASHBOARD</h2>
          </li>
            <li class="nav-item ">
            
              @if (Route::has('login'))
            
                    @auth
                   <x-app-layout></x-app-layout >    
                    @else
                    <li style="margin-left:20px;" class="nav-item pt-2 ">
                <a href="{{ route('login') }}" style="text-decoration:none;" class=" badge bg-info" role="button">Login</a>
              
              </li>

                        @if (Route::has('register'))
                        <li style="margin-left:20px;" class="nav-item pt-2 ">
                <a href="{{ route('register') }}" style="text-decoration:none;" class=" badge bg-primary" role="button">Register</a>
              
              </li>
                        @endif
                    @endauth
</li>
            @endif
            </div>
        </div>
        </nav>



<h1 style="font-weight:600;font-size:40px;"class="text-center pt-3">Book Appointment</h1>
@if (session()->has('message'))
   <div class=" pt-2 alert alert-primary">
   {{session()->get('message')}}
   <a  type="button" class="close" data-dismiss="alert"> x </a>
</div>
@endif



<form  action="{{url('booking',$event->id)}}"enctype="multipart/form-data" method="POST">
  @csrf

<div class="content ml-5">

<div class="pt-5">
<h2 class="text-secondary">Note: Your  names will be auto-filled for you.</h2>

</div>
<div class="pt-5">
<label  class="w-75 text-white bg-info form-control">ID</label>
<input readonly name="therapist_id" class="w-75  pt-2 form-control" type="text" value="{{$event->user_id}}">
</div>
<div class="pt-5">
<label  class="w-75 text-white bg-info form-control">Full name</label>
<input readonly name="therapist_name" class="w-75  pt-2 form-control"type="text" value="{{$event->full_name}}">
</div>
<div class="pt-5">
<label  class="w-75 text-white bg-info form-control">Select Date</label>
<input readonly name="date"class="w-75  pt-2 form-control"type="date" value="{{$event->date}}">
</div>

<div class="pt-4">
<label  class="w-75 text-white bg-info form-control">Time starts</label>
<input readonly  name="time_begin"class="w-75  form-control"type="time"value="{{$event->time_begin}}">

<div class="pt-4">
<label   class="w-75 text-white bg-info  form-control">Time ends</label>
<input readonly name="time_end"class="w-75 form-control"type="time"value="{{$event->time_end}}"></input>
</div>
<div class="pt-4">
<button class="btn btn-primary text-info" style=" font-weight:600;font-size:25px;"  type="submit">Confirm</button>
</div>
<form  action="{{url('confirm',$event->id)}}"enctype="multipart/form-data" method="POST">
  @csrf
<div class="pt-4">
<button class="btn btn-danger text-danger" style=";font-weight:600;font-size:25px;"  type="submit">Confirm</button>
</div>
</form>
</div>

</form>
</body>
</html>