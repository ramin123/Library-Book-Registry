@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
   Radio And Checkbox
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/iCheck/css/all.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/iCheck/css/line/line.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/switchery/css/switchery.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/formelements.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/awesome-bootstrap-checkbox.css') }}"/>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Radio and Checkbox
        </h1>
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
            <li class="active">
                Radio and checkbox
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->

        <div class="row">
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--checkbox picker-->
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            iCheck - Checkbox Inputs
                        </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="flat-red" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="flat-red"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="flat-red" disabled/>
                                </label>
                                <label>Flat red skin checkbox</label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="square" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="square"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="square" disabled/>
                                </label>
                                <label>Square skin checkbox</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal-blue" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-blue"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="minimal-blue" disabled/>
                                </label>
                                <label>Minimal skin checkbox</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="polaris" checked/>
                                </label>
                                <label>
                                    <input type="checkbox" class="polaris"/>
                                </label>
                                <label>
                                    <input type="checkbox" class="polaris" disabled/>
                                </label>
                                <label>Polaris skin checkbox</label>
                            </div>

                            <!-- Minimal red style -->
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>Line checkbox</label>
                                <input type="checkbox" class="line mar-t5" checked/>
                                <label>Checkbox1
                                </label>
                                <input type="checkbox" class="line mar-t5"/>
                                <label>Checkbox2
                                </label>
                                <input type="checkbox" class="line mar-t5" disabled/>
                                <label>Disable
                                </label>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!--col-md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--checkbox picker-->
                <div class="card ">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            iCheck - Radio Inputs
                        </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r3" class="flat-red" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r3" class="flat-red"/>
                                </label>
                                <label>
                                    <input type="radio" name="r3" class="flat-red" disabled/>
                                </label>
                                <label> Flat red skin radio</label>
                            </div>
                            <!-- radio -->
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r1" class="square" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r1" class="square"/>
                                </label>
                                <label>
                                    <input type="radio" name="r1" class="square" disabled/>
                                </label>
                                <label>Square skin radio</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r4" class="minimal-blue" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r4" class="minimal-blue"/>
                                </label>
                                <label>
                                    <input type="radio" name="r4" class="minimal-blue" disabled/>
                                </label>
                                <label>Minimal skin radio</label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r5" class="polaris" checked/>
                                </label>
                                <label>
                                    <input type="radio" name="r5" class="polaris"/>
                                </label>
                                <label>
                                    <input type="radio" name="r5" class="polaris" disabled/>
                                </label>
                                <label>Polaris skin radio</label>
                            </div>

                            <!-- Minimal red style -->
                            <!-- radio -->
                            <div class="form-group">
                                <label>Line radio</label>
                                <input type="radio" name="r2" class="line" checked/>
                                <label>Radio button1
                                </label>
                                <input type="radio" name="r2" class="line"/>
                                <label>Radio button2
                                </label>
                                <input type="radio" name="r2" class="line" disabled/>
                                <label>Disabled
                                </label>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!--col-md-6 ends-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="magnet" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Bootstrap Switch
                        </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <!--switch -->
                        <div class="form-group">
                            <label>Default Sizes</label>

                            <div class="form-group">
                                <input type="checkbox" name="my-checkbox" data-size="mini" checked>
                                <input type="checkbox" name="my-checkbox" data-size="small" checked>
                                <input type="checkbox" name="my-checkbox" data-size="normal" checked>
                                <input type="checkbox" name="my-checkbox" data-size="large">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!--switch -->
                        <div class="form-group">
                            <label>Color Switch</label>

                            <div class="form-group">
                                <input type="checkbox" name="my-checkbox" checked data-on-color="primary"
                                       data-off-color="info">
                                <input type="checkbox" name="my-checkbox" checked data-on-color="success"
                                       data-off-color="warning">
                                <input type="checkbox" name="my-checkbox" checked data-on-color="warning"
                                       data-off-color="danger">
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!--switch -->
                        <div class="form-group">
                            <label>Animate</label>

                            <div class="form-group">
                                <input type="checkbox" name="my-checkbox" data-on-color="info"
                                       data-off-color="primary" data-animate>
                                <input type="checkbox" name="my-checkbox" checked data-on-color="danger"
                                       data-off-color="warning" data-animate>
                                <input type="checkbox" name="my-checkbox" checked data-on-color="warning"
                                       data-off-color="success" data-animate>
                            </div>
                        </div>
                        <!-- /.form group -->
                        <!--switch -->
                        <div class="form-group">
                            <label>Disabled / Readonly</label>

                            <div class="form-group">
                                <input type="checkbox" checked disabled name="my-checkbox"/>
                                <input type="checkbox" name="my-checkbox" readonly/>
                            </div>
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
                <!--select-->
            </div>
            <!--col-md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-success text-white ">
                        <span>
                            <i class="livicon" data-name="magnet" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Switchery
                        </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable text-white"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <!--switch -->
                        <div class="form-group">
                            <div class="color">
                                <label>Switchery Sizes</label></div>
                            <input type="checkbox" class="js-switch" checked/> Small &nbsp;
                            <input type="checkbox" class="js-switch2" checked/> Medium &nbsp;
                            <input type="checkbox" class="js-switch3" checked/> Big
                        </div>
                        <div class="form-group">
                            <div class="color">
                                <label>Switchery Colors</label></div>
                            <input type="checkbox" class="js-switch4" checked/>
                            <input type="checkbox" class="js-switch5" checked/>
                            <input type="checkbox" class="js-switch6" checked/>
                        </div>
                        <div class="form-group">
                            <div class="color">
                                <label>Multiple switches</label></div>
                            <input type="checkbox" class="js-switch7"/>
                            <input type="checkbox" class="js-switch8" checked/>
                            <input type="checkbox" class="js-switch9"/>
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
            </div>
        </div>
<div class="row">
        <div class="col-md-12 col-lg-6 col-12 my-3">
            <!--checkbox picker-->
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                       Advanced Check boxes
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <div class="form-group">
                            <p class="mt-3"><b>Checkboxes with indeterminate state :</b></p>
                            <div class="form-check abc-checkbox abc-checkbox-primary">
                                <input class="form-check-input" id="checkbox10" type="checkbox" onclick="changeState(this)">
                                <label class="form-check-label" for="checkbox10">
                                </label>
                            </div>
                            <p class="mt-3"><b>Checkboxes without label text : </b></p>
                            <div class="form-check abc-checkbox">
                                <input class="form-check-input" type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                <label class="form-check-label" for="singleCheckbox1"></label>
                            </div>
                            <div class="form-check abc-checkbox abc-checkbox-primary">
                                <input class="form-check-input" type="checkbox" id="singleCheckbox2" value="option2" checked aria-label="Single checkbox Two">
                                <label class="form-check-label" for="singleCheckbox2"></label>
                            </div>
                            <p class="mt-3"><b>Checkboxes with colors: </b></p>
                            <div class="form-check abc-checkbox abc-checkbox-primary">
                                <input class="form-check-input" id="checkbox2" type="checkbox" checked>
                                <label class="form-check-label" for="checkbox2">
                                    Primary
                                </label>
                            </div>
                            <div class="form-check abc-checkbox abc-checkbox-success">
                                <input class="form-check-input" id="checkbox3" type="checkbox">
                                <label class="form-check-label" for="checkbox3">
                                    Success
                                </label>
                            </div>
                            <div class="form-check abc-checkbox abc-checkbox-info">
                                <input class="form-check-input" id="checkbox4" type="checkbox">
                                <label class="form-check-label" for="checkbox4">
                                    Info
                                </label>
                            </div>
                            <div class="form-check abc-checkbox abc-checkbox-warning">
                                <input class="form-check-input" id="checkbox5" type="checkbox" checked>
                                <label class="form-check-label" for="checkbox5">
                                    Warning
                                </label>
                            </div>
                            <div class="form-check abc-checkbox abc-checkbox-danger">
                                <input class="form-check-input" id="checkbox6" type="checkbox" checked>
                                <label class="form-check-label" for="checkbox6">
                                    Danger
                                </label>
                            </div>
                            <p class="mt-3"><b>Circle checkboxes: </b></p>
                            <div class="form-check abc-checkbox abc-checkbox-circle">
                                <input class="form-check-input" id="checkbox7" type="checkbox">
                                <label class="form-check-label" for="checkbox7">
                                    Simply Rounded
                                </label>
                            </div>
                            <div class="form-check abc-checkbox abc-checkbox-info abc-checkbox-circle">
                                <input class="form-check-input" id="checkbox8" type="checkbox" checked>
                                <label class="form-check-label" for="checkbox8">
                                    Me too
                                </label>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    <div class="col-md-12 col-lg-6 col-12 my-3">
        <!--checkbox picker-->
        <div class="card ">
            <div class="card-header bg-primary text-white">
                <span>
                    <i class="livicon" data-name="alarm" data-size="16" data-loop="true" data-c="#fff"
                       data-hc="white"></i>
                    Advanced Radio boxes
                </span>
                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
            </div>
            <div class="card-body">
                <div class="form-check abc-radio abc-radio-primary">
                    <input class="form-check-input" type="radio" name="radio1" id="radio1" value="option1" checked>
                    <label class="form-check-label" for="radio1">
                        Male
                    </label>
                </div>
                <div class="form-check abc-radio abc-radio-primary">
                    <input class="form-check-input" type="radio" name="radio1" id="radio2" value="option2">
                    <label class="form-check-label" for="radio2">
                        Female
                    </label>
                </div>
                <p class="mt-3"><b>Radio without label text : </b></p>
                <div class="form-check abc-radio abc-radio-success">
                    <input class="form-check-input" type="radio" id="singleRadio1" value="option1" name="radioSingle1" aria-label="Single radio One">
                    <label class="form-check-label" for="singleRadio1"></label>
                </div>
                <div class="form-check abc-radio abc-radio-success">
                    <input class="form-check-input" type="radio" id="singleRadio2" value="option2" name="radioSingle1" checked aria-label="Single radio Two">
                    <label class="form-check-label" for="singleRadio2"></label>
                </div>
                <p class="mt-3"><b>Inline Radios </b></p>
                <div class="form-check abc-radio abc-radio-info form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                    <label class="form-check-label" for="inlineRadio1"> Inline One </label>
                </div>
                <div class="form-check abc-radio form-check-inline abc-radio-info">
                    <input class="form-check-input" type="radio" id="inlineRadio2" value="option2" name="radioInline">
                    <label class="form-check-label" for="inlineRadio2"> Inline Two </label>
                </div>
                <p class="mt-3"><b>Radios with colors </b></p>
                <div class="form-check abc-radio abc-radio-primary">
                    <input class="form-check-input" type="radio" name="radio2" id="radio3" value="option1">
                    <label class="form-check-label" for="radio3">
                        Primary
                    </label>
                </div>
                <div class="form-check abc-radio abc-radio-success">
                    <input class="form-check-input" type="radio" name="radio2" id="radio4" value="option2" checked>
                    <label class="form-check-label" for="radio4">
                        Success
                    </label>
                </div>
                <div class="form-check abc-radio abc-radio-danger">
                    <input class="form-check-input" type="radio" name="radio2" id="radio5" value="option1">
                    <label class="form-check-label" for="radio5">
                        Danger
                    </label>
                </div>
                <div class="form-check abc-radio abc-radio-info">
                    <input class="form-check-input" type="radio" name="radio2" id="radio6" value="option2" checked>
                    <label class="form-check-label" for="radio6">
                        Info
                    </label>
                </div>
                <div class="form-check abc-radio abc-radio-warning">
                    <input class="form-check-input" type="radio" name="radio2" id="radio7" value="option2" checked>
                    <label class="form-check-label" for="radio7">
                        Warning
                    </label>
                </div>
            </div>
        </div>
    </div>
    </div>
        <!--main content ends-->
    </section>
    <!-- content -->

    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/card/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('js/pages/radio_checkbox.js') }}"></script>

    @stop
