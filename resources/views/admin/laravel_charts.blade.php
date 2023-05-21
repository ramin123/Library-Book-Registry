@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Simple Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')


@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Simple Charts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">Laravel Charts</a>
        </li>
        <li class="active">Simple Charts</li>
    </ol>
</section>

<!-- Main content -->
<section class="content pr-3 pl-3">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 my-3">
            <!-- Stack charts strats here-->
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Bar Chart
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="app">
                        {!! $bar->container() !!}
                    </div>
                    <!-- End Of Main Application -->

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 my-3">
            <!-- Stack charts strats here-->
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Line Chart
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="app">
                        {!! $line->container() !!}
                    </div>
                    <!-- End Of Main Application -->
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 my-3">
            <!-- Stack charts strats here-->
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Area Chart
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="app">
                        {!! $area->container() !!}
                    </div>
                    <!-- End Of Main Application -->
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 my-3">
            <!-- Stack charts strats here-->
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Pie Chart
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="app">
                        {!! $pie->container() !!}
                    </div>
                    <!-- End Of Main Application -->
                </div>
            </div>
        </div>
    </div>


</section>
<!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/frappe/frappe-charts.min.iife.js') }}"></script>
<script src="{{ asset('vendors/highcharts/highcharts.js') }}" charset="utf-8"></script>
{!! $bar->script() !!}
{!! $line->script() !!}
{!! $area->script() !!}
{!! $pie->script() !!}
@stop