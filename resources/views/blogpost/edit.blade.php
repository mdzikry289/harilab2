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
                            <h1 class="page-title">Edit</h1>
                        </div>
                        <div class="row">
                            <div class="container mt-5">
                                {{-- <div class="row">
                                    <div class="col-xl-12 text-right">
                                        <a href="{{ url('/blogpost') }}" class="btn btn-danger"> Back </a>
                                    </div>
                                </div> --}}
                        
                                <form action="{{ route('blogpost.update', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                        
                                            @if(Session::has('success'))
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                {{ Session::get('success') }}
                                            </div>
                                            @elseif(Session::has('failed'))
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                {{ Session::get('failed') }}
                                            </div>
                                            @endif
                        
                                            <div class="card shadow">
                        
                                                <div class="card-header">
                                                    <h4 class="card-title">Publish Artikel</h4>
                                                </div>
                        
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id" value="{{ $blog->id }}">
                                                        <input type="hidden" class="form-control" name="author" value="{{ $blog->author }}">
                                                        <input type="hidden" class="form-control" name="images" value="{{ $blog->images }}">
                                                        <label> Judul </label>
                                                        <input type="text" class="form-control" name="title" placeholder="Masukan Judul" value="{{ $blog->title }}">
                                                    </div>
                                                    <div class="flex justify-center">
                                                        <div class="mb-3 xl:w-96">
                                                            <select class="form-control" name="id_category" class="mt-5">
                                                                <option value="{{ $blog->id_category }}" selected>{{ $blog->category }}</option>
                                                                @foreach ($category as $c)
                                                                    <option value="{{ $c->id_cateogry }}">{{ $c->category }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control" rows="5" id="editor" placeholder=""
                                                            name="content">{{ $blog->content }}</textarea>
                                                    </div>
                                                </div>
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-success"> Post It ! </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- Main Wrapper -->

                    
                @include('admin/layout/footer')
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        <script>

            class MyUploadAdapter {
    
                constructor(loader) {
                    // The file loader instance to use during the upload.
                    this.loader = loader;
                }
    
                // ...
    
                // Starts the upload process.
                upload() {
                    return this.loader.file
                        .then( file => new Promise( ( resolve, reject ) => {
                            this._initRequest();
                            this._initListeners( resolve, reject, file );
                            this._sendRequest( file );
                        } ) );
                }
    
                // Aborts the upload process.
                abort() {
                    if ( this.xhr ) {
                        this.xhr.abort();
                    }
                }
    
                // ...
    
                // Initializes the XMLHttpRequest object using the URL passed to the constructor.
                _initRequest() {
                    const xhr = this.xhr = new XMLHttpRequest();
    
                    // Note that your request may look different. It is up to you and your editor
                    // integration to choose the right communication channel. This example uses
                    // a POST request with JSON as a data structure but your configuration
                    // could be different.
                    xhr.open('POST', '{{ route('images.store') }}', true);
                    xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
                    xhr.responseType = 'json';
                }
    
                // Initializes XMLHttpRequest listeners.
                _initListeners(resolve, reject, file) {
                    const xhr = this.xhr;
                    const loader = this.loader;
                    const genericErrorText = `Couldn't upload file: ${ file.name }.`;
    
                    xhr.addEventListener('error', () => reject(genericErrorText));
                    xhr.addEventListener('abort', () => reject());
                    xhr.addEventListener('load', () => {
                        const response = xhr.response;
    
                        // This example assumes the XHR server's "response" object will come with
                        // an "error" which has its own "message" that can be passed to reject()
                        // in the upload promise.
                        //
                        // Your integration may handle upload errors in a different way so make sure
                        // it is done properly. The reject() function must be called when the upload fails.
                        if (!response || response.error) {
                            return reject(response && response.error ? response.error.message :
                                genericErrorText);
                        }
    
                        // If the upload is successful, resolve the upload promise with an object containing
                        // at least the "default" URL, pointing to the image on the server.
                        // This URL will be used to display the image in the content. Learn more in the
                        // UploadAdapter#upload documentation.
                        resolve({
                            default: response.url
                        });
                    });
    
                    // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                    // properties which are used e.g. to display the upload progress bar in the editor
                    // user interface.
                    if (xhr.upload) {
                        xhr.upload.addEventListener('progress', evt => {
                            if (evt.lengthComputable) {
                                loader.uploadTotal = evt.total;
                                loader.uploaded = evt.loaded;
                            }
                        });
                    }
                }
    
                // Prepares the data and sends the request.
                _sendRequest(file) {
                    // Prepare the form data.
                    const data = new FormData();
    
                    data.append('upload', file);
    
                    // Important note: This is the right place to implement security mechanisms
                    // like authentication and CSRF protection. For instance, you can use
                    // XMLHttpRequest.setRequestHeader() to set the request headers containing
                    // the CSRF token generated earlier by your application.
    
                    // Send the request.
                    this.xhr.send(data);
                }
            }
    
            function SimpleUploadAdapterPlugin(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    // Configure the URL to the upload script in your back-end here!
                    return new MyUploadAdapter(loader);
                };
            }
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    mediaEmbed: {
                        previewsInData:true
                },
                    extraPlugins: [ SimpleUploadAdapterPlugin ],
                } )
                .catch( error => {
                    console.error( error );
                } );
    
        </script>
        @include('admin/layout/js')
        
    </body>
</html>