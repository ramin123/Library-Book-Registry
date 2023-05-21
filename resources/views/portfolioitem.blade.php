@extends('layouts/default')

{{-- Page title --}}
@section('title')
Portfolio_Item
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/portfolio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">
<!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
<div class="breadcum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                        </a>
                    </li>
                    <li class="d-none d-sm-block">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">Portfolio Item</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="clip" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> Portfolio Item
                </div>
            </div>
        </div>
    </div>
</div>
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container my-3">
    <h2><label> Single Portfolio</label></h2>
    <div class="row details">
        <!-- bar Section Start -->
        <div class="col-md-12  col-lg-6 col-12 wow bounceInLeft" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item"><img src="{{ asset('images/16.jpg') }}" alt="slider-image" class="img-fluid">
                        </div>
                        <div class="item"><img src="{{ asset('images/14.jpg') }}" alt="slider-image" class="img-fluid">
                        </div>
                        <div class="item"><img src="{{ asset('images/15.jpg') }}" alt="slider-image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Slider Section End -->
        <!-- Project Description Section Start -->
        <div class="col-md-12 col-lg-6 col-12 wow bounceInRight" data-wow-duration="1.5s">
            <h3>Project Description</h3>
            <p class="text-justify">
                Wouldn't you like to get away? Sometimes you want to go where everybody knows your name. And they're
                always glad you came. Why do we always come here? I guess well never know. Its like a kind of torture to
                have to watch the show. Movin' on up to the east side. We finally got a piece of the pie. That this
                group would somehow form a family that's the way we all became the Brady Bunch. In a freak mishap Ranger
                3 and its pilot Captain William
            </p>
            <h3>Client Details</h3>
            <ul style="padding: 0 0 0 10px;">
                <li><b>Category:</b>&nbsp;Web Template</li>
                <br />
                <li><b>Client:</b>&nbsp;Leda B. Powers</li>
                <br />
                <li><b>Tags:</b>&nbsp;Web, PHP</li>
                <br />
                <li><b> Link:</b><a href="#">&nbsp;www.domain.com</a></li>
                <br />
                <li><a class=" btn btn-primary" href="#"><span class="text-white"><i class="livicon"
                                data-name="hand-right" data-size="24" data-loop="true" data-c="#fff"
                                data-hc="white"></i></span></a></li>
            </ul>
        </div>
        <!-- //Project Description Section End -->
    </div>
    <!-- Related Section Start -->
    <div class="text-center">
        <h3 class="border-success"><span class="heading_border bg-success">Related Projects</span></h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3 col-12 my-2">
            <a href="#"><img src="{{ asset('images/gallery/3.jpg') }}" class="img-fluid"></a>
        </div>
        <div class="col-md-6 col-lg-3 col-12 my-2">
            <a href="#"><img src="{{ asset('images/gallery/5.jpg') }}" class="img-fluid"></a>
        </div>
        <div class="col-md-6 col-lg-3 col-12 my-2">
            <a href="#"><img src="{{ asset('images/gallery/7.jpg') }}" class="img-fluid"></a>
        </div>
        <div class="col-md-6 col-lg-3 col-12 my-2">
            <a href="#"><img src="{{ asset('images/gallery/10.jpg') }}" class="img-fluid"></a>
        </div>
    </div>
</div>
<!-- Related Setion End -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
<!--page level js ends-->
@stop
