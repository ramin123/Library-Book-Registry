@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Database Charts
@parent
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Database Charts</h1>
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
        <li class="active">Database Charts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content pr-3 pl-3">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 my-3">
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Bar chart (by age)
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    {!! $bar->container() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-12 my-3">
            <!-- Stack charts strats here-->
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Bar chart (by country)
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="app">

                        {!! $country->container() !!}

                    </div>
                    <!-- End Of Main Application -->

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 my-3">
            <div class="card ">
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
                    {!! $pie->container() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Donut chart
                    </span>
                    <span class="float-right">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    {!! $donut->container() !!}
                </div>
            </div>
        </div>


        <div class="col-lg-12 my-3">
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
                    {!! $area->container() !!}
                </div>
            </div>
        </div>

        <div class="col-lg-12 my-3">
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
                    {!! $line->container() !!}
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
<script src="{{ asset('vendors/chartjs/js/Chart.js') }}" charset="utf-8"></script>
{!! $bar->script() !!}
{!! $country->script() !!}
{!! $pie->script() !!}
{!! $donut->script() !!}
{!! $area->script() !!}
{!! $line->script() !!}
@stop