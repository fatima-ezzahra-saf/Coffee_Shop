<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    @include('include.navbar')
    @if(session()->has('msg'))
    <div class="alert alert-success">
        {{session()->get('msg')}}
    </div>
    @endif
    <div >
    <table class="center">
        <tr>
        <th class="th_deg">Product name</th>
        <th class="th_deg">Quantity</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Action</th>
        </tr>
        <?php $total=0; ?>
        @foreach ($panier as $panier)
        <tr>
            <td>{{$panier->prd_name}}</td>
            <td>{{$panier->quantite}}</td>
            <td>{{$panier->prd_price}}</td>
            <td><img src="./images/{{$panier->image}}"></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product?')" href="{{url('/remove_pa',$panier->id)}}">Remove</td>
        </tr>
        <?php $total+=$panier->prd_price ?>
        @endforeach
    </table>
    <br>
    <div>
        <h1 style="text-align: center">Total Price :{{$total}}DH</h1>
        <div class="credite text-center">
          <h1 style="color:crimson">  Order <a href="#"> now</a><h1>
        <a href="{{url('cash')}}" class="btn btn-danger">Cash On Delivery</a>
        <a href="{{url('stripe',$total)}}" class="btn btn-danger">Pay Using Card</a>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    @include('include.footer')
</body>
</html>