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
        <div class="qrt-content-frame">
          <div class="qrt-left">

            <div class="qrt-filter qrt-mb-40">
              <a href="#" data-filter="*" class="qrt-work-category qrt-current qrt-filter-icon qrt-cursor-color qrt-cursor-scale"><i class="fas fa-filter"></i>All Categories</a>
              @foreach ($category as $c)
              <a href="#" data-filter=".{{ $c->id_category }}" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">{{ $c->category_name }}</a>    
              @endforeach
              
              
            </div>

            <div class="qrt-masonry-grid qrt-mb-40">
              <div class="qrt-grid-sizer"></div>

              @foreach ($portfolio as $p)
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 {{ $p->id_category }}">
                <div class="qrt-work-item"><a data-fancybox="works" href="{{ url('images/portfolio/'.$p->image) }}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{ asset('images/portfolio/'.$p->image) }}" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>{{ $p->category_name }}</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="{{ url('/portfolio/' . $p->id . '/' . $p->url) }}" class="qrt-anima-link">{{ $p->name }}</a></h4><a href="{{ url('/portfolio/' . $p->id . '/' . $p->url) }}" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>    
              @endforeach
              
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
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layout.js')
</body>

</html>
