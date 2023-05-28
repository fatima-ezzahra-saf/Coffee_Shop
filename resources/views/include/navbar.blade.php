<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="logo"><img src="./images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{URL::to('/home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/menu')}}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/gallary')}}">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/blogs')}}">Blogs</a>
          </li>
          @if(Route::has('login'))
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/blogs')}}"></a>
</li>
          <li class="nav-item" id="logout">
            <x-app-layout>
            </x-app-layout>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">register</a>
          </li>
          @endauth
          @endif
        </ul>
        <a class="navbar-brand" href="{{url('cart')}}" id="pannier"><img src="./images/pannier.png" alt=""></a>
      </div>
    </div>
    <div>
    </div>
  </nav>
  <!-- navbar -->
</body>
</html>