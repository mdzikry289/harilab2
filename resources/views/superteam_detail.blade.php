<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/font-awesome.min.css') }}">
  <!-- swiper css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.min.css') }}">
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fancybox.min.css') }}">
  <!-- mapbox css -->
  <link href="{{ asset('frontend/assets/css/plugins/mapbox-style.css') }}" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

  <title>Harilab Production - {{ $team->name }}</title>

  <style>
    img {
      object-fit: cover;
    }
  </style>
</head>

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

            <div class="row">
              <div class="col-lg-6 col-md-12">

                <div class="qrt-about-me-cover">
                  <img src="{{ asset('frontend/assets/img/team/'.$team->image) }}" alt="team member">
                </div>

              </div>
              <div class="col-lg-6 col-md-12 align-self-center">

                <div class="qrt-member-about">
                  <h3 class="qrt-mb-5">{{ $team->name }}</h3>
                  <div class="qrt-el-suptitle">{{ $team->role }}</div>

                  <div class="qrt-divider"></div>

                  <ul class="qrt-table">
                    {{-- <li>
                      <h5>Joined Harilab:</h5><span>May 2017</span>
                    </li> --}}
                    <li>
                      <h5>City:</h5><span>{{ $team->city }}</span>
                    </li>
                    {{-- <li>
                      <h5>Education:</h5><span>BNG National University</span>
                    </li> --}}
                    <li>
                      <h5>Email:</h5><span><a class="qrt-cursor-color" href="mailto:{{ $team->email }}">{{ $team->email }}</a></span>
                    </li>
                  </ul>

                  <div class="qrt-divider"></div>

                  <ul class="qrt-social-list">
                    <li><a href="{{ $team->instagram }}" class="qrt-cursor-scale qrt-cursor-color">
                        <i class="fab fa-instagram"></i>
                    </a></li>
                    <li><a href="{{ $team->facebook }}" class="qrt-cursor-scale qrt-cursor-color">
                        <i class="fab fa-facebook-f"></i>
                    </a></li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-20">About {{ $team->name }}</h3>

              </div>
              <div class="col-lg-12 qrt-mb-25">

                {{ $team->about }}

              </div>
              <div class="col-lg-12">

                <blockquote>
                  {{ $team->quote }}
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">

              <div class="col-lg-12">

                <h3 class="qrt-mb-40">My Expertise</h3>

              </div>
              @foreach ($ts as $t)
              <div class="col-lg-4">

                
                <div class="qrt-icon-box">
                  <img height="100%" width="100%" class="mb-20" src="{{ asset('frontend/assets/img/icons/' . $t->service_image) }}" alt="icon">
                  <h4 class="mb-20">{{ $t->service_name }}</h4>
                  <div>{{ $t->service_description }}</div>
                </div>

              </div>
                @endforeach
              

            </div>

            {{-- <div class="qrt-divider qrt-space-fix"></div> --}}

            {{-- <div class="row">
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">10</span>
                  </div>
                  <h5>Years Experience</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">143</span>
                  </div>
                  <h5>Completed Projects</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">114</span>
                  </div>
                  <h5>Happy Customers</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">20</span>
                  </div>
                  <h5>Honors and Awards</h5>
                </div>

              </div>
            </div> --}}

            <div class="qrt-divider qrt-space-fix"></div>

            {{-- <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Latest Viktoria's works</h3>

              </div>
              <div class="col-lg-12">

                <div class="swiper-container qrt-latest-works-slider qrt-mb-20" style="overflow: visible">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">

                      <div class="qrt-work-item qrt-work-open">
                        <a data-fancybox="works" href="img/projects/original-size/5.jpg" class="qrt-cursor-scale qrt-work-cover-frame">
                          <img src="img/projects/thumbnails/5.jpg" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white"><a href="work-single.html">Project title</a></h4>
                          <a href="work-single.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>

                    </div>
                    <div class="swiper-slide">

                      <div class="qrt-work-item qrt-work-open">
                        <a data-fancybox="works" href="img/projects/original-size/8.jpg" class="qrt-cursor-scale qrt-work-cover-frame">
                          <img src="img/projects/thumbnails/8.jpg" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white"><a href="work-single.html">Project title</a></h4>
                          <a href="work-single.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>

                    </div>
                    <div class="swiper-slide">

                      <div class="qrt-work-item qrt-work-open">
                        <a data-fancybox="works" href="img/projects/original-size/7.jpg" class="qrt-cursor-scale qrt-work-cover-frame">
                          <img src="img/projects/thumbnails/7.jpg" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white"><a href="work-single.html">Project title</a></h4>
                          <a href="work-single.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">

                <div class="swiper-latest-works-pagination"></div>

              </div>
              <div class="col-6">

                <div class="qrt-slider-nav">
                  <!-- prev -->
                  <div class="qrt-slider-prev qrt-latest-works-prev"><i class="fas fa-arrow-left"></i></div>
                  <!-- next -->
                  <div class="qrt-slider-next qrt-latest-works-next"><i class="fas fa-arrow-right"></i></div>
                </div>

              </div>
            </div> --}}

            {{-- <div class="qrt-divider"></div> --}}

            {{-- <div class="row">
              <div class="col-lg-6">

                <h3 class="qrt-mb-40">Education</h3>

                <div class="qrt-timeline qrt-mb-40">

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">University of toronto</h4>
                        <div class="qrt-el-suptitle">Student</div>
                      </div>
                      <div class=" qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="diploma" href="img/files/diploma.jpg" class="qrt-link qrt-w-chevron">diploma</a>
                    </div>
                  </div>

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">3D visualization courses</h4>
                        <div class="qrt-el-suptitle">Student</div>
                      </div>
                      <div class=" qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="diploma" href="img/files/certificate.jpg" class="qrt-link qrt-w-chevron">Certificate</a>
                    </div>
                  </div>

                </div>

              </div>
              <div class="col-lg-6">

                <h3 class="qrt-mb-40">Experience</h3>

                <div class="qrt-timeline qrt-mb-40">

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">Envato market</h4>
                        <div class="qrt-el-suptitle">Template author</div>
                      </div>
                      <div class="qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="recommendation" href="#rec-1" class="qrt-link qrt-w-chevron">Recommendation</a>

                    </div>
                  </div>

                  <div class="qrt-rec-popup" style="display: none;" id="rec-1">

                    <div class="qrt-testimonial">
                      <div class="qrt-testimonial-header">
                        <img src="img/testimonials/t1.jpg" alt="customer">
                        <div class="qrt-testimonial-name">
                          <h4 class="qrt-mb-5">Emma Newman</h4>
                          <div class="qrt-el-suptitle">Chief Architect</div>
                        </div>
                      </div>
                      <div class="qrt-testimonial-text">
                        We engaged Paul Trueman of quarty Studio to manage the planning process and to design and manage a full renovation and remodelling of our 1930s house. We really enjoyed working with Paul. We would not hesitate to
                        recommend Paul and Quarty.
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

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">Themeforest</h4>
                        <div class="qrt-el-suptitle">Art Director</div>
                      </div>
                      <div class="qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="recommendation" href="#rec-2" class="qrt-link qrt-w-chevron">Recommendation</a>

                    </div>
                  </div>

                  <div class="qrt-rec-popup" style="display: none;" id="rec-2">

                    <div class="qrt-testimonial">
                      <div class="qrt-testimonial-header">
                        <img src="img/testimonials/t2.jpg" alt="customer">
                        <div class="qrt-testimonial-name">
                          <h4 class="qrt-mb-5">Paul Trueman</h4>
                          <div class="qrt-el-suptitle">Chief Architect</div>
                        </div>
                      </div>
                      <div class="qrt-testimonial-text">
                        We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                        were also
                        indispensable in managing the practical side of the build.
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

                </div>

              </div>
            </div> --}}

            {{-- <div class="qrt-divider qrt-space-fix"></div> --}}

            {{-- <div class="row"> --}}

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
                  <div class="qrt-slider-prev qrt-testi-prev qrt-cursor-color qrt-cursor-scale"><i class="fas fa-arrow-left"></i></div>
                  <!-- next -->
                  <div class="qrt-slider-next qrt-testi-next qrt-cursor-color qrt-cursor-scale"><i class="fas fa-arrow-right"></i></div>
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
                      <img src="{{ asset('images/clients/' . $c->client_image) }}" alt="brand">
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
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
              <div class="qrt-image-frame">
                <img src="{{ asset('frontend/assets/img/team/' . $team->image) }}" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint">
                  <span></span>
                </div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">{{ $team->name }}</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">{{ $team->about }}</div>
                  <a href="{{ url('contact') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in touch</span></a>
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
