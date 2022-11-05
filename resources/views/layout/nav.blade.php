<div class="qrt-menu">
    <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
      <nav>
        <ul>
          <li class="{{ (request()->is('/')) ? 'current-menu-item' : '' }}">
            <a href="{{ url('/') }}">Home</a>
            {{-- <ul>
              <li><a href="home-slider.html">Home slider</a></li>
              <li><a href="home-video.html">Home video</a></li>
              <li><a href="home-image.html">Home image</a></li>
              <li class="qrt-this-page"><a href="home-combined.html">Home combined</a></li>
              <li><a href="home-classic.html">Home classic</a></li>
            </ul> --}}
          </li>
          <li class="{{ (request()->is('about')) ? 'current-menu-item' : '' }}">
            <a href="{{ url('/about') }}">About</a>
            {{-- <ul>
              <li><a href="about-us.html">About us</a></li>
              <li><a href="about-me.html">About me</a></li>
              <li><a href="about-us-classic.html">About us classic</a></li>
              <li><a href="about-me-classic.html">About me classic</a></li>
            </ul> --}}
          </li>
          <li class="{{ (request()->is('portfolio')) ? 'current-menu-item' : '' }}">
            {{-- <a class="qrt-mobile-fix" href="{{ url('/portfolio') }}">Portfolio</a> --}}
            <a href="{{ url('/portfolio') }}">Portfolio</a>
            {{-- <ul>
              <li><a href="portfolio-fs-masonry-1.html">fullscreen masonry</a></li>
              <li><a href="portfolio-fs-masonry-2.html">fullscreen masonry 2</a></li>
              <li><a href="portfolio-fs-grid-3-col.html">fullscreen grid 3 column</a></li>
              <li><a href="portfolio-fs-grid-2-col.html">fullscreen grid 2 column</a></li>
              <li><a href="single-work-1.html">Single work 1</a></li>
              <li><a href="single-work-2.html">Single work 2</a></li>
            </ul> --}}
          </li>
          <li class="{{ (request()->is('contact')) ? 'current-menu-item' : '' }}">
            <a href="{{ url('/contact') }}">Contact</a>
            {{-- <ul>
              <li><a href="contact.html">Contact type 1</a></li>
              <li><a href="contact-2.html">Contact type 2</a></li>
            </ul> --}}
          </li>
          <li class="{{ (request()->is('blog')) ? 'current-menu-item' : '' }}">
            <a href="{{ url('/blog') }}">Blog</a>
            {{-- <ul>
              <li><a href="blog-list.html">Blog list</a></li>
              <li><a href="publication.html">Publication</a></li>
            </ul> --}}
          </li>
        </ul>
      </nav>
    </div>
  </div>