@extends('layouts/default')

{{-- Page title --}}
@section('title')
About us
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/devicon/devicon.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/devicon/devicon-colors.css') }}">
<!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
<div class="breadcum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                        </a>
                    </li>
                    <li class="d-none d-sm-block">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">About Us</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> About Us
                </div>
            </div>
        </div>

    </div>
</div>
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <!-- Slider Section Start -->
    <div class="row my-3">
        <!-- Left Heading Section Start -->
        <div class="col-md-7 col-sm-12  col-md-12 col-lg-8 wow bounceInLeft" data-wow-duration="5s">
            <h2><label>Welcome to Josh</label></h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus
                doloremque exercitationem
            </p>
        </div>
        <!-- //Left Heaing Section End -->
        <!-- Slider Start -->
        <div class="col-md-12 col-sm-12  col-lg-4 slider wow fadeInRightBig" data-wow-duration="5s">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('images/image_16.jpg') }}" alt="slider-image" class="img-fluid">
                </div>
                <div class="item"><img src="{{ asset('images/image_17.jpg') }}" alt="slider-image" class="img-fluid">
                </div>
                <div class="item"><img src="{{ asset('images/image_16.jpg') }}" alt="slider-image" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- //Slider End -->
    </div>
    <!-- //Slider Section End -->
    <!-- Services Section Start -->
    <div class="text-center">
        <h3 class="border-success"><span class="heading_border bg-success">Services</span></h3>
    </div>
    <div class="row">
        <!-- left Section Start -->
        <div class="col-md-12 col-sm-12 col-lg-6 col-12">
            <div class="row">
                <!-- Responsive Section Start -->
                <div class="col-sm-6 col-md-12 col-lg-6 col-12 wow zoomIn" data-wow-duration="3s">
                    <div class="box">
                        <div class="box-icon">
                            <i class="livicon icon1" data-name="desktop" data-size="55" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i>
                        </div>
                        <div class="info">
                            <h3 class="success text-center mt-3">Responsive</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam
                                aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem
                                sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Responsive Section End -->
                <!-- Easy to Use Section Start -->
                <div class="col-sm-6 col-md-12 col-lg-6 col-12 wow zoomIn" data-wow-duration="3s">
                    <div class="box">
                        <div class="box-icon box-icon1">
                            <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca"
                                data-hc="#418bca"></i>
                        </div>
                        <div class="info">
                            <h3 class="primary text-center mt-3">Easy to Use</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam
                                aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem
                                sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Easy to use Section End -->
            </div>
        </div>
        <!-- Left Section End -->
        <div class="col-md-12 col-sm-12 col-lg-6 col-12 wow bounceInRight" data-wow-duration="3s">
            <!-- Pnael group section Start -->
            <div class="margin-t30 d-none d-md-block"></div>
            <div id="accordion">
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-minus success"></i>
                                <span class="success">PHP</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="media">
                            <div class="media-top">
                                <a href="#">
                                    <i class="devicon-php-plain colored display-1"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Php Section End -->
                <!-- Html Section Start -->
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingtwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-plus success"></i>
                                <span class="success">HTML</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="#">
                                        <i class="devicon-html5-plain colored display-1"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingthree">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsethree"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-plus success"></i>
                                <span class="success">JQUERY</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="#">
                                        <i class="devicon-jquery-plain colored display-1"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- //Panel group Section End -->
        </div>
    </div>
    <!-- // Services Section End -->
    <!-- Our Team Section Start -->
    <div class="text-center my-3">
        <h3 class="border-danger"><span class="heading_border bg-danger">Our Team</span></h3>
    </div>
    <div class="row">
        <!-- Our Team Heading Start -->
        <!-- //Our Team Heading End -->
        <!-- Image1 Section Start -->
        <div class="col-md-6 col-sm-12 col-12  col-lg-3 profile wow zoomIn" data-wow-duration="3.5s">
            <div class="thumbnail bg-white  text-center">
                <img src="{{ asset('images/img_3.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>John Doe</b>
                    <br /> Founder &amp; Partner
                    <br />
                    <div class="divide">
                        <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22"
                                data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true"
                                data-c="#55acee" data-hc="#55acee"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                data-c="#d73d32" data-hc="#d73d32"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                data-c="#1b86bd" data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Image1 Section End -->
        <!-- Image2 Section Start -->
        <div class="col-md-6 col-sm-12 col-12 col-lg-3 profile wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="thumbnail bg-white text-center">
                <img src="{{ asset('images/img_5.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Francina Steinberg</b>
                    <br /> CEO
                    <br />
                    <div class="divide">
                        <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22"
                                data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true"
                                data-c="#55acee" data-hc="#55acee"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                data-c="#d73d32" data-hc="#d73d32"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                data-c="#1b86bd" data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Image2 Section End -->
        <!-- Image3 Section Start -->
        <div class="col-md-6 col-sm-12 col-12 col-lg-3  profile wow zoomIn" data-wow-duration="3s"
            data-wow-delay="0.8s">
            <div class="thumbnail bg-white  text-center">
                <img src="{{ asset('images/img_4.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Audrey Sheldon</b>
                    <br /> Executive Manager
                    <br />
                    <div class="divide">
                        <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22"
                                data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true"
                                data-c="#55acee" data-hc="#55acee"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                data-c="#d73d32" data-hc="#d73d32"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                data-c="#1b86bd" data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image3 Section End -->
        <!-- Image4 Section Star -->
        <div class="col-md-6 col-sm-5 col-12  col-lg-3 profile wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="thumbnail bg-white text-center">
                <img src="{{ asset('images/img_6.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Sam Bellows</b>
                    <br /> Manager
                    <br />
                    <div class="divide">
                        <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22"
                                data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true"
                                data-c="#55acee" data-hc="#55acee"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                data-c="#d73d32" data-hc="#d73d32"></i>
                        </a>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                data-c="#1b86bd" data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Image4 Section End -->
    </div>
    <!-- //Our Team Section End -->
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/aboutus.js') }}"></script>
<!--page level js ends-->
@stop
