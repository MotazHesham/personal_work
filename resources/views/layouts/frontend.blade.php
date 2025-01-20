<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ get_setting('meta_title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta itemprop="image" content="{{ asset(get_setting('metaimage')) }}">
    <meta property="og:image" content="{{ asset(get_setting('metaimage')) }}">
    <meta name="description" content="{{ get_setting('meta_description')}}" />
    <meta name="keywords" content="{{ get_setting('meta_keywords')}}">   

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset(get_setting('logo')) }}">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <style> 
        :root  {
            --first-color: {{ get_setting('first_color','#CA82F8') }};  
        } 
    </style>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>

</head>

<body>

    <nav id="colorlib-main-nav" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="colorlib-table-cell js-fullheight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search"
                                placeholder="Enter any key to search...">
                            <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li @if (request()->is('/*')) class="active" @endif><a href="{{ route('home') }}">Home</a></li>
                            <li @if (request()->is('services')) class="active" @endif><a href="{{ route('services') }}">Expertise</a></li>
                            <li @if (request()->is('works')) class="active" @endif><a href="{{ route('works') }}">Work</a></li>
                            <li @if (request()->is('threads')) class="active" @endif><a href="{{ route('threads') }}">Threads</a></li>
                            <li @if (request()->is('about')) class="active" @endif><a href="{{ route('about') }}">About</a></li>
                            <li @if (request()->is('contact')) class="active" @endif><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="head-title">Works</h2>
                        @foreach(\App\Models\MyProject::take(4)->get() as $project)
                            <a href="'{{ $project->first_photo ? $project->first_photo->getUrl() : '' }}'" class="gallery image-popup-link text-center"
                                style="background-image: url('{{ $project->first_photo ? $project->first_photo->getUrl() : '' }}');">
                                <span><i class="icon-search3"></i></span>
                            </a> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-pb-sm">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Let's Talk</h2> 
                                <p><a href="mailto:{{ get_setting('email') }}">{{ get_setting('email') }}</a></p>
                                <p class="colorlib-social-icons">
                                    <a href="{{ get_setting('behance') }}" target="_blank"><i class="icon-behance2"></i></a>
                                    &nbsp;
                                    <a href="{{ get_setting('linkedin') }}" target="_blank"><i class="icon-linkedin"></i></a>
                                    &nbsp;
                                    <a href="{{ get_setting('instagram') }}" target="_blank"><i class="icon-instagram"></i></a>
                                    &nbsp;
                                    <a href="{{ get_setting('dribbble') }}" target="_blank"><i class="icon-dribbble"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-pb-sm">
                        <h2>Latest Blog</h2>
                        @foreach(\App\Models\Thread::orderBy('created_at','desc')->take(3)->get() as $thread)
                            <div class="f-entry">
                                <a href="{{ route('thread',$thread->id) }}" class="featured-img"
                                    style="background-image: url('{{ $thread->first_photo ? $thread->first_photo->getUrl() : '' }}');"></a>
                                <div class="desc">
                                    <span>{{ $thread->created_at->format('d, M Y') }}</span>
                                    <h3><a href="{{ route('thread',$thread->id) }}">{{ $thread->title }}</a></h3>
                                </div>
                            </div> 
                        @endforeach
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p> 
                            {{ get_setting('footer_copyright') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup-options.js') }}"></script>

    <!-- Main JS (Do not remove) -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
