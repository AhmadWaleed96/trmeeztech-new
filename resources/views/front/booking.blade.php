@extends('front.master')

@section('title', 'Booking -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>Booking</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
  <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section title-page -->

<!-- start section consultation -->
<section class="consultation">
  <div class="form-consultation">
      <div class="title">
          <h1>Get a free consultation</h1>
              <div class="img-consultation">
                  <img class="back-consultation" src="{{ asset('front/image/Group 11042.png') }}" alt="">
                  <img class="image-consultation" src="{{ asset('front/image/image 13.png') }}" alt="">
              </div>
      </div>
      <div class="title">
          <div class="paragraph" style="width: 70%; margin: 0;">
              <p class="text-start">The key to being a brand that not only makes a good impression, but also</p>
          </div>
      </div>
      <form action="">
          <input type="text" name="" placeholder="Name">
          <input type="text" name="" placeholder="Phone">
          <input type="text" name="" placeholder="Email">
          <input type="text" name="" placeholder="Service">
          <input type="text" name="" placeholder="Message" style="height: 50px;">
          <div class="bb">
              <button class="btn-consultation">Done</button>
          </div>
      </form>
  </div>

</section>
<!-- end section consultation -->

@endsection
