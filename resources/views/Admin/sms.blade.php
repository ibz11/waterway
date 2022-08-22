<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="admin/assets/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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

      <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Add Phone Number
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Enter Phone Number</label>
             <input type="tel" class="form-control" placeholder="Enter Phone Number">
                                </div>
                  <button type="submit" class="btn btn-primary">Register User</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Send SMS message
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Select users to notify</label>
                                    <select multiple class="form-control">
                                        @foreach ($user as $user)
                                        <option>{{$user->name}} - {{$user->number}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <form action="" method="POST">
                                    @csrf
                                <label>Enter Phone Number</label>
             <input type="tel" class="form-control" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Notification Message</label>
                                 <textarea class="form-control" rows="3"></textarea>
                                </div>
             <button type="submit" class="text-dark btn btn-primary">Send Notification</button>
                            </form>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</div>