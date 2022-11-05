<nav class="navbar navbar-default navbar-expand-md">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="logo-sm">
                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fas fa-bars"></i></a>
                <a class="logo-box" href="index.html"><span>concept</span></a>
            </div>
            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <i class="fas fa-angle-down"></i>
            </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
    
        <div class="collapse navbar-collapse justify-content-between" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fas fa-bars"></i></a></li>
                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fas fa-expand"></i></a></li>
                <li><a href="javascript:void(0)" id="search-button"><i class="fas fa-search"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
            <ul class="nav navbar-nav">
                {{-- <li class="nav-item d-md-block"><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fas fa-envelope"></i></a></li> --}}
                {{-- <li class="dropdown nav-item d-md-block">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-lg dropdown-content">
                        <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fas fa-angle-right"></i></a></li>
                        <li class="slimscroll dropdown-notifications">
                            <ul class="list-unstyled dropdown-oc">
                                <li>
                                    <a href="#"><span class="notification-badge bg-info"><i class="fas fa-at"></i></span>
                                        <span class="notification-info">
                                            <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5"</span>
                                            <small class="notification-date">06:07</small>
                                        </span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="notification-badge bg-danger"><i class="fas fa-bolt"></i></span>
                                        <span class="notification-info">
                                            <span class="notification-info">4 new special offers from the apps you follow!</span>
                                            <small class="notification-date">Yesterday</small>
                                        </span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="notification-badge bg-success"><i class="fas fa-bullhorn"></i></span>
                                        <span class="notification-info">
                                            <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!</span>
                                            <small class="notification-date">Yesterday</small>
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="dropdown nav-item d-md-block">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{ Auth::user()->profile_photo_url }}" alt="" class="rounded-circle"></a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">
                            {{-- <span class="badge float-right badge-info">64</span> --}}
                            Messages</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <div class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          this.closest('form').submit(); " role="button">
                                  <i class="fas fa-sign-out-alt"></i>
                  
                                  {{ __('Log Out') }}
                              </a>
                          </div>
                      </form></li>
                    </ul>
                </li>
            </ul>
    </div><!-- /.container-fluid -->
</nav>