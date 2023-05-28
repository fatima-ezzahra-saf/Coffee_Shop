@extends('layouts.master2')
@section('title')
    Users
@endsection
@section('content')
<section class="menu" id="menu">
    <div class="container">
        <div class="heading3">Users</div>
    </div>
    <div class="container" id="container2">
      <div class="row">
        <table  class="centers">
            <tr>
                <th class="th_deg">User name</th>
                <th class="th_deg">User email</th>
                <th class="th_deg">verification date</th>
                <th class="th_deg">created</th>
                <th class="th_deg">updated</th>
                <th class="th_deg">Delete</th>
            </tr>
            @foreach ($users as $user)
            @if($user->usertype == 0)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->email_verified_at}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td><a href="{{url('user',$user->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endif
            @endforeach
        </table>
 </div>
</div>
  </section>
@endsection