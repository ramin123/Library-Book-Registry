@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Pie Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('css/pages/piecharts.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Pie Charts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Charts</a></li>
            <li class="active">Pie Charts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row ">
            <div class="col-md-6 col-sm-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> D3 Basic Pie chart
                        </span>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body text-center">
                        <div id="pie1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title bg-primary">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> D3 Pie chart with tooltips
                        </h3>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body text-center">
                        <div id="pie2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> D3 Pie chart with small segment
                        </span>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body text-center">
                        <div id="pie3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> D3 Donut chart
                        </span>
                        <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="card-body text-center">
                        <div id="pie4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/d3/d3.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/d3pie/d3pie.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('js/pages/custompiecharts.js') }}" ></script>

@stop
