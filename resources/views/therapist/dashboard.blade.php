<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="driver/assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Driver dashboard</title>
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
              <!--<li class="nav-item ">
                
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
               Log Out
                  </button>
                  
               
                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                   
                        <div class="modal-header">
                          <h4 class="modal-title">Logout...</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                   
                        <div class="modal-body">
                          Are you sure you want to log out?
                        </div>
                  
                     
                        <div class="modal-footer">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                
                            <a href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();" type="submit"style="text-decoration:none;" class=" btn btn-success" role="button">Yes</a>
                                         </form>
                                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        </div>

                  
                      </div>
                    </div>
                  </div>
              </li>
            </ul>-->
     
            
        
    <div class="sidebar">
        <a class="active" href="{{URL('redirect')}}">Dashboard</a>
        <a href="{{URL('events')}}">Create Event </a>
        
      </div>
      
      <div class="content">
      <!--<h1 class="text-2xl">Welcome  <span style="color:blue; font-size:30px;">{{Auth::user()->name}}</span> To The  Driver Dashboard</h1>-->
        
     