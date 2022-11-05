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

  <title>Harilab Production - {{ $blog->title }}</title>

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

                <h2 class="qrt-mb-40">{{ $blog->title }}</h2>

              </div>
              <div class="col-lg-12">

                <img src="{{ asset('images/' . $blog->images) }}" alt="thumbnail" class="qrt-just-img">
                <div class="qrt-post-date qrt-mb-40">
                  <span><i class="far fa-user"></i>{{ $blog->author }}</span>
                  <span><i class="far fa-clock"></i> {{ $blog->created_at }}</span>
                </div>

              </div>
              <div class="col-lg-12">
                {!! $blog->content !!}
              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Lihat Artikel Lainnya</h3>

              </div>
              <div class="col-lg-12">

                <div class="swiper-container qrt-pop-post-slider">
                  <div class="swiper-wrapper">
                    @foreach ($recent as $r)
                    <div class="swiper-slide">

                        <div class="qrt-post-frame">
                          <a href="{{ url('blog/' . $r->id . '/' . $r->url) }}"
                            class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                            <img src="{{ asset('images/' . $r->images) }}" alt="thumbnail">
                            <div class="qrt-post-date">
                              <span><i class="far fa-user"></i>{{ $r->author }}</span>
                              <span><i class="far fa-clock"></i>{{ $r->created_at }}</span>
                            </div>
                          </a>
                          <div class="qrt-post-descr">
                            <div>
                              <h4 class="qrt-cursor-color qrt-post-title">
                                <a href="{{ url('blog/' . $r->id . '/' . $r->url) }}" class="qrt-anima-link">{{ $r->title }}</a></h4>
                              <div class="qrt-port-short-text">{!! Str::limit(strip_tags($r->content),
                                $limit = 50, $end = '...') !!}</div>
                            </div>
                          </div>
                        </div>
  
                      </div>
                    @endforeach
                    

                  </div>
                </div>

              </div>
              <div class="col-6">

                <div class="swiper-pp-pagination qrt-cursor-color qrt-cursor-scale"></div>

              </div>
              <div class="col-6">

                <div class="qrt-slider-nav">
                  <!-- prev -->
                  <div class="qrt-slider-prev qrt-pp-prev qrt-cursor-color qrt-cursor-scale">
                    <i class="fas fa-arrow-left"></i>
                </div>
                  <!-- next -->
                  <div class="qrt-slider-next qrt-pp-next qrt-cursor-color qrt-cursor-scale">
                    <i class="fas fa-arrow-right"></i></div>
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
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{ url('/contact') }}">
                    <span>Let's discuss</span>
                </a>
                </div>
              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-show">
              <div class="qrt-image-frame">
                <img src="{{ asset('images/'.$blog->images) }}" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint"><span></span></div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">Newsletter</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">
                    Feel free to contact us for more information. <br>We always do our best for our clients.
                </div>
                <a href="{{ url('/contact') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in touch</span></a>
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
