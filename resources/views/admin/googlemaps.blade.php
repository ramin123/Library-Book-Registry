@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Google Maps
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/gmaps/css/examples.css') }}"/>
    <link href="{{ asset('css/pages/googlemaps_custom.css') }}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Google Maps</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">Maps</a></li>
            <li class="active">Google Maps</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>Basic</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" style="padding:10px !important;">
                        <div id="gmap-top" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <span>Terrain</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" style="padding:10px !important;">
                        <div id="gmap-terrain" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <span>Satellite</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" style="padding:10px !important;">
                        <div id="gmap-satellite" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>Markers</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" style="padding:10px !important;">
                        <div id="gmap-markers" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-danger text-white ">
                        <span>Styled Maps</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" style="padding:10px !important;">
                        <div id="gmap-styled" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <!-- Basic charts strats here-->
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>Map Types</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" style="padding:10px !important;">
                        <div id="gmap-types" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?libraries=geometry&key={{ env('GOOGLE_MAPS_API_KEY') }}">
    </script>
    <script type="text/javascript" src="{{ asset('vendors/gmaps/js/gmaps.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/custommaps.js') }}"></script>
@stop
