@extends('layouts/default')

{{-- Page title --}}
@section('title')
Timeline
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/timeline1.css') }}">
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
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
                    <li class="d-none d-sm-block ">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">Timeline</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="clock" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> Timeline
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
    <!--Content Section Start -->
    <div class="row">
        <div class="col-12 mx-auto">
            <ul class="timeline">
                <!-- Item 1 -->
                <li>
                    <div class="direction-r wow slideInRight" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Lorem ipsum.</span>
                            <span class="time-wrapper"><span class="time">Feb 2016</span></span>
                        </div>
                        <div class="desc">Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation
                            deserunt proident.</div>
                    </div>
                </li>

                <!-- Item 2 -->
                <li>
                    <div class="direction-l wow slideInLeft" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Lorem ipsum Anim.</span>
                            <span class="time-wrapper"><span class="time">Dec 2015</span></span>
                        </div>
                        <div class="desc">Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore
                            aliquip enim cupidatat laborum dolore.</div>
                    </div>
                </li>

                <!-- Item 3 -->
                <li>
                    <div class="direction-r wow slideInRight" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Lorem Occaecat.</span>
                            <span class="time-wrapper"><span class="time">Aug 2015</span></span>
                        </div>
                        <div class="desc">Lorem ipsum Minim labore Ut cupidatat quis qui deserunt proident fugiat
                            pariatur cillum cupidatat reprehenderit sit id dolor consectetur ut.</div>
                    </div>
                </li>

                <li>
                    <div class="direction-l wow slideInLeft" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Lorem ipsum Anim.</span>
                            <span class="time-wrapper"><span class="time">July 2015</span></span>
                        </div>
                        <div class="desc">Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore
                            aliquip enim cupidatat laborum dolore.</div>
                    </div>
                </li>

                <!-- Item 5 -->
                <li>
                    <div class="direction-r wow slideInRight" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Lorem Occaecat.</span>
                            <span class="time-wrapper"><span class="time">May 2015</span></span>
                        </div>
                        <div class="desc">Lorem ipsum Minim labore Ut cupidatat quis qui deserunt proident fugiat
                            pariatur cillum cupidatat reprehenderit sit id dolor consectetur ut.</div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- //Content Section End -->
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
            new WOW().init();
        });
</script>

@stop