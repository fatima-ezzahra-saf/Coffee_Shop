@extends('layouts.master2')
@section('title')
    Feedback
@endsection
@section('content')
<section class="menu" id="menu">
    <div class="container">
        <div class="heading3">Feedback</div>
    </div>
    <div class="container" id="container2">
      <div class="row">
        <table  class="centers">
          <tr>
              <th class="th_deg">User name</th>
              <th class="th_deg">User email</th>
              <th class="th_deg">verification date</th>
              <th class="th_deg">created</th>
              <th class="th_deg">Delete</th>
          </tr>
          @foreach ($feedback as $feedback)
          <tr>
              <td>{{$feedback->name}}</td>
              <td>{{$feedback->email}}</td>
              <td>{{$feedback->message}}</td>
              <td>{{$feedback->created_at}}</td>
              <td><a href="{{url('feed',$feedback->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
      </table>
      </div>
    </div>
    <br><br><br>
    <div class="container">
      <div class="heading3">Comments</div>
  </div>
  <div class="container" id="container2">
    <div class="row">
      <table  class="centers">
        <tr>
            <th class="th_deg">User name</th>
            <th class="th_deg">User comment</th>
            <th class="th_deg">created</th>
            <th class="th_deg">Delete</th>
        </tr>
        @foreach ($comments as $comment)
        <tr>
            <td>{{$comment->name}}</td>
            <td>{{$comment->comment}}</td>
            <td>{{$comment->created_at}}</td>
            <td><a href="{{url('com',$comment->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>
  </div>
  <br><br><br>
  <div class="container">
    <div class="heading3">Reply</div>
</div>
<div class="container" id="container2">
  <div class="row">
    <table  class="centers">
      <tr>
          <th class="th_deg">User name</th>
          <th class="th_deg">User Reply</th>
          <th class="th_deg">created</th>
          <th class="th_deg">Delete</th>
      </tr>
      @foreach ($replys as $reply)
      <tr>
          <td>{{$reply->name}}</td>
          <td>{{$reply->reply}}</td>
          <td>{{$reply->created_at}}</td>
          <td><a href="{{url('rep',$reply->id)}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
  </table>
  </div>
</div>
  </section>
@endsection