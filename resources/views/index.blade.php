@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.circliful.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
<!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
<!--Carousel Start -->
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item img-fluid"><img src="{{ asset('images/slide_1.jpg') }}" alt="slider-image" />
    </div>
    <div class="item img-fluid"><img src="{{ asset('images/slide_2.jpg') }}" alt="slider-image">
    </div>
    <div class="item img-fluid"><img src="{{ asset('images/slide_4.png') }}" alt="slider-image">
    </div>
</div>
<!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
<div class="container">
    <section class="purchas-main">
        <div class="container bg-border wow pulse" data-wow-duration="2.5s">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                    <h1 class="purchae-hed mt-3">Excellent admin template for laravel</h1>
                </div>
                <div class="col-md-5 col-sm-12 col-12 col-lg-4"><a href="#"
                        class="btn purchase-styl float-lg-right">Purchase
                        now</a></div>
            </div>
        </div>
    </section>
    <!-- Service Section Start-->
    <div class="row">
        <!-- Responsive Section Start -->
        <div class="col-12 text-center my-3">
            <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Our Services</span></h3>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow bounceInLeft" data-wow-duration="3.5s">
            <div class="box">
                <div class="box-icon">
                    <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c"
                        data-hc="#01bc8c"></i>
                </div>
                <div class="info">
                    <h3 class="success text-center">Responsive</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Responsive Section End -->
        <!-- Easy to Use Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
            <!-- Box Start -->
            <div class="box">
                <div class="box-icon box-icon1">
                    <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca"
                        data-hc="#418bca"></i>
                </div>
                <div class="info">
                    <h3 class="primary text-center">Easy to Use</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!.</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Easy to Use Section End -->
        <!-- Clean Design Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="box">
                <div class="box-icon box-icon2">
                    <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14"
                        data-hc="#f89a14"></i>
                </div>
                <div class="info">
                    <h3 class="warning text-center">Clean Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Clean Design Section End -->
        <!-- 20+ Page Section Start -->
        <div class="col-sm-6 col-md-6 col-lg-3 col-12  wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
            <div class="box">
                <div class="box-icon box-icon3">
                    <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C"
                        data-hc="#FFD43C"></i>
                </div>
                <div class="info">
                    <h3 class="yellow text-center">20+ Pages</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur
                        corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                        architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //20+ Page Section End -->
    </div>
    <!-- //Services Section End -->
</div>
<!-- Layout Section Start -->
<section class="feature-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-12 col-lg-9 wow zoomIn" data-wow-duration="2s">
                <div class="layout-image">
                    <img src="{{ asset('images/layout.png') }}" alt="layout" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 wow lightSpeedIn" data-wow-duration="2s">
                <ul class="list-unstyled  text-right layout-styl">
                    <li>
                        <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Responsive clean design
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> User friendly
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> HTML5
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> CSS3
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Bootstrap 4.1.X
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //Layout Section Start -->
<!-- Accordions Section End -->
<div class="container">
    <div class="row">
        <!-- Accordions Start -->
        <div class="text-center col-12 wow flash my-3" data-wow-duration="3s">
            <h3 class="border-success"><span class="heading_border bg-success">Accordions</span></h3>
            <label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.</label>
        </div>
        <!-- Accordions End -->
        <div class="col-md-6 col-sm-12  col-lg-6 col-12 wow slideInLeft" data-wow-duration="1.5s">
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel1 index">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <ul class="nav nav-tabs ">
                        <li class="nav-item ">
                            <a href="#tab_default_1" data-toggle="tab" class="nav-link active">
                                Web </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                Html 5 </a>
                        </li>
                        <li class="clear_both nav-item">
                            <a href="#tab_default_3" data-toggle="tab" class="nav-link">
                                CSS 3 </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_4" data-toggle="tab" class="nav-link">
                                Bootstrap </a>
                        </li>
                    </ul>
                    <hr class="horizontalline">
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                            <div class="media">
                                <div class="media-left tab col-sm-12">
                                    <a href="#">
                                        <img class="media-object img-fluid" src="{{ asset('images/authors/img1.jpg') }}"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Metrics business-to-business beta bootstrapping virality graphical user interface
                                infrastructure conversion launch party long tail. Strategy virality validation bandwidth
                                creative low hanging fruit long tail startup gen-z business plan technology. Strategy
                                termsheet venture stealth non-disclosure agreement accelerator research & development
                                scrum project product management freemium infographic business plan.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <a href="#">
                                        <img class="media-object img-fluid" src="{{ asset('images/authors/img2.jpg') }}"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Branding iteration conversion market sales advisor holy grail entrepreneur backing.
                                Gen-z non-disclosure agreement holy grail business-to-consumer disruptive deployment
                                marketing channels seed money seed round ramen pivot social proof. Venture creative
                                metrics focus A/B testing crowdfunding. IPhone scrum project user experience freemium
                                interaction design long tail stealth ownership hackathon crowdfunding investor.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_3">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <a href="#">
                                        <img class="media-object img-fluid" src="{{ asset('images/authors/img3.jpg') }}"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Beta analytics startup direct mailing leverage learning curve www.discoverartisans.com
                                business-to-consumer. IPad metrics channels pivot deployment business plan android burn
                                rate hackathon vesting period research & development launch party user experience. Seed
                                round freemium value proposition learning curve series A financing funding research &
                                development crowdsource.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_4">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <a href="#">
                                        <img class="media-object img-fluid" src="{{ asset('images/authors/img4.jpg') }}"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <p>
                                Paradigm shift twitter pitch research & development venture. Startup partnership
                                www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift
                                interaction design influencer holy grail first mover advantage ramen validation. User
                                experience founders burn rate learning curve infographic leverage gen-z supply chain
                                first mover advantage.
                            </p>
                        </div>
                    </div>
                    <!-- Tab-content End -->
                </div>
                <!-- //Tabbablw-line End -->
            </div>
            <!-- Tabbable_panel End -->
        </div>
        <div class="col-md-6 col-sm-12 col-12 col-lg-6 wow slideInRight" data-wow-duration="3s">
            <div id="accordion">
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-minus success"></i>
                                <span class="success">Why Choose Us</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-plus success"></i>
                                <span class="success">Why Choose Us</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header p-0" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-plus success"></i>
                                <span class="success">Why Choose Us</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- //Accordions Section End -->
<!-- Our Team Start -->
<div class="container">
    <div class="row text-center">
        <div class="col-12 my-3">
            <h3 class="border-danger "><span class="heading_border bg-danger">Our Team</span></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6 col-sm-6 col-12 col-lg-3 profile wow fadeInLeft" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('images/img_3.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>John Doe</b>
                    <p class="text-center"> Founder & Partner</p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInUp" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('images/img_5.jpg') }}" alt="team-image">
                <div class="caption">
                    <b>Francina Steinberg</b>
                    <p class="text-center"> CEO </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInDown" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('images/img_4.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Audrey Sheldon</b>
                    <p class="text-center"> Executive Manager </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInRight" data-wow-duration="3s"
            data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('images/img_6.jpg') }}" alt="team-image">
                <div class="caption">
                    <b>Sam Bellows</b>
                    <p class="text-center"> Manager </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                                data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                                data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                                data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //Our Team End -->
    <!-- What we are section Start -->
    <div class="row">
        <!-- What we are Start -->
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInLeft" data-wow-duration="3s">
            <div class="text-left">
                <div class="mt-2">
                    <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                </div>
            </div>
            <img src="{{ asset('images/image_12.jpg') }}" alt="image_12" class="img-fluid">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p class="text-right primary my-2"><a href="#">Read more</a>
            </p>
        </div>
        <!-- //What we are End -->
        <!-- About Us Start -->
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInRight" data-wow-duration="3s">
            <div class="text-left">
                <div class="mt-2">
                    <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                </div>
            </div>
            <img src="{{ asset('images/image_11.jpg') }}" alt="image_11" class="img-fluid">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p class="text-right primary my-2"><a href="#">Read more</a>
        </div>
        <!-- //About Us End -->
    </div>
    <!-- //What we are section End -->
    <!-- Testimonial Start -->
    <div class="row">
        <!-- Testimonial Section -->
        <div class=" col-12 text-center mt-3">
            <h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>
        </div>
        <div class="col-md-4  col-lg-4 col-12 wow bounceInLeft" data-wow-duration="3s">
            <div class="author">
                <img src="{{ asset('images/authors/avatar3.jpg') }}" alt="avatar3"
                    class="img-fluid rounded-circle float-left">
                <p class="text-right">
                    Tonny Jakson
                    <br>
                    <small class="text-right">Themeforest.net</small>
                </p>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4  col-12 col-lg-4 wow bounceIn" data-wow-duration="3s">
            <div class="author">
                <img src="{{ asset('images/authors/avatar2.jpg') }}" alt="avatar2"
                    class="img-fluid rounded-circle float-left">
                <p class="text-right">
                    Tonny Jakson
                    <br>
                    <small class="text-right">Themeforest.net</small>
                </p>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4  col-lg-4 col-12 wow bounceInRight" data-wow-duration="3s">
            <div class="author">
                <img src="{{ asset('images/authors/avatar4.jpg') }}" alt="avatar4"
                    class="img-fluid rounded-circle float-left">
                <p class="text-right">
                    Tonny Jakson
                    <br>
                    <small class="text-right">Themeforest.net</small>
                </p>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <!-- Testimonial Section End -->
    </div>
    <!-- Testimonial End -->
    <!-- Features Start -->
    <div class="row features">
        <!--<div class="text-center">-->
        <div class=" col-12 text-center my-3">
            <h3 class="border-warning"><span class="heading_border bg-warning">Features</span></h3>
        </div>
        <!--</div>-->
        <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8"
                        data-hc="#25a3d8"></i></a>
                <h4>Responsive Design</h4>
            </div>
            <div>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 "
                        data-hc="#ef8424 "></i>
                </a>
                <h4>Html 5</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4  col-lg-4  col-12 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c"
                        data-hc="#01bc8c"></i>
                </a>
                <h4>Unique Design</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 "
                        data-hc="#1360b3 "></i>
                </a>
                <h4>Css</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C"
                        data-hc="#FFD43C"></i>
                </a>
                <h4>Clean Design</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 "
                        data-hc="#91d659 "></i>
                </a>
                <h4>Bootstrap</h4>
                <p>
                    <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book."</label>
                </p>
            </div>
        </div>
    </div>
    <!-- //Features End -->
    <!-- Our Skills Start -->

    <div class=" col-12 text-center my-3 marbtm10">
        <h3 class="border-danger"><span class="heading_border bg-danger">Our Skills</span></h3>
    </div>
</div>
<!--</div>-->
<div class="sliders">
    <!-- Our skill Section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3.5s">
                <div class="mx-auto">
                    <div id="myStat3" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="90%"
                        data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Bootstrap</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and type setting industry</p>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                data-wow-delay="0.8s">
                <div class="mx-auto">
                    <div id="myStat4" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="60%"
                        data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Jquery</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                data-wow-delay="1.2s">
                <div class="mx-auto">
                    <div id="myStat5" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="100%"
                        data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Html 5</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                data-wow-delay="1.8s">
                <div class="mx-auto">
                    <div id="myStat6" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="70%"
                        data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee">
                    </div>
                    <h4 class="success"><strong>Css 3</strong></h4>
                </div>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
        </div>
        <!-- Our skills Section End -->
    </div>
    <!-- //Our Skills End -->
</div>

<!-- //Container End -->
@stop
{{-- footer scripts --}}
@section('footer_scripts')
<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('js/frontend/jquery.circliful.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/index.js') }}"></script>
<!--page level js ends-->
@stop