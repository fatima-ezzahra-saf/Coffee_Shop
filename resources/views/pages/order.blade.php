@extends('layouts.master2')
@section('title')
    Order
@endsection
@section('content')
<br>
<div class="heading2">All <span>Orders</span></div>
<form style="text-align:center" action="{{url('search')}}" method="GET">
    @csrf
    <input type="text" placeholder="search" name="search">
    <input type="submit" name="ok" style="background-color:rgb(225, 90, 205);height:38px;border:1px solide;">
</form>
<br><br>
        <table  class="centers">
            <tr>
                <th class="th_deg">User name</th>
                <th class="th_deg">User email</th>
                <th class="th_deg">Product name</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Payment status</th>
                <th class="th_deg">Delivery status</th>
                <th class="th_deg">Date</th>
                <th class="th_deg">Delivery</th>
                <th class="th_deg">Send Mail</th>
            </tr>
            @foreach ($orders as $order)
            <tr>
                <td>{{$order->user_name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->prd_name}}</td>
                <td>{{$order->quantite}}</td>
                <td>{{$order->prd_price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>{{$order->created_at}}</td>
                @if($order->delivery_status=="ongoing")
                <td><a href="{{url('deliver',$order->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure that this product has been livred !?')">DELIVERED</a></td>
                @else
                <td style="color:rgb(71, 220, 198)">DELIVERED</td>
                @endif
                <td><a href="{{url('mail',$order->id)}}" class="btn btn-warning">Send</a></td>
            </tr>
            @endforeach
        </table>
@endsection