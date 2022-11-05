<div class="secondary-sidebar">
    <div class="secondary-sidebar-bar">
        <a href="#" class="logo-box">HL Admin Area</a>
    </div>
    <div class="secondary-sidebar-profile">
        <a href="#">
            <img src="{{ Auth::user()->profile_photo_url }}">
            <p>{{ Auth::user()->name }}</p>
            {{-- <i class="fas fa-angle-right"></i> --}}
        </a>
        {{-- <ul class="secondary-sidebar-profile-menu list-unstyled d-flex">
                            <li class="flex-fill"><a href="#"><i class="fas fa-rocket"></i></a></li>
                            <li class="flex-fill"><a href="#"><i class="fas fa-globe-africa"></i></a></li>
                            <li class="flex-fill"><a href="#"><i class="fas fa-inbox"></i></a></li>
                            <li class="flex-fill"><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul> --}}
    </div>
    <div class="secondary-sidebar-menu">
        {{-- <button class="btn btn-block btn-primary btn-settings-toggle settings-menu-link"><span>Settings</span><i class="fas fa-cogs"></i></button> --}}
        <ul class="accordion-menu">
            <li class="active-page">
                <a href="/dashboard">
                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="menu-icon icon-apps"></i><span>Blog <span class="pf pf-postepay"></span></span><i
                        class="accordion-icon fas fa-angle-left"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('blogpost.create') }}">Buat Blog Baru</a></li>
                    <li><a href="{{ route('blogpost.index') }}">Lihat Blog Post</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
