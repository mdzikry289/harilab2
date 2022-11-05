
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
        <div class="swiper-container qrt-main-slider">
          <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
          </div>
          <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i class="fas fa-arrow-right"></i></div>
          </div>

          <div class="swiper-wrapper">
            @foreach ($blog as $b)
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img src="{{ asset('images/' . $b->images) }}" alt="banner">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">{{ Str::limit($b->title, $limit = 55, $end = '...') }}</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">{!! Str::limit(strip_tags($b->content), $limit = 155, $end = '...') !!}</div>
                      <a href="{{ url('blog/' . $b->id . '/' . $b->url) }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Lihat Artikel</span><i class="fas fa-arrow-right"></i></a>
                      <a href="{{ url('/contact') }}" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Kontak Kami</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>

@include('layout.js')

</body>

</html>
