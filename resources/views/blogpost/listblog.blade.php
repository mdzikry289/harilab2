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
                            {{-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-style-1">
                                    <li class="breadcrumb-item"><a href="#">Styles</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tables</li>
                                </ol>
                            </nav> --}}
                            <h1 class="page-title">Blog Post</h1>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        
                                        <a href="{{ route('blogpost.create') }}" typ    e="submit" class="btn btn-primary">Create New</a>
                                        {{-- <h5 class="card-title">List Blog</h5> --}}
                                        <p></p>
                                        <table class="table table-hover table-responsive">
                                            <tr>
                                                <th class="border px-4 py-2">Title</th>
                                                <th class="border px-4 py-2">Author</th>
                                                <th class="border px-4 py-2">Content</th>
                                                <th class="border px-4 py-2">Aksi</th>
                                            </tr>
                                            @forelse ($blogs as $b)
                                            <tr>
                                                <td class="border px-4 py-2">{{ $b->title }}</td>
                                                <td class="border px-4 py-2">{{ $b->author }}</td>
                                                <td class="border px-4 py-2">{!! ($b->content) !!}</td>
                                                <td class="border px-4 py-2">
                                                    <a class="btn btn-info" href="{{ route('blogpost.edit', $b->id) }}">Edit</a>
                                                    <div class="mt-2"></div>
                                                    <form action="{{ route('blogpost.destroy', $b->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr colspan="3" class="border px-4 py-2 text-center">
                                                    Tidak ada data
                                                </tr>
                                            @endforelse
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Main Wrapper -->

                    
                @include('admin/layout/footer')
                </div><!-- /Page Inner -->
                <div class="page-right-sidebar" id="main-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <span class="chat-header">Chat</span>
                            <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <!-- Tab panes -->
                                    <div class="chat-list">
                                        <span class="chat-title">Recent</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar1.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">David</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">16:20</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar2.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Bob</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">11:34</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="chat-list">
                                        <span class="chat-title">Older</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar3.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Tom</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">2d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar4.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Anna</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">4d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="../../assets/images/avatars/avatar5.png" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Noah</span>
                                                <span class="chat-text">Hello there!</span>
                                                <span class="chat-time">&nbsp;</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="load-more-messages"  data-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-sidebar" id="chat-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="chat-top-info">
                                <span class="chat-name">Noah</span>
                                <span class="chat-state">2h ago</span>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close float-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <div class="right-sidebar-chat slimscroll">
                                <div class="chat-bubbles">
                                <div class="chat-start-date">02/06/2017 5:58PM</div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="../../assets/images/avatars/avatar1.png" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello!</span>
                                        </div>
                                    </div>
                                <div class="chat-start-date">03/06/2017 4:22AM</div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">lorem</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="../../assets/images/avatars/avatar1.png" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-write">
                                <form class="form-horizontal" action="javascript:void(0);">
                                    <input type="text" class="form-control" placeholder="Say something">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        @include('admin/layout/js')
    </body>
</html>