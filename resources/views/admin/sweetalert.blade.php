@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Sweet alerts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}"/>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Sweet Alert</h1>
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
        <li class="active">Sweet Alert</li>
    </ol>
</section>
<!--section ends-->
<!-- Main content -->
<section class="content pl-3 pr-3">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Basic Sweet Alerts
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-outline-info" id="btn1">
                                Simple Alert
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-outline-info" id="btn2">Some
                                Large Text
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-outline-info" id="btn3">Success
                                Alert
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Advanced Sweet Alerts
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <button type="button" class="btn   btn-outline-primary" id="btn4">
                                    Submit action
                                </button>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <button type="button" class="btn   btn-outline-primary" id="btn5">
                                    Both Submit and Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix visible-md"></div>
    <div class="row my-3">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Sweet Alerts with images
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn   btn-outline-info" id="btn6">Simple
                            Image
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn   btn-outline-info" id="btn7">Simple
                            Image2
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Sweet Alerts with closing time
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn btn-outline-primary" id="btn8">Auto
                            Close
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="button" class="btn btn-outline-primary" id="btn9">Ajax usage
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Sweet Alerts with Animation
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-outline-info" id="btn11">RubberBand
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-outline-info" id="btn10">Tada
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4">
                            <button type="button" class="btn btn-outline-info" id="btn12">Swing
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Other Examples
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <button type="button" class="btn btn-outline-primary" id="btn14">Wizard
                            </button>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button type="button" class="btn btn-outline-primary" id="btn15">What is my Ip?
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i> Sweetalert positions
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <button type="button" class="btn btn-outline-info" id="btn16">Top Right
                            </button>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button type="button" class="btn btn-outline-info" id="btn17">Bottom Left
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
<script>
var image="{{ asset('images/c1.jpg') }}";
var image1="{{ asset('images/c2.jpg') }}";

</script>
@stop
