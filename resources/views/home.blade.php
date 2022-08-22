<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="waterway/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Waterway</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
   
</head>
<body>
    <!--NAvbar-->
    <nav class="navbar navbar-expand-lg  text-dark navbar-dark bg-secondary">
        <div class="container-fluid">

          <a class="navbar-brand" style="font-weight:800;" href="#"><i><span style="color:black;">Men</span>ta<span style="color:red;">lh</span>eal<span style="color:green;">th</span></i>KE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-light" style="font-weight:500;" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light"style="font-weight:500;" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light"style="font-weight:500;" href="#">Contact</a>
              </li>
              <!--<li class="nav-item pt-2 ">
                <a href="login.html" style="text-decoration:none;" class=" badge bg-info" role="button">Login</a>
              
              </li>
              <li style="margin-left:20px;" class="nav-item pt-2 ">
                <a href="login.html" style="text-decoration:none;" class=" badge bg-primary" role="button">Register</a>
              
              </li>-->
              <li class="nav-item">
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
            </ul>
          
            
          </div>
        </div>
        </nav>
        <div class="header-image">
            <div class="header-text">
              <h1 style="font-size:50px; color:black; font-weight:700;">Mental Health KE<span dechex="&#127472 &#127466"></span></h1>
              <p style="font-size:30px;"><i>"Where your don't have to suffer for your mental health ever again"</i></p>
              
              
            
              <a href="register.html" class="btn btn-primary" role="button">Register</a>
            </div>
          </div>  
<section id="booking" style="height:100vh; "class="bg-dark text-white pt-5">
<h1 class="text-center">Search for appointments</h1>
<form method="get" action="{{URL('search')}}">
@csrf  
<div  class="m-5 text-center bg-dark">
 
  <input name="search"class="text-dark"  type="date" ><input style="margin-left:22px;"type="submit" value="Search"class=" ml-2 btn btn-success"></button>
  
</form>
  @if (Route::has('login'))
@auth
<a style="margin-left:20px;" class="btn btn-primary"href="{{URL('redirect')}}">Refresh Page</a>
@else
  <a style="margin-left:20px;" class="btn btn-primary"href="{{URL('/')}}">Refresh Page</a>
 
@endauth           
 @endif
 </div>

<!--<div class=" ml-5 mt-4 bg-dark">-->
<table class="m-5 w-50 bg-light table table-hover">
    <thead>
      <tr>
      <th>Therapists id</th>
        <th>Date available</th>
        <th>Therapist's name</th>
        <th>Time starts</th>
        <th>Time end</th>
        <th>Book</th>
      </tr>
    </thead>
    <tbody>
    @foreach($event as $event )
     
    <tr>
    <td scope="row">{{$event->user_id}}</td>
    <td scope="row">{{$event->date}}</td>
    <td scope="row">Dr. {{$event->full_name}}</td>
    <td>{{$event->time_begin}}</td>
    <td>{{$event->time_end}}</td>
      
     <td> <a href="{{URL('booking1',$event->id)}} " style="color:blue;" type="submit" class="btn btn-primary"  >Book</a></td>
      </tr>
      </form>
     @endforeach 
     
         
             
           
    </tbody>
  </table>

</section>

<section id="Doctors"  style="height:100vh;"class="bg-secondary text-white pt-5">
<h1  style="font-size:33px;"class="text-2xl text-center">Get to know your Therapists</h1>

<div class="pt-5 text-dark">
<div class="card-group">
  @foreach($therapist as $therapist)
 
<div class="card" style="width: 10rem ;margin:20px;">
  <!--<img src="..." class="card-img-top" alt="...">-->
  <div class="card-body">
    <h5 class="card-title">Dr.{{$therapist->name}}</h5>
    <p class="card-text">{{$therapist->email}}</p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>

@endforeach
</div>
</div>



</section>
    
</body>
</html>