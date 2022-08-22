<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="admin/assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <!--font-awesome kit--->
    <script src="https://kit.fontawesome.com/939d8dcc72.js" crossorigin="anonymous"></script>

    <title>Admin dashboard</title>
    <link rel="icon" type="image/x-icon" href="admin/assets/images/favicon.png">
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

              <!--<a class="active" href="{{URL('redirect')}}">Dashboard</a>-->
              
                
              
              
     
            
          </div>
        </div>
        </nav>
    <div class="sidebar">
        <a  href="{{URL('redirect')}}" style="color:#FAEBD7;"class="badge bg-info ">ADMIN DASHBOARD</a>
        <a href="{{URL('users')}}">Users</a>
        <a href="{{URL('chat')}}">Chat</a>
        <a href="{{URL('sms')}}">SMS</a>
        <a href="#">Check Leaves</a>
      </div>
      
      <div class="content" style="background:#FFEBCD;">
      <div class="pt-3">
        <h1 class="text-2xl text-dark " >Welcome  <u><i>{{Auth::user()->name}}</i></u> To The  Admin Dashboard</h1>
      </div> 

      <div class="row pt-4">
          
      <div class="col-sm-3">
      <div class="card bg-primary text-white" s>
   <div class="card-body">
    <h4 class="text-xl card-title">Number of users:</h4>
   
    <h2  style="font-size:20px;"class="text-3xl card-text">{{ $user}}</h2>
   
     <a href="{{URL('users')}}"  class="text-warning card-link">Check them out</a>
    <a style="color:black;"href="{{URL('users')}}" class="card-link"> <i class="fas fa-arrow-circle-right"></i></a>
   </div>
  </div>
</div>

<div class="col-sm-3">
      <div class="card bg-success text-white" >
   <div class="card-body">
    <h4 class="text-xl card-title">Number of drivers</h4>
    <h2 style="font-size:20px;" class="text-3xl card-text">{{$therapist}}</h2>
    <a href="{{URL('users')}}" class="text-info card-link">Check them out</a>
    <a href="{{URL('users')}}" class="card-link"> <i class="fas fa-arrow-circle-right"></i></a>
   </div>
  </div>
</div>

<div class="col-sm-3">
      <div class="card bg-danger text-white" >
   <div class="card-body">
    <h4 class="text-xl card-title">Number of online users</h4>
    <h2 style="font-size:20px;" class="text-3xl card-text">{{$online}}</h2>
    <a href="{{URL('users')}}" class="text-info card-link">Check them out</a>
    <a href="{{URL('users')}}" class="card-link"> <i class="fas fa-arrow-circle-right"></i></a>
   </div>
  </div>
</div>

</div>
 </div>
         
</body>
</html>