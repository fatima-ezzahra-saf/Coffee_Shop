@extends('layouts.master2')
@section('title')
    Add product
@endsection
@section('content')
@if (Session::has('success'))
    <div class='alert alert-success'>
        {{Session::get('success')}}
        {{Session::put('success',null)}}
    </div>
@endif
<div class="container">
    <div class="row">
      <div class="col-md-6">
<form action="{{url('/save')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label style="font-size: 20px;">type</label>
    <div style="text-align: center">
        <select name="product_type" class="form-control" required >
            <option>HOT</option>
            <option>COLD</option>
        </select>
    </div>    
    </div>
    <div class="form-group">
        <label style="font-size: 20px;">product name</label>
        <input type="text" name="product_name" class="form-control" required >
    </div>
    <div class="form-group">
        <label style="font-size: 20px;">product price</label>
        <input type="text" name="product_price" class="form-control" required >
    </div>
    <div class="form-group">
        <label style="font-size: 20px;">product description</label>
        <textarea name="product_desc" class="form-control" required ></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 20px;">product image</label>
        <input type="file" name="product_img" class="form-control" required > 
    </div>
    <button style="height: 50px; width: 100px;color:rgba(6, 3, 9, 0.9);background-color:rgb(189, 120, 10);">ADD</button>
  </form>
</div>
<div class="col-md-6">
    <img src="./images/hotd.jpg" style="height:400px;width:450px">
</div>
</div>
</div>
@include('include.footer')
@endsection