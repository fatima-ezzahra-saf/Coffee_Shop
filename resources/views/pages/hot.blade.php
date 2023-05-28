@extends('layouts.master')
@section('title')
    Hot
@endsection
@section('content')
<section class="menu" id="menu">
  <div class="container">
      <div class="heading3">Menu</div>
      <br>
        <form action="{{url('search_prd1')}}" method="GET" style="text-align:center">
          <input type="text" placeholder="search" name="search">
          <input type="submit" value="search" style="background-color:rgba(63, 23, 1, 0.553);height:28px;border:1px solide;">
        </form>
  </div>
  <div class="container" id="container2">
    <div class="row">
      @foreach ($products as $product)
        @if($product->id_cat == 1)
          <div class="col-md-3 py-3 py-md-0">
           <div class="card">
            <img src="./images/{{$product->image}}" alt="{{$product->description}}" class="ma">
             <div class="card-body">
              <div class="star text-center">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>{{$product->name}}</h3>
              <h6>{{$product->description}}</h6>
              <p>{{$product->price}}DH
              <div>
              <form action="{{url('add_cart',$product->id)}}" method="POST">
                @csrf
                <input type="number" name="quantity" value="1" min="1" max="10" style="background-color:#b2744c;width:200px">
                <button type="submit">ADD TO CART</button></p>
              </form>
             </div>
            </div>
           </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endsection