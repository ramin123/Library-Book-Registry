@extends('layouts/default')

{{-- Page title --}}
@section('title')
Price
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/price.css') }}">
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
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
                        <a href="#">Price</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="money" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> Price
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
    <h2> PRICING TABLES</h2>
    <div class="row my-3">
        <!-- Vestibulizzle Section Start -->
        <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-3 my-3 wow flipInY" data-wow-duration="1s">
            <div class="card card_price">
                <div class="text-center">
                    <div class="card-header card_heading">
                        <h3 class="text-white mt-3">Vestibulizzle</h3>
                    </div>
                </div>
                <div class="card-body">

                    <div class="box_round_symbol">
                        $25
                    </div>
                    <h4 class="text-success text-center my-2">Per Month</h4>
                    <ul style="text-align:justify; padding-left: 0 !important;">
                        <li class="text-center">
                            Lorem Ipsum Dolor Lorem
                        </li>
                        <li class="text-center">
                            Lorem Ipsum Dolor Lorem
                        </li>
                        <li class="text-center">
                            Lorem Ipsum Dolor Lorem
                        </li>
                        <li class="text-center">
                            Lorem Ipsum Dolor Lorem
                        </li>
                    </ul>


                    <a class="btn btn-success btn-block" href="#">Sign up </a>
                </div>
            </div>
        </div>

        <!-- //Vestibulizzle Section End -->
        <!-- Best Package Section Start -->
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3 col-12 my-3 wow flipInY" data-wow-duration="1s"
            data-wow-delay="0.7s">
            <div class="card card_price">
                <div class="text-center">
                    <div class="card-header card_heading">
                        <h3 class="text-white mt-3">Best Package</h3>
                    </div>
                    <div class="card-body">

                        <div class="box_round_symbol">
                            $25
                        </div>
                        <h4 class="text-success text-center my-2">Per Month</h4>
                        <ul style="text-align:justify; padding-left: 0 !important;">
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>


                        <a class="btn btn-success btn-block" href="#">Sign up </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Package Section End -->
        <!-- Suscipizzle Section Start -->
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3 col-12 my-3 wow flipInY" data-wow-duration="1s"
            data-wow-delay="1.2s">
            <div class="card card_price">
                <div class="text-center">
                    <div class="card-header card_heading">
                        <h3 class="text-white mt-3">Suscipizzle</h3>
                    </div>
                    <div class="card-body">

                        <div class="box_round_symbol">
                            $25
                        </div>
                        <h4 class="text-success text-center my-2">Per Month</h4>
                        <ul style="text-align:justify; padding-left: 0 !important;">
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>


                        <a class="btn btn-success btn-block" href="#">Sign up </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Suscipizzle Section End -->
        <!-- Pretium Section Start -->
        <div class="col-md-6 col-sm-12 col-lg-6 col-12 col-xl-3 my-3 wow flipInY" data-wow-duration="1s"
            data-wow-delay="1.2s">
            <div class="card card_price">
                <div class="text-center">
                    <div class="card-header card_heading">
                        <h3 class="text-white mt-3">Pretium</h3>
                    </div>
                    <div class="card-body">

                        <div class="box_round_symbol">
                            $25
                        </div>
                        <h4 class="text-success text-center my-2">Per Month</h4>
                        <ul style="text-align:justify; padding-left: 0 !important;">
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                            <li class="text-center">
                                Lorem Ipsum Dolor Lorem
                            </li>
                        </ul>

                        <a class="btn btn-success btn-block" href="#">Sign up </a>
                    </div>
                </div>
                <!-- //Pretium Section End -->
            </div>
        </div>
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
            new WOW().init();
        });
</script>

@stop