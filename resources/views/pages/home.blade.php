@extends('layouts.master')
@section('title')
   Home
@endsection
@section('content')
    <!-- home section -->
   <section id="home">
    <div class="content">
      <h3>Start Your Day With a <br> Fresh Coffee</h3>
      <a href="{{ url('/menu') }}"><button id="btn">Shop Now</button></a>
    </div>
   </section>
<!-- home section -->
<br><br>
<br><br>
<p id="par">Don't hesitate!<br> order now and let yourself be enchanted by the unique flavor of your coffees!</p>
<br><br>
<br><br>
<!-- top cards -->
<section class="top-cards">
  <div class="heading2">Top <span>Categories</span></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c1.png" alt="">
          
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c2.png" alt="">
          
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/p.jpg" alt="" class="im1">
          
        </div>
      </div>
    </div>
  </div>
  
</section>
<!-- top cards -->
<!--commentaire -->
<section class="top-cards1">
  <div class="heading2">ADD A<span> Comment</span></div>
  <br><br>
       <div style="text-align: center;">
        <div>
          <form action={{url('comment')}} method="POST">
            @csrf
          <input type="text" placeholder="Your Comment" name="comment" style="width: 400px;height:38px">
          <input type="submit" value="share" class="btn btn-primary">
          </form>
        </div>
       </div> 
  </div>
  <div style="font-size:30px;color:darkred;margin-top: 20px;">All Commets</div>
  <br><br>
  <div>
    @foreach ($comments as $comment)
    <h2>{{$comment->name}}</h2>
    <p style="font-size: 20px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$comment->comment}}</p>
    <a href="javascript::void(0)" onclick="reply(this)">Reply</a>
    @foreach ($replys as $reply)
        @if ($reply->comment_id==$comment->id)
            <div style="padding-left: 3%;padding-bottom:10px">
              <h3 style="color:darkkhaki">{{$reply->name}}</h2>
              <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$reply->reply}}</p>
            </div>
        @endif
    @endforeach
    @endforeach
  </div>
  <div>
    <form action={{url('reply',$comment->id)}} method="POST" style="display: none" class="replyForm">
      @csrf
    <input type="text" placeholder="Your Reply" name="reply" style="width: 400px;height:38px">
    <input type="submit" value="Reply" class="btn btn-primary">
    <a href="javascript::void(0)"><input type="submit" value="close" class="btn btn-primary" onclick="reply_close(this)"></a>
    </form>
  </div>
  
</section>

<br><br>
<script type="text/javascript">
function reply(caller){
        $('.replyForm').insertAfter($(caller));
        $('.replyForm').show();
}
function reply_close(caller){
        $('.replyForm').hide();
}
</script>
@endsection