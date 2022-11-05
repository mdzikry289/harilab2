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

  <title>Harilab Production - {{ $portfolio->name }}</title>

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
              <div class="col-lg-12">

                <h2 class="qrt-mb-40">{{ $portfolio->name }}</h2>

                <div class="qrt-page-cover qrt-cover-center">
                  <img src="{{ asset('images/portfolio/'.$portfolio->image) }}" alt="sunset house">
                  <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Order Date:</h5><span>{{ $portfolio->order_date }}</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Client:</h5><span>{{ $portfolio->client_name }}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="qrt-just-text">
                  <p>{{ $portfolio->description }}</p>
                  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis culpa illo optio libero nam, error amet modi explicabo quaerat ratione!</p> --}}
                </div>

                {{-- <div class="qrt-masonry-grid">
                  <div class="qrt-grid-sizer"></div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 interior architecture">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-3.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-3.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 repair">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-4.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-4.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture interior">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-5.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-5.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 qrt-masonry-grid-item-h-x-2 interior">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-6.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-6.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 qrt-masonry-grid-item-h-x-2 repair architecture">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-7.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-7.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture repair">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-8.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-8.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture repair">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-2.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-2.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 qrt-masonry-grid-item-h-x-2 architecture repair">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture repair">
                    <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2-9.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2-9.jpg" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                </div> --}}

                {{-- <div class="qrt-just-text">
                  <p>Facilis inventore dignissimos ut ea expedita velit, corrupti dicta! Quae fugit reprehenderit illum tenetur saepe magni perspiciatis, similique ea eligendi sit quis fugiat, possimus
                    voluptatibus eius! Odio quas at, nihil nobis blanditiis voluptas libero maiores rerum!</p>
                  <p>Eerror amet modi explicabo quaerat ratione!</p>
                </div> --}}

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

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
                  <h4>Do you have a project?</h4><a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{ url('/contact') }}"><span>Let's discuss</span></a>
                </div>
              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
              <div class="qrt-image-frame">
                <img src="img/banners/banner3.jpg" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint"><span></span></div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">Our Works</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">Any Ideas ? Feel free to discuss with us. <br>We deliver most greatest services to our clients. </div><a href="{{ url('/contact') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in
                      touch</span></a>
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
