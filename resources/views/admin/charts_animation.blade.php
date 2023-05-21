@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Animation Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/animationcharts/jquery.circliful.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/charts.css') }}" rel="stylesheet" type="text/css"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Animated Charts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">Charts</a></li>
            <li class="active">Animated Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-lg-12 col-12 col-md-12 col-sm-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="vector-circle" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="#fff"></i>
                            Circular Charts
                        </span>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 center">
                                <span id="myStathalf" data-dimension="210" data-text="45% Views" data-fontsize="18"
                                      data-percent="45" data-fgcolor="#60BA3B" data-bgcolor="#eee" data-type="half"
                                      data-fill="#ddd"></span>
                            </div>
                            <div class="col-lg-3 col-sm-6  center">
                                <span id="myStat" data-dimension="210" data-text="75% Subscribes" data-info="Sales"
                                      data-fontsize="15" data-percent="75" data-fgcolor="#E4664B" data-bgcolor="#eee"
                                      data-fill="#ddd"></span>
                            </div>
                            <div class="col-lg-3  col-sm-6 center">
                                <span id="myStathalf2" data-dimension="210" data-text="25% Sales" data-info="Subscribes"
                                      data-fontsize="18" data-percent="25" data-fgcolor="#3FB0DC" data-bgcolor="#eee"
                                      data-type="half" data-icon="fa-task"></span>
                            </div>
                            <div class="col-lg-3 col-sm-4 center">
                                <span id="myStat2" data-dimension="210" data-text="85% New Users" data-info="New Users"
                                      data-fontsize="15" data-percent="85" data-fgcolor="#F79646"
                                      data-bgcolor="#eee"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Stack charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="#fff"></i>
                            Animation Wave
                        </span>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div id="chart4" class="animation-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Stack charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="#fff"></i>
                            Animation Area
                        </span>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div id="chart3" class="animation-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Stack charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="#fff"></i>
                            Animation On Points
                        </span>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div id="chart2" class="animation-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Stack charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="#fff"></i>
                            Animation on Bar Chart
                        </span>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div id="chart1" class="animation-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/animatechart/js/jquery.flot.animator.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/animationcharts/jquery.circliful.min.js') }}"></script>
    <script src="{{ asset('vendors/flotchart/js/jquery.flot.resize.js') }}" language="javascript"
            type="text/javascript"></script>
    <script src="{{ asset('js/pages/animation-chart.js') }}"></script>

@stop
