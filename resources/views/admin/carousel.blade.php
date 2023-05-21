@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Carousel
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/owl_carousel/css/owl.transitions.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/pages/carousel.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Carousel</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Features</a>
                    </li>
                    <li class="active">Carousel</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content pr-3 pl-3">
    <!--main content-->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3 ">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Owl Carousel with single image
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme" id="carousel3">
                        <div class=" item">
                            <img src="{{ asset('img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                    </div>
                    <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12 my-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="tablet" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Owl Carousel with Autogrow
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <!--carousel starts-->
                        <div class="owl-carousel owl-theme" id="carousel1">
                            <div class="item">
                                <img src="{{ asset('img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                            <div class="item">
                                <img src="{{ asset('img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                            <div class="item">
                                <img src="{{ asset('img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                            <div class="item">
                                <img src="{{ asset('img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                            <div class="item">
                                <img src="{{ asset('img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                        </div>
                        <!--carousel ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-danger text-white ">
                    <span>
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Owl Carousel with multiple image
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme" id="carousel4">
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo1.jpg') }}"  alt="image1"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo2.jpg') }}"  alt="image2"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo3.jpg') }}"  alt="image3"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo1.jpg') }}"  alt="image4"> </div>
                        <div class="item">
                            <img src="{{ asset('img/parallax/photo2.jpg') }}"  alt="image5"> </div>
                    </div>
                    <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tabbed Slider Carousel
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/parallax/photo1.jpg') }}"  class="img-fluid" alt="image1">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="carousel-item">
                                    <img src="{{ asset('img/parallax/photo2.jpg') }}"  class="img-fluid" alt="image1">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="carousel-item">
                                    <img src="{{ asset('img/parallax/photo3.jpg') }}"  class="img-fluid" alt="image1">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="carousel-item">
                                    <img src="{{ asset('img/parallax/photo1.jpg') }}"  class='img-fluid' alt="image">
                                    <div class="carousel-caption">
                                        <h3>Headline</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr<span class="hidden-xs">  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</span>.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Carousel Inner -->
                            <ul class="nav nav-pills nav-justified">
                                <li data-target="#myCarousel" data-slide-to="0" class=" nav-item active">
                                    <a href="#" class="nav-link">About</a>
                                </li>
                                <li data-target="#myCarousel" data-slide-to="1" class="nav-item">
                                    <a href="#" class="nav-link">Projects</a>
                                </li>
                                <li data-target="#myCarousel" data-slide-to="2" class="nav-item">
                                    <a href="#" class="nav-link">Portfolio</a>
                                </li>
                                <li data-target="#myCarousel" data-slide-to="3" class="nav-item">
                                    <a href="#" class="nav-link">Services</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Carousel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
<!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/carousel.js') }}" type="text/javascript"></script>
@stop
