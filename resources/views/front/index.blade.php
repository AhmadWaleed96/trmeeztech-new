@extends('front.master')

@section('content')

      <!-- start section hero -->
<section class="hero">

    <div class="side-icons">
        <div class="whatsapp icon">
            <i class="fa-brands fa-whatsapp"></i>
            <span class="content">
                <a href="https://wa.link/igzsii" target="_blank">(+966) 56 138 8363</a>
            </span>
        </div>
        <div class="phone icon">
            <i class="fa fa-phone"></i>
            <span class="content">
                <a href="tel: (+966) 56 138 8363">(+966) 56 138 8363</a>
            </span>
        </div>
        <div class="tarmeez icon">
                                    <a href="https://tarmeeztech.com/tarmeez-tech-profile-ar.pdf" target="_blank"><img src="https://tarmeeztech.com/siteassets/images/icon.svg"></a>
                            </div>
    </div>

    <div class="Tarmmeez-Tach-p">
        <p class="we-are">We are <span>Tarmmeez Tach</span></p>
        <p class="paragraph-hero">Some people spend a lot of time searching for software companies specialized in creating and developing custom websites, electronic stores, designing mobile applications, or any service they wish to implement. </p>

        <div class="link-hero d-flex">
            <a class="btn btn-more" href="">See more</a>
            <a class="btn btn-contact" href="">Contact Us</a>
        </div>
    </div>
    <img class="back-hero" src="image/back-hero.png" alt="">
    <img class="img-hero" src="image/hero1.png" alt="">
    <img class="line-hero" src="image/line-hero.png" alt="">
    <img class="star-hero" src="image/star-hero.png" alt="">
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
        <img class="col-12 col-sm-12 col-md-12 col-lg-12" src="image/Design-Build-Run 1.png" alt="">

        <a class="btn btn-more" href="">See more</a>
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
            {{-- <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <img src="{{asset('front/image/brandingAsset 4 1.png')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Branding</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut </p>
                  <div class="con-btn">
                    <a href="#" class="card-link">Read More <span><img src="{{asset('front/image/Path 8.png')}}" alt=""></span><span><img src="{{asset('front/image/Path 9.png')}}" alt=""></span></a>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <img src="{{asset('front/image/graphic designAsset 2 1.png')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Graphic design</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut </p>
                  <div class="con-btn">
                    <a href="#" class="card-link">Read More <span><img src="{{asset('front/image/Path 8.png')}}" alt=""></span><span><img src="{{asset('front/image/Path 9.png')}}" alt=""></span></a>
                  </div>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <img src="{{asset('front/image/software developmentAsset 1 1.png')}}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Software development</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut </p>
                  <div class="con-btn">
                    <a href="#" class="card-link">Read More <span><img src="{{asset('front/image/Path 8.png')}}" alt=""></span><span><img src="{{asset('front/image/Path 9.png')}}" alt=""></span></a>
                  </div>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <img src="image/web developmentAsset 3 1.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Web development</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut </p>
                  <div class="con-btn">
                    <a href="#" class="card-link">Read More <span><img src="image/Path 8.png" alt=""></span><span><img src="image/Path 9.png" alt=""></span></a>
                  </div>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <img src="image/Voice.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Writing content and voiceover</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut </p>
                  <div class="con-btn">
                    <a href="#" class="card-link">Read More <span><img src="{{ asset('front/image/Path 8.png') }}" alt=""></span><span><img src="{{ asset('front/image/Path 9.png') }}" alt=""></span></a>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <img src="image/brandingAsset 4 1.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">Social media management</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut </p>
                  <div class="con-btn">
                    <a href="#" class="card-link">Read More <span><img src="image/Path 8.png" alt=""></span><span><img src="image/Path 9.png" alt=""></span></a>
                  </div>
                </div>
              </div> --}}
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
            <a href="">tarmeeztach@example.com</a>
        </div>
    </div>
    <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
    <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section interested -->

<!-- start section Featured -->
<section class="Featured">
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
    <img class="Featured-back" src="{{asset("front/>image/Group 56.png")}}" alt="">
    <div class="featured-background">
        <div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
        <div><a class="featured-btn" href="">See More</a></div>
    </div>

        <div class="Featured-card d-flex justify-content-center position-relative">
        <div class="container">
            <div class="swiper myswiper">
                <div class="swiper-wrapper">
                  <div class="big swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder.png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder (1).png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder (2).png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder.png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder (1).png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder (2).png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder.png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder (1).png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset("front/image/Imgae Place Holder (2).png")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                  </div>
                </div>

              </div>
        </div>
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
<section class="success-partners d-flex align-items-center">
    <div>
        <p class="success p-3" style="margin: 0 20px; font-size: 22px; font-weight: 700; color: #1D3867; width: 220px;">Success Partners</p>
    </div>
    <div class="swiper myswiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset("front/image/image 4.png")}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset("front/image/image 3.png")}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset("front/image/image 1.png")}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
</section>
<!-- end section success partners -->

@endsection
