@extends('front.master')

@section('title', 'Home -' . config('app.name'))

@section('content')

      <!-- start section hero -->
<section class="hero">

    <div class="Tarmmeez-Tach-p">
        <p class="we-are">We are <span>Tarmmeez Tach</span></p>
        <p class="paragraph-hero">Some people spend a lot of time searching for software companies specialized in creating and developing custom websites, electronic stores, designing mobile applications, or any service they wish to implement. </p>

        <div class="link-hero d-flex">
            <a class="btn btn-more" href="{{ route('index-about') }}">See more</a>
            <a class="btn btn-contact" href="{{ route('index-contact') }}">Contact Us</a>
        </div>
    </div>
    <img class="back-hero" src="{{ asset('front/image/back-hero.png') }}" alt="">
    <img class="img-hero" src="{{ asset('front/image/hero1.png') }}" alt="">
    <img class="line-hero" src="{{ asset('front/image/line-hero.png') }}" alt="">
    <img class="star-hero" src="{{ asset('front/image/star-hero.png') }}" alt="">
</section>
<!-- end section hero -->

<!-- start section How -->
<section class="how">
    <div class="title">
        <h1>How?</h1>
        <h4>We adopt the strategies in three steps</h4>
        <div class="paragraph">
            <p>The key to being a brand that not only makes a good impression, but also refuses to evaporate from the ever-volatile industry, is partnering with a  </p>
        </div>
        <img class="col-12 col-sm-12 col-md-12 col-lg-12" src="{{ asset('front/image/Design-Build-Run 1.png') }}" alt="">

        <a class="btn btn-more" href="{{ route('index-strategy') }}">See more</a>
    </div>
</section>
<!-- end section How -->

<!-- start section Services -->
<section class="services">
    <div class="title">
        <h1>Our Services</h1>
        <div class="paragraph">
            <p>The key to being a brand that not only makes a good impression, but also refuses to evaporate from the ever-volatile industry, is partnering with a  </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
          @foreach ($services as $service )
          <div class="card" style="width: 18rem;">
            <div class="card-header">
                <img src="{{asset('upload/images/service/'.$service->image)}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$service->name }}</h5>
              <p class="card-text">{{$service->description }}</p>
              <div class="con-btn">
                <a href="#" class="card-link">Read More <span><img src="{{asset('front/image/Path 8.png')}}" alt=""></span><span><img src="{{asset('front/image/Path 9.png')}}" alt=""></span></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</section>
<!-- end section Services -->

<!-- start section interested -->
<section class="interested">
    <div class="container">
        <div class="row">
            <h2>Interested to work with us ?</h2>
            <p>Get a free consultation</p>
            <a href="mailto: info@tarmeeztech.com">info@tarmeeztech.com</a>
        </div>
    </div>
    <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
    <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section interested -->

<!-- start section Featured -->
<section class="Featured">
    <div class="featured-link">
        <div class="title">
            <h1>Our Featured Work</h1>

            <div class="nav-Featured d-flex justify-content-center">
                    <li class="featured-item">
                      <a class="featured-link active" aria-current="page" href="#">Website</a>
                    </li>
                    <li class="featured-item">
                      <a class="featured-link" href="#">Application</a>
                    </li>
                    <li class="featured-item">
                      <a class="featured-link" href="">Graphic design</a>
                    </li>
            </div>
        </div>
    </div>
    <div class="Featured-cont">
        <div class="container">
            <div class="services-slider">
                <div>
                    <div class="card" style="width: 18rem;">
                                <img src="{{ asset('front/image/Imgae Place Holder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                <div>
                    <div class="card" style="width: 18rem;">
                                <img src="{{ asset('front/image/Imgae Place Holder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                <div>
                    <div class="card" style="width: 18rem;">
                                <img src="{{ asset('front/image/Imgae Place Holder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                <div>
                    <div class="card" style="width: 18rem;">
                                <img src="{{ asset('front/image/Imgae Place Holder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                <div>
                    <div class="card" style="width: 18rem;">
                                <img src="{{ asset('front/image/Imgae Place Holder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <a class="featured-btn" href="{{ route('index-business-identity') }}">See More</a>
    </div>
</section>
<!-- end section Featured -->

<!-- start section consultation -->
<section class="consultation">
    <div class="form-consultation">
        <div class="title">
            <h1>Get a free consultation</h1>
                <div class="img-consultation">
                    <img class="back-consultation" src="{{asset("front/image/Group 11042.png")}}" alt="">
                    <img class="image-consultation" src="{{asset("front/image/image 13.png")}}" alt="">
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

<!-- start section success partners -->
<section class="success-partners d-flex align-items-center overflow-hidden">
    <div class="cont-success" style="width: 220px;">
        <p class="success p-3" style="margin: 0 20px; font-size: 22px; font-weight: 700; color: #1D3867;">Success Partners</p>
    </div>
    <div class="partners-slide col-10">
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<!-- end section success partners -->

@endsection
