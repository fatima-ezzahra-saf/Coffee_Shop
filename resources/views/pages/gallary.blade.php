@extends('layouts.master')
@section('title')
   Gallary
@endsection
@section('content')
    <!-- our gallary -->
<div class="container" id="gallary">
    <h1>Our <span>Gallary</span></h1>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/image1.png" alt="">
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/image2.png" alt="">
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/image3.png" alt="">
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/image4.png" alt="">
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/image5.png" alt="">
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/image6.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- our gallary -->
@endsection