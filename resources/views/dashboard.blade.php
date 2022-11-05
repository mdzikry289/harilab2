@include('admin/layout/head')
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <div class="settings-sidebar">
                <div class="settings-sidebar-content">
                    <div class="settings-sidebar-header">
                        <span>Settings</span>
                        <a href="javascript: void(0);" class="settings-menu-close"><i class="icon-close"></i></a>
                    </div>
                    <div class="right-sidebar-settings">
                        <span class="settings-title">General Settings</span>
                        <ul class="sidebar-setting-list list-unstyled">
                            <li>
                                <span class="settings-option">Notifications</span><input type="checkbox" class="js-switch" checked />
                            </li>
                            <li>
                                <span class="settings-option">Activity log</span><input type="checkbox" class="js-switch" checked />
                            </li>
                            <li>
                                <span class="settings-option">Automatic updates</span><input type="checkbox" class="js-switch" />
                            </li>
                            <li>
                                <span class="settings-option">Allow backups</span><input type="checkbox" class="js-switch" />
                            </li>
                        </ul>
                        <span class="settings-title">Account Settings</span>
                        <ul class="sidebar-setting-list list-unstyled">
                            <li>
                                <span class="settings-option">Chat</span><input type="checkbox" class="js-switch" checked />
                            </li>
                            <li>
                                <span class="settings-option">Incognito mode</span><input type="checkbox" class="js-switch" />
                            </li>
                            <li>
                                <span class="settings-option">Public profile</span><input type="checkbox" class="js-switch" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="settings-overlay"></div>
            <!-- Page Content -->
            <div class="page-content">
                @include('admin/layout/sidebar')
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    @include('admin/layout/navbar')
                </div><!-- /Page Header -->
                <!-- Page Inner -->
                <div class="page-inner no-page-title">
                    <div id="main-wrapper">
                        <div class="content-header">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-style-1">
                                    <li class="breadcrumb-item">Breadcrumb Work In Progress</li>
                                    {{-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> --}}
                                </ol>
                            </nav>
                            <h1 class="page-title">Dashboard</h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="ds-stat">
                                                    <span class="ds-stat-name">Total Blog Post</span>
                                                    <h3 class="ds-stat-number">{{ $postCount }}</h3>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                              <div class="ds-stat">
                                                  <span class="ds-stat-name">Total User</span>
                                                  <h3 class="ds-stat-number">{{ $userCount }}</h3>
                                                  <div class="progress" style="height: 3px;">
                                                      <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-3 col-md-6">
                                              <div class="ds-stat">
                                                  <span class="ds-stat-name">Jumlah Keseluruhan Team</span>
                                                  <h3 class="ds-stat-number">{{ $teamCount }}</h3>
                                                  <div class="progress" style="height: 3px;">
                                                      <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Main Wrapper -->

                    
                <div class="page-footer">
                    <p>&copy; Harilab Production 2022</p>
                </div>
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        @include('admin/layout/js')
    </body>
</html>