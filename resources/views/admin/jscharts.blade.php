@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
JS Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('css/pages/jscharts.css') }}" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>JSCharts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Charts</a></li>
            <li class="active">JS Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-info text-white">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Bar Chart
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="bar-chart" width="800" height="300" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Polar Area Chart
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="polar-area-chart" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Line Chart
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="line-chart" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Radar Chart
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="radar-chart" width="800" height="300" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-danger text-white ">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Donut Chart
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="doughnut-chart" width="800" height="300" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="barchart" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Pie  Charts
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="pie-chart" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
    <script src="{{ asset('js/pages/chartjs.js') }}" ></script>
@stop
