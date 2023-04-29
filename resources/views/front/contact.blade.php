@extends('front.master')

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>Contact us</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{asset("front/image/Vector 1.png")}}" alt="">
  <img class="interested-img interested-right" src="{{asset("front/image/Vector 2.png")}}" alt="">
</section>
<!-- end section title-page -->

<section class="contact">
  <div class="container d-flex justify-content-center">
    <div class="card d-flex flex-wrap flex-row" style="border-top: 5px solid #003366;">
      <div class="left col-12 col-sm-12 col-md-12 col-lg-6 p-5" style="background-color: #003366;">
        <h2 class="text-white">Get in touch</h2>
        <div class="cnt" style="padding: 40px 0;">
          <div class="d-flex" style="padding: 15px 0;">
              <i class="fa-solid fa-envelope" style="color: white; font-size: 60px;
              padding: 5px 10px; margin: -5px 0;"></i>
              <div>
                  <p style="color: white; font-size: 20px; margin: 0;">Mail</p>
                  <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">info@tarmeecteh.com</a>
              </div>
          </div>
          <div class="d-flex" style="padding: 15px 0;">
              <i class="fa-solid fa-mobile-screen-button" style="color: white; font-size: 60px; padding: 5px 10px; margin: -5px 0;"></i>
              <div>
                  <p style="color: white; font-size: 20px; margin: 0;">Mobile</p>
                  <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">(+966) 56 138 8363 - (+1) 307 392 4176</a>
              </div>
          </div>
          <div class="d-flex" style="padding: 15px 0;">
            <img src="image/Usa Flag.png" alt="" width="50px" height="40px" style="margin: 10px 5px;">
              <div>
                  <p style="color: white; font-size: 20px; margin: 0;">Location</p>
                  <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">4030 Plaza Dr 3 Casper, WY 82604 USA</a>
              </div>
          </div>

          <div class="d-flex" style="padding: 15px 0;">
            <img src="image/Saudi.png" alt="" width="50px" height="40px" style="margin: 10px 5px;">
            <div>
                <p style="color: white; font-size: 20px; margin: 0;">Location</p>
                <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">4030 Plaza Dr 3 Casper, WY 82604 USA</a>
            </div>
        </div>
      </div>
      </div>
      <div class="right col-12 col-sm-12 col-md-12 col-lg-6 p-5">
        <form action="">
          <div class="mb-3">
            <input type="text" class="form-control name" id="name" placeholder="name" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control phone" id="phone" placeholder="Phone" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control email" id="email" placeholder="Email" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control company-name" id="company-name" placeholder="Company name" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control inquire-about" id="inquire-about" placeholder="Inquire about" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <textarea name="" id="" placeholder="Project Summary" style="background-color: rgb(242, 249, 249);
            border: 1px solid rgb(206, 212, 218);
            border-radius: 6px;
            padding: 10px;
            width: 100%;
            height: 100px;"></textarea>
          </div>

          <button class="" style="background: #003366;box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;color: white;font-weight: 500;font-size: 20px;line-height: 37px;padding: 2px 50px;position: relative;left: 50%;transform: translate(-50%, 10px);">Send <i class="fa-solid fa-paper-plane-top"></i></button>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection
