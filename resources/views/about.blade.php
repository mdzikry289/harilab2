@include('layout.head')

<body>

  <div class="qrt-app">
    @include('layout.preloader')
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    @include('layout.topbar')
    <div class="qrt-left-bar">
      <div class="qrt-current-page-title"></div>
    </div>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row qrt-p-0-40">
              <div class="col-lg-12">

                <div class="qrt-page-cover">
                  <img src="frontend/assets/img/banners/our_office.jpg" alt="our office">
                  {{-- <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Country:</h5><span>Canada</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">City:</h5><span>Toronto</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Foundation:</h5><span>May, 2012</span>
                        </li>
                      </ul>
                    </div>
                  </div> --}}
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">We are creative <br>production company</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same. Each of our spaces is the result of our ability to listen, which has turned our designs and
                  buildings into personal reflections of our clients’ personalities and values, which we co-construct through research, workshops and surveys.</p>

                <p>In our studio, every project is an open ended enquiry, helping people to challenge their existing state and work towards an alternative, desired one. We provide guidance, expertise and experience across all phases in the
                  architectural process, ranging from thinking, to designing, building, and ultimately finding the right way to communicate the results.</p>

              </div>
              <div class="col-lg-12">

                <blockquote>
                  Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">16</span>
                  </div>
                  <h5>Years Experience</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">500</span>
                  </div>
                  <h5>Completed Projects</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">200</span>
                  </div>
                  <h5>Happy Customers</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">1</span>
                  </div>
                  <h5>Honors and Awards</h5>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Our Superteam</h3>

              </div>
              @foreach ($team as $t)
              <div class="col-lg-4">

                <div class="qrt-team-member">
                  <a href="{{ url('about/' . $t->id . '/' . $t->url) }}"
                    class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                    <img src="{{ asset('frontend/assets/img/team/'.$t->image) }}" alt="team member">
                  </a>
                  <div class="qrt-team-member-description">
                    <div class="qrt-member-name">
                      <h4 class="qrt-white qrt-qrt-mb-5">{{ $t->name }}</h4>
                      <span><b style="color:white">{{ $t->role }}</b></span>
                    </div>
                    <a href="{{ url('about/' . $t->id . '/' . $t->url) }}"
                      class="qrt-cursor-scale qrt-member-more qrt-anima-link">
                      <i class="fas fa-arrow-right"></i>
                    </a>
                  </div>
                </div>

              </div>
              @endforeach
              


            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Testimonials</h3>

              </div>
              <div class="col-lg-12">

                <div class="swiper-container qrt-testimonials-slider" style="overflow: visible">
                  <div class="swiper-wrapper">
                    @foreach ($clients as $c)
                    <div class="swiper-slide">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="{{ asset('images/clients/' . $c->client_image) }}" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">{{ $c->client_name }}</h4>
                            <div class="qrt-el-suptitle">{{ $c->company_position }}</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          {{ $c->testimonials }}
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                </div>

              </div>
              <div class="col-6">

                <div class="swiper-testi-pagination qrt-cursor-color qrt-cursor-scale"></div>

              </div>
              <div class="col-6">

                <div class="qrt-slider-nav">
                  <!-- prev -->
                  <div class="qrt-slider-prev qrt-testi-prev qrt-cursor-color qrt-cursor-scale">
                    <i class="fas fa-arrow-left"></i>
                  </div>
                  <!-- next -->
                  <div class="qrt-slider-next qrt-testi-next qrt-cursor-color qrt-cursor-scale">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>

              </div>


            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-12">

                <div class="swiper-container qrt-brands-slider" style="overflow: visible">
                  <div class="swiper-wrapper">
                    @foreach ($clients as $c)
                    <div class="swiper-slide">
                      <img src="{{ asset('images/clients/'.$c->client_image) }}" alt="brand">
                    </div>
                    @endforeach
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">

                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{ url('/contact') }}"><span>Let's discuss</span></a>
                </div>

              </div>
            </div>

          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-show">
              <div class="qrt-image-frame">
                <img src="{{ asset('frontend/assets/img/banners/our_office.jpg') }}" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint">
                  <span></span>
                </div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">About us</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20 text-justify">Harilab Production is creative production based on Kab. Bandung Barat. Harilab Production has 1000+ projects finished with 100+ Client Statisfied. Harilab Production is prioritize client statisfaction and happiness.</div>
                  <a href="{{ url('/contact') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Collaborate with us</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layout.js')

</body>

</html>
