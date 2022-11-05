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
            <div class="row">
              <div class="col-lg-12">

                {{-- <div class="qrt-post-frame qrt-lg-post">
                  <a href="publication.html" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                    <img src="img/blog/0.jpg" alt="thumbnail">
                    <div class="qrt-post-date">
                      <span><i class="far fa-user"></i>Emma Newman</span>
                      <span><i class="far fa-clock"></i> 22.08.2020</span>
                    </div>
                  </a>
                  <div class="qrt-post-descr">
                    <div>
                      <h4 class="qrt-cursor-color qrt-post-title"><a href="publication.html" class="qrt-anima-link">Why architecture competitions are a great idea during<br>the COVID-19 pandemic</a></h4>
                      <div class="qrt-port-short-text">The global COVID-19 pandemic has caused economies around the world to slow down. With isolation measures in place to prevent the spread of the coronavirus, architecture is just one of the
                        industries that has been impacted. Offices and worksites are closed, investment in new projects is virtually nil, and designers and architects are having to work remotely if they’re able to work at all.</div>
                    </div>
                    <a href="publication.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div> --}}

              </div>
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Latest Posts</h3>

              </div>
              @foreach ($blog as $b)
              <div class="col-lg-6">
                
                <div class="qrt-post-frame">
                    <a href="{{ url('blog/' . $b->id . '/' . $b->url) }}"
                        class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                      <img src="{{ asset('images/'. $b->images) }}" alt="thumbnail">
                      <div class="qrt-post-date">
                        <span><i class="far fa-user"></i>{{ $b->author }}</span>
                        <span><i class="far fa-clock"></i> {{ $b->created_at }}</span>
                      </div>
                    </a>
                    <div class="qrt-post-descr">
                      <div>
                        <h4 class="qrt-cursor-color qrt-post-title">
                            <a href="{{ url('blog/' . $b->id . '/' . $b->url) }}" class="qrt-anima-link">{{ $b->title }}</a>
                        </h4>
                        <div class="qrt-port-short-text">{!! Str::limit(strip_tags($b->content),
                        $limit = 50, $end = '...') !!}</div>
                      </div>
                    </div>
                  </div>

              </div>
              @endforeach

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
                  <h4>Do you have a project?</h4><a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{ url('/contact') }}"><span>Let's discuss</span></a>
                </div>
              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-show">
              <div class="qrt-image-frame">
                <img src="{{ asset('frontend/assets/img/banners/banner_blog.jpg') }}" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint"><span></span></div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">Newsletter</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">Feel free to contact us for more information. <br>We always do our best for our clients.</div><a href="{{ url('/contact') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in
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
