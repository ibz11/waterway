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

            @endif

              
     
            
          </div>
        </div>
        </nav>
    <div class="sidebar">
        <a  href="{{URL('redirect')}}"class="badge bg-info ">ADMIN DASHBOARD</a>
        <a href="{{URL('users')}}">Users</a>
        <a href="{{URL('chat')}}">Chat</a>
        <a href="#">Approved deliveries</a>
        <a href="#">Check Leaves</a>
      </div>
      
      <div class="content">
      @if (session()->has('message'))
   <div class=" pt-2 alert alert-primary">
   {{session()->get('message')}}
   <a  type="button" class="close" data-dismiss="alert"> x </a>
</div>
@endif


<form  style="justify-content:center;"class=" mt-4 ml-5" action="{{URL('newuser')}}" method="POST" enctype="multipart/form-data">
@csrf
<h1 class="mt-3"style="font-size:40px;">CREATE NEW USER</h1>
<div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full names</label>
    <input type="text" style="width:400px" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" id="usertype" class="form-label">Usertype</label>
    
            <select id="usertype" style="width:400px"  class="block mt-1 w-full" name="usertype" >
 
                 <option value="admin" >
                     Admin
                 </option>
                 <option value="driver" >
                     Driver
                 </option>
                 <option value="supplier" >
                     Supplier
                 </option>
                 <option value="user" >
                     User
                 </option>
 </select>
             </div>

  
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" style="width:400px" name="email"class="form-control" id="email" aria-describedby="emailHelp">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" id="password" style="width:400px" name="password" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" id="password_confirmation" style="width:400px" name="password_confirmation" class="form-control" >
   
  </div>
  
  <button type="submit" class="btn btn-primary text-dark">Create</button>

</form>
</div>
</body>
</html>