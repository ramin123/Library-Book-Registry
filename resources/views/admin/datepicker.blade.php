@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Date Picker
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('vendors/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
<style>
    .ranges li.active {
        color: #fff !important;
    }
</style>

@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Date pickers</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
        <li class="active">Date pickers</li>
    </ol>
</section>
<!--section ends-->
<section class="content pl-3 pr-3">
    <!--main content-->
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Date Time Picker
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label>Custom Format:</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="livicon" data-name="laptop"
                                                data-size="16" data-c="#555555" data-hc="#555555"
                                                data-loop="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="datetime2" />
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Min View:</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="livicon" data-name="laptop"
                                                data-size="16" data-c="#555555" data-hc="#555555"
                                                data-loop="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="datetime4" />
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Inline View:</label>
                            <div id="datetime5"></div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <!--ends-->
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Date Range Picker
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <label>
                                Default:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="calendar"
                                            data-size="16" data-c="#555555" data-hc="#555555"
                                            data-loop="true"></i></span>
                                </div>
                                <input type="text" class="form-control" id="daterange1" />
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- phone mask -->
                        <div class="form-group">
                            <label>
                                Date and Time:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="phone" data-size="16"
                                            data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input type="text" class="form-control" id="daterange2" />
                            </div>
                        </div>
                        <!-- /.input group -->
                        <!-- /.form group -->
                        <!-- phone mask -->
                        <div class="form-group">
                            <label>
                                Predefined Range:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="phone" data-size="16"
                                            data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input type="text" class="form-control" id="daterange3" />
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <!-- IP mask -->
                        <div class="form-group">
                            <label>Single Date Picker:</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="laptop" data-size="16"
                                            data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input type="text" class="form-control" id="rangepicker4" />
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
            </div>
            <!--select2 starts-->
            <div class="card my-3">
                <div class="card-header bg-success text-white ">
                    <span>
                        <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Clock Picker
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable text-white"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label>
                                Default:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="clock" data-size="16"
                                            data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input type="text" class="form-control" id="clockface1" value="2:30 PM"
                                    data-format="hh:mm A" />
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>
                                Read only:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="clock" data-size="16"
                                            data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input type="text" class="form-control input-small" id="clockface2" value="14:30"
                                    readonly="">
                            </div>
                        </div>
                        <!-- /.input group -->
                        <!-- /.form group -->
                        <div class="form-group">
                            <label>
                                Inline:
                            </label>
                            <div id="clockface3">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-lg-6 col-12 my-3">

            <!--select2 starts-->
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Masking
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Time Mask:</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="livicon" data-name="laptop" data-size="16"
                                        data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                </span></div>
                            <input type="text" class="form-control" data-mask="99:99:99" placeholder="HH:MM:SS">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Date Mask:</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="livicon" data-name="laptop" data-size="16"
                                        data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                </span> </div>
                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="MM/DD/YYYY" />
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Date-Time Mask:</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="livicon" data-name="laptop" data-size="16"
                                        data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                </span> </div>
                            <input type="text" class="form-control" data-mask="99/99/9999 99:99:99"
                                placeholder="MM/DD/YYYY HH:mm:ss">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Phone Mask:</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"> <i class="livicon" data-name="laptop" data-size="16"
                                        data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                </span> </div>
                            <input type="text" id="phone_mask" class="form-control" data-mask="(999)999-9999"
                                placeholder="(999)999-9999">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.input group -->
                </div>
                <!--ends-->
            </div>
        </div>
    </div>
    <!--select2 ends-->
    <!--main content ends-->
</section>
<!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/clockface/js/clockface.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/datepicker.js') }}" type="text/javascript"></script>
@stop