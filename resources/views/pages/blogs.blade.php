@extends('layouts.master')
@section('title')
    Blogs
@endsection
@section('content')
    <!-- blogs -->
   <section class="blogs" id="blogs">
    <h1>Latest <span>Blogs</span></h1>

    <div class="container">

      <div class="row">

        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/b1.png" alt="">
          <div class="card-body">
            <h3> Coffee Review </h3>
            <p>If you’re interested in becoming a more informed coffee drinker, <a href="https://www.coffeereview.com/" class="hover-underline"><span style="color: rgb(233, 74, 233)">Coffee Review</span></a> is the best coffee blog to begin your journey.

              This blog, which has been running for over two decades, starts from the premise that coffee is as nuanced and complex a beverage as wine is, and deserves similarly clear and rigorous criteria for assessment.</p>
            <a href="https://www.coffeereview.com/"><button id="blogbtn">Read More.</button></a>
          </div>
        </div>  
        </div>
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/b2.png" alt="">
          <div class="card-body">
            <h3>The Coffeetographer</h3>
            <p>For webzine <a href="https://thecoffeetographer.com/" class="hover-underline"><span style="color: rgb(233, 74, 233)"> The Coffeetographer</span></a>, the culture of independent and specialty coffee serves as a source of artistic inspiration. Sections on music, art,
               fashion, film, and travel all highlight the ways coffee is integral to a broad spectrum of cultural experience.The journal offers evocative, photo-illustrated vignettes and thoughts</p>
            <a href="https://thecoffeetographer.com/"><button id="blogbtn">Read More.</button></a>
          </div>
        </div>  
        </div>
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/b3.png" alt="">
          <div class="card-body">
            <h3>Coffee Museum</h3>
            <p>Creator Benji’s infectious appreciation for coffee makes<a href="https://thecoffeeconcierge.net/" class="hover-underline"><span style="color: rgb(233, 74, 233)"> The Coffee Concierge</span></a> as fun to read as it is useful. Benji’s knowledge of craft coffee is self-taught and ongoing, which makes him a pretty engaging teacher.
              A highlight of the blog is his useful experiments, like determining the best coffee-to-water ratio.</p>
            <a href="https://thecoffeeconcierge.net/"><button id="blogbtn">Read More.</button></a>
          </div>
        </div>  
        </div>
        
      </div>

    </div>


   </section>
   <!-- blogs -->
@endsection