@extends('layouts.master2')
@section('title')
    edit
@endsection
@section('content')
<section class="menu" id="menu">
    <div class="container">
        <div class="heading3">Menu</div>
    </div>
    <div class="container" id="container2">
      <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 py-3 py-md-0">
             <div class="card">
              <img src="./images/{{$product->image}}" class="ma">
               <div class="card-body">
                <h3>{{$product->name}}</h3>
                <h6>{{$product->description}}</h6>
                <p>{{$product->price}}DH
              <a href="{{route('Produit.show',$product->id)}}" > <button type="submit">Edit</button></a> 
              <a href="{{url('/delete',$product->id)}}" > <button type="submit">delete</button></a> 
               </div>
             </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection