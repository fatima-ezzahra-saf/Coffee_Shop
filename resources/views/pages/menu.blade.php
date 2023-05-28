@extends('layouts.master')
@section('title')
   Menu
@endsection
@section('content')
   <!-- menu -->
<section class="menu" id="menu">
    <div class="container">
    <div class="heading3">Menu</div>
  </div>
    <div class="container" id="container2">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img id="i1" src="./images/ht.jpg" alt="" class="i1">
          <div class="card-body">
            <h3>Hot Coffee</h3>
            <div id="d1">  <a href="{{ url('/hot') }}"><button id="btn" >Shop Now</button></a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img id="i1" src="./images/cold.jpg" alt="" class="i1">
          <div class="card-body">
            <h3>Ice Coffee</h3>
          <div id="d1">  <a href="{{ url('/ice') }}"><button id="btn">Shop Now</button></a> </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection