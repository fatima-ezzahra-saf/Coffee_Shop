@extends('layouts.master')
@section('title')
    Contact
@endsection
@section('content')
    <!-- contact -->
@if (Session::has('success'))
    <div class='alert alert-success'>
        {{Session::get('success')}}
        {{Session::put('success',null)}}
    </div>
@endif
<section class="contact" id="contact">

    <div class="container">
      <div class="row">
        <div class="col-md-7">
         <div class="heading6">Contact <span>Us</span></div>
  
         <p style="font-size: 120%">Please fill out the form</p>
         <form action="{{url('/contact')}}" method="POST">
          @csrf
         <input class="form-control" type="text" placeholder="Name" name="user_name" aria-label="default input example"><br>
         <input class="form-control" type="email" placeholder="Email" name="user_email" aria-label="default input example"><br>
         <input class="form-control" type="text" placeholder="your message" name="user_msg" aria-label="default input example"><br>
         <button id="contact-btn" name="msg">Send Message</button>
        </form>
        </div>
        <div class="col-md-5" id="col">
          <h1>Info</h1>
          <p><i class="fa-regular fa-envelope"></i> fatimaezzahrasafrani@gmail.com</p>
          <p><i class="fa-solid fa-phone"></i> +212 654127482</p>
         <p><i class="fa-solid fa-building-columns"></i> Maroc Casablanca</p>
        </div>
      </div>
    </div>
  </section>
  <!-- contact -->
@endsection