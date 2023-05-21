@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Pickers
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('vendors/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pages/pickers.css') }}" rel="stylesheet" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>
                    Pickers
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Components</a>
                    </li>
                    <li class="active">Pickers</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content pl-3 pr-3">
    <!--main content-->
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <!--time picker-->
            <div class="card ">
                <div class="card-header bg-danger text-white ">
                    <span>
                        <i class="livicon" data-name="cloud-snow" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                        Bootstrap TouchSpin
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Postfix</label>
                            <input id="demo1" type="text" value="55" name="demo1" class="form-control">
                        </div>
                        <!-- /.form group -->
                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Prefix</label>

                            <div class="form-group">
                                <input id="demo2" type="text" value="0" name="demo2" class="form-control">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Vertical button alignment</label>

                            <div class="form-group">
                                <input id="demo_vertical" type="text" value="" name="demo_vertical">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Vertical buttons with custom icons</label>

                            <div class="form-group">
                                <input id="demo_vertical2" type="text" value="" name="demo_vertical2">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Init with empty value</label>

                            <div class="form-group">
                                <input id="demo3" type="text" value="" name="demo3">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Value attribute is not set (applying settings.initval)</label>

                            <div class="form-group">
                                <input id="demo3_21" type="text" value="" name="demo3_21">
                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- Touch spin -->
                        {{--<div class="form-group">--}}
                            {{--<label>Button postfix (small)</label>--}}

                            {{--<div class="fnt_12">--}}
                                {{--<input id="demo4" type="text" value="" name="demo4" class="input-sm">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- /.form group -->

                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Button postfix (large)</label>

                            <div class="input-group-lg ">
                                <input id="demo4_2" type="text" value="" name="demo4_2"
                                       >
                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- Touch spin -->
                        <div class="form-group">
                            <label>Button group</label>

                            <div class="form-group">
                                <div class="input-group">
                                    <input id="demo5" type="text" class="form-control" name="demo5" value="50">
                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 my-3">
            <!--Spinners-->
            <div class="card ">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                        General Pickers
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <!--switch -->
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="spinners">
                            <label>Quality</label>

                            <div class="input-group spinner" data-trigger="spinner">
                                <input type="text" class="form-control" value="1" data-rule="quantity">

                                <div class="input-group-append">
                                    <a href="javascript:;" class="spin-up" data-spin="up"> <span class="input-group-text radius_left"><i
                                                class="fa fa-chevron-up icon-pos"></i></span></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"> <span class="input-group-text radius_left1"><i
                                                class="fa fa-chevron-down icon-pos"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--switch-->
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="spinners">
                            <label>Currency</label>

                            <div class="input-group spinner" data-trigger="spinner">
                                <input type="text" class="form-control" value="1" data-rule="currency">

                                <div class="input-group-append">
                                    <a href="javascript:;" class="spin-up" data-spin="up"> <span class="input-group-text radius_left up"><i
                                                class="fa fa-chevron-up icon-pos"></i></span></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"> <span class="input-group-text  radius_left1 down"><i
                                                class="fa fa-chevron-down icon-pos"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--switch-->
                    <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="spinners">
                            <label>Percent:</label>

                            <div class="input-group spinner" data-trigger="spinner">
                                <input type="text" class="form-control" value="1" data-rule="percent">

                                <div class="input-group-append">
                                    <a href="javascript:;" class="spin-up" data-spin="up"> <span class="input-group-text radius_left"><i
                                                class="fa fa-chevron-up icon-pos"></i></span></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"> <span class="input-group-text radius_left1"><i
                                                class="fa fa-chevron-down icon-pos"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--switch-->
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="spinners">
                            <label>Customize</label>

                            <div class="input-group spinner" data-trigger="spinner" id="customize-spinner">
                                <input type="text" class="form-control" value="0" data-max="200" data-min="0"
                                       data-step="2">

                                <div class="input-group-append">
                                    <a href="javascript:;" class="spin-up" data-spin="up"> <span class="input-group-text radius_left"><i
                                                class="fa fa-chevron-up icon-pos"></i></span></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"> <span class="input-group-text radius_left1"><i
                                                class="fa fa-chevron-down icon-pos"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <p>Event handler: changed</p>

                        <p>
                            Old = <span id="old-val"></span>, New = <span id="new-val"></span>
                        </p>
                    </div>
                    </div>
                    <!--switch -->
                    <div class="spinners">
                        <div class="form-group">
                            <label>Disabled</label>

                            <div class="input-group spinner" data-trigger="spinner" id="customize-spinner">
                                <input type="text" class="form-control" value="100" data-max="200" data-min="0"
                                       data-step="1" disabled="disabled">

                                <div class="input-group-append">
                                    <a href="javascript:;" class="spin-up" data-spin="up">
                                        <span class="input-group-text radius_left"><i
                                                class="fa fa-chevron-up icon-pos"></i></span></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"> <span class="input-group-text radius_left1"><i
                                                class="fa fa-chevron-down icon-pos "></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
            </div>
        </div>
        <!--col-md-6 ends-->
    </div>
    <!--main content ends-->
</section>
            <!-- content -->

    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <!--touchspin-->
    <script src="{{ asset('vendors/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/bootstrap-multiselect/js/bootstrap-multiselect.js') }}" ></script>
    <!--spinner-->
    <script src="{{ asset('vendors/jquery-spinner/js/jquery.spinner.min.js') }}" ></script>
    <script src="{{ asset('js/pages/pickers.js') }}" ></script>

@stop
