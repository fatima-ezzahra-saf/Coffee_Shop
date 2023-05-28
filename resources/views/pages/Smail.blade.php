<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        #navbar{
  background-color: #b2744c;
  font-family: 'Roboto', sans-serif;
}
#logo img{
  border-radius: 10px;
  width: 160px;
  margin-left: 40px;
}
#pannier img{
    border-radius: 10px;
    width: 40px;
    margin-left: 40px;
  }
.navbar-nav{
  margin-left: 50px;
}
.nav-item .nav-link{
  color: black;
  margin-left: 10px;
  font-weight: bold;
  transition: 0.5s;
}
.nav-item .nav-link:hover{
  background: #f7f5f2;
  border-radius: 5px;
  color: black;
}
#navbar form button{
  background: black;
  color: white;
  border: 1px solid white;
}
#logout{
    height: 5px;
    width: 0px;
}
body{
    background-color: rgba(157, 114, 6, 0.149);
}
      </style>
</head>
<body>
      <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="logo"><img src="../images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{URL::to('/add')}}">Add product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/edit')}}">update product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/order')}}">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/feed')}}">Feedback</a>
          </li>
          @if(Route::has('login'))
          @auth
          <li class="nav-item" id="logout">
            <x-app-layout>
            </x-app-layout>
          </li>
          @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>
    <br>
<div class="heading2" style="font-size: 30px;text-align:center;color:rgb(215, 154, 12)">Send Mail to {{$order->email}}</div>
<br>
<form action="{{url('send_email',$order->id)}}" method="POST" style="text-align: center">
    @csrf
    <label style="font-size:25px">greeting</label>
    <br>
    <input type="text" name="greeting" style="width: 500px">
    <br>
    <label style="font-size:25px">first line</label>
    <br>
    <input type="text" name="firstline" style="width: 500px">
    <br>
    <label style="font-size:25px">body</label>
    <br>
    <input type="text" name="body" style="width: 500px">
    <br>
    <label style="font-size:25px">Button Name</label>
    <br>
    <input type="text" name="button" style="width: 500px">
    <br>
    <label style="font-size:25px">Email Url</label>
    <br>
    <input type="text" name="url" style="width: 500px">
    <br>
    <label style="font-size:25px">last line</label>
    <br>
    <input type="text" name="lastline" style="width: 500px">
    <br>
    <input type="submit" class="btn btn-primary" style="background-color:blue" value="send">
    
</form>

</body>
</html>
