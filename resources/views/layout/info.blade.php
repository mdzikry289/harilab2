<div class="qrt-info" id="qrt-scroll-info">
    <div class="qrt-info-frame">
      <ul class="qrt-table">
        <li>
          <h5>Country</h5><span>Indonesia</span>
        </li>
        <li>
          <h5>City</h5><span>Bandung Barat Kab.</span>
        </li>
        <li>
          <h5>Alamat</h5>
          <span>Jl. Cihanjuang Komp. Puri Budi Asri No K5</span>
        </li>
        <li>
          <h5>Email</h5><span>
            <a class="qrt-cursor-scale qrt-cursor-color" 
            href="mailto:harilabaudiovisual@gmail.com" data-no-swup>harilabaudiovisual@gmail.com</a></span>
        </li>
        <li>
          <h5>Whatsapp</h5><span><a class="qrt-cursor-scale qrt-cursor-color" href="https://api.whatsapp.com/send?phone=+62859106505547" data-no-swup>+62859106505547</a></span>
        </li>
      </ul>
      <div class="qrt-divider"></div>
      <div class="qrt-social-links">
        <div class="qrt-social-links">
          <h5 class="qrt-mb-40">We are social</h5>
          <ul class="qrt-social-list">
            {{-- <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a></li>
            <li><a href="#." class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a></li> --}}
            <li><a href="https://www.instagram.com/harilab/" target="_blank" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/hari.aj.harilab" target="_blank" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-facebook"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="qrt-divider"></div>
      <div class="qrt-instagram">
        <h5 class="qrt-mb-40">Instagram</h5>
        <div class="qrt-instagram-frame">
          <a href="#." class="qrt-instagram-item qrt-cursor-scale">
            <div class="qrt-instagram-image-frame">
              <img src="{{ asset('frontend/assets/img/projects/thumbnails/7.jpg') }}" alt="instagram post">
            </div>
          </a>
          <a href="#." class="qrt-instagram-item qrt-cursor-scale">
            <div class="qrt-instagram-image-frame">
              <img src="{{ asset('frontend/assets/img/projects/thumbnails/8.jpg') }}" alt="instagram post">
            </div>
          </a>
        </div>
      </div>
      <div class="qrt-divider"></div>
      <h5 class="qrt-mb-40">Latest Post</h5>

      @foreach ($blog as $b)
      <div class="qrt-post-frame qrt-sm-post">
        <a href="{{ url('blog/blog-detail/' . $b->id) }}" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
          <img src="{{ asset('images/'.$b->images) }}" alt="thumbnail">
        </a>
        <div class="qrt-post-descr">
          <div>
            <h4 class="qrt-cursor-color qrt-post-title">
              <a href="publication.html" class="qrt-anima-link">{{ $b->title }}</a></h4>
            <div class="qrt-port-short-text">{!! Str::limit(strip_tags($b->content),
              $limit = 50, $end = '...') !!}</div>
          </div>
        </div>
      </div>
      @endforeach
      

      <div class="qrt-divider"></div>
      <div class="qrt-subscribe">
        <h5 class="qrt-mb-40">Subscribe our newsletter</h5>
        <form>
          <input type="text" placeholder="Email">
          <button type="submit" class="qrt-btn qrt-btn-sm"><i class="far fa-paper-plane"></i></button>
        </form>
      </div>
      <div class="qrt-divider"></div>
      <div class="qrt-copy">
        
        <div>© Harilab Production.<br>All Rights Reserved</div>
      </div>
    </div>
  </div>