@extends('layouts.master')
@section('title')
    About
@endsection
@section('content')
    <!-- about section -->
<div class="about" id="about">
    <div class="container">
    <div class="heading">About <span>Us</span></div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <img src="./images/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <h3>What Makes Our Coffee Special?</h3>
          <p>We are proud to say that our coffee shop is the perfect place for all coffee lovers. We have a team of passionate and experienced baristas who prepare each cup of coffee with care and expertise. We only use the highest quality coffee beans, which are freshly roasted and carefully selected for their unique flavor and character.... 
           </p>
           <a href="{{ url('/infos') }}"><button id="about-btn">Learn More</button></a>

        </div>
      </div>
    </div>
  </div>
  <!-- about section -->
    
@endsection