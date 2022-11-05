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
                  <img src="{{ asset('frontend/assets/img/banners/our_office_contact.jpg') }}" alt="our office">
                  <div class="qrt-about-info">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Main office</h5><span>Kab. Bandung Barat, Indonesia</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Address:</h5><a href="https://goo.gl/maps/VbTirZRnDwmTipuh6" target="_blank" data-no-swup><span>JL. Cihanjuang Komp. Puri Budi Asri No.K5</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Contact info</h3>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="{{ asset('frontend/assets/img/icons/icon-4.svg') }}" alt="icon">
                  <!-- title -->
                  <h4 class="mb-20">Phone number</h4>
                  <!-- description -->
                  <a href="https://api.whatsapp.com/send?phone=+62859106505547" data-no-swup><span>+62 859-1065-05547 (Whatsapp)</span></a><br>
                  <a href="https://api.whatsapp.com/send?phone=+6281214694401" data-no-swup><span>+6281214694401 (Whatsapp)</span></a>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="{{ asset('frontend/assets/img/icons/icon-5.svg') }}" alt="icon">
                  <!-- title -->
                  <h4 class="mb-20">Email</h4>
                  <a href="mailto:harilabaudiovisual@mail.com" data-no-swup><span>harilabaudiovisual@mail.com</span></a><br>
                  <a href="mailto:hlvirtual@mail.com" data-no-swup><span>hlvirtual@mail.com</span></a>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="{{ asset('frontend/assets/img/icons/icon-6.svg') }}" alt="icon">
                  <!-- title -->
                  <h4 class="mb-20">Location</h4>
                  <a href="https://goo.gl/maps/VbTirZRnDwmTipuh6" target="_blank" data-no-swup><span>JL. Cihanjuang Komp. Puri Budi Asri No.K5</span></a>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Get in touch</h3>

              </div>
              <div class="col-lg-12">

                <form id="form" class="qrt-contact-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="name" name="name" class="qrt-input" type="text" placeholder="Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="email" name="email" class="qrt-input" type="email" placeholder="Email" required>
                        <label for="email"><i class="fas fa-at"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <textarea id="message" name="text" class="qrt-input" placeholder="Message" required></textarea>
                        <label for="message"><i class="far fa-envelope"></i></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-mb-20">We promise not to disclose your personal information to third parties.</div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40">
                        <button class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale" type="submit"><span>Send message</span></button>
                      </div>
                    </div>

                  </div>
                </form>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Welcome to visit</h3>

              </div>
              <div class="col-12">

                <div class="qrt-map-frame qrt-map-frame-2">
                  {{-- <div class="qrt-lock"><i class="fas fa-lock"></i></div> --}}
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3284609025086!2d107.57118861455848!3d-6.851173895048817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e401c283a95d%3A0x3f91dcb68020f6cb!2sHariLab%20Studio%20Music%20Video%20Photography!5e0!3m2!1sen!2sid!4v1665807694355!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                  <h4>Wanna know more about us ? visit here</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{ url('/about') }}"><span>About us</span></a>
                </div>

              </div>
            </div>

          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-show">
              <div class="qrt-image-frame">
                <img src="{{ asset('frontend/assets/img/banners/banner4.jpg') }}" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint">
                  <span></span>
                </div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">Get in touch</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">See our latest portfolio here. <br>We deliver our greatest content to the clients.</div>
                  <a href="{{ url('/portfolio') }}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Portfolio</span></a>
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
