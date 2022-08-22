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
        <div>
          <input  class="mt-4" type="search" placeholder="search user"></input> <a href=""class=" mt-2 btn btn-success">Search</a>
        <a href=""class=" mt-2 btn btn-danger">Download pdf</a> 
        <a href="{{URL('createuser')}}"class=" mt-2 btn btn-info">Create User</a> 
          
</div>
@if (session()->has('message'))
   <div class=" pt-2 alert alert-warning">
   {{session()->get('message')}}
   <a  type="button" class="close" data-dismiss="alert"> x </a>
</div>
@endif
      <table   style="margin-top:30px;"class="table mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <form action="" method="">
    @csrf
    @foreach($users as  $users)
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->role}}</td>
      <td>{{$users->email}}</td>
      <td><a href=""class="btn btn-outline-success">UPDATE</a></td>
      <td><a href="{{URL('deleteuser',$users->id)}}"class="btn btn-outline-danger">DELETE</a></td>
        
    

</tr>
@endforeach
</form>
</tbody>
</table>
        
      </div>
         
</body>
</html>