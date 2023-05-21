@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Sliders
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('vendors/ion_rangeslider/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-slider/css/bootstrap-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/ion.css') }}" />
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Sliders</h1>
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
            <li class="active">Sliders</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="download" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Ion Range Sliders
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" id="slim1">
                        <!--ion-->
                        <form role="form" class="form-horizontal form-bordered">
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light control-label">Basic Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_1" class="form-control" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light control-label">Money Range</label>
                                        <div class="col-md-10">
                                            <input id="example_2" type="text" name="" value=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light control-label">Gold Range</label>
                                        <div class="col-md-10">
                                            <input id="example_3" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light  control-label">Temperature Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_4" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light control-label">Month Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_5" type="text" name="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-2 font-weight-light control-label">Year Range</label>
                                            <div class="col-md-10">
                                                <input id="example_6" type="text" name="" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light control-label">Year Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_7" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <div class="row">
                                        <label class="col-md-2 font-weight-light control-label">Ion range Slider</label>
                                        <div class="col-md-10">
                                            <input id="example_8" type="text" name="" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--ion ends-->
                </div>
            </div>

            <div class="col-md-12 my-2">
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>
                            <i class="livicon" data-name="globe" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Bootstrap Sliders
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body" id="slim2">
                        <!--slider-->
                        <div class="row">
                            <div class="col-12">
                                <form role="form" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row my-2">
                                                <label class="col-md-2 font-weight-light  control-label">Basic Slider</label>
                                                <div class="col-md-10">

                                                    <input id="ex1" data-slider-id='ex1Slider' type="text" class="slider-handle min-slider-handle round"  data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row my-5">
                                                <label class="col-md-2 font-weight-light  control-label">Money Range</label>
                                                <div class="col-md-10"> <b style="margin-right: 15px;">€ 10</b>
                                                    <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-id='ex2Slider' data-slider-step="5" data-slider-value="[250,450]"/>
                                                    <b class="slider-padding">€ 1000</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row my-3">
                                                <label class="col-md-2 font-weight-light  control-label">Color Range</label>
                                                <div class="col-md-10">
                                                    <div class="well">
                                                        <p>
                                                            <b>R</b>
                                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                                        </p>
                                                        <p>
                                                            <b>G</b>
                                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                                        </p>
                                                        <p>
                                                            <b>B</b>
                                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                                        </p>
                                                        <div id="RGB"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="row my-2">
                                                    <label class="col-md-2 font-weight-light  control-label">Vertical Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex4" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-id='ex3Slider' data-slider-value="-3" data-slider-orientation="vertical" data-slider-reversed="true"/>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group destroy-margt">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light control-label">Destroy</label>
                                                    <div class="col-md-10">
                                                        <input id="ex5" type="text" data-slider-min="-5" data-slider-id='ex4Slider' data-slider-max="20" data-slider-step="1" data-slider-value="0"/>
                                                        <button type="button" id="destroyEx5Slider" class='btn btn-danger'>Click to Destroy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Current Range</label>
                                                    <div class="col-md-10">
                                                        <input id="bootstrap_slider6" type="text" class="form-control slider-handle min-slider-handle round" data-slider-id='bootstrap_slider6' data-slider-min="-5"  data-slider-max="20" data-slider-step="1" data-slider-value="3"/>
                                                        <span id="ex6CurrentSliderValLabel" style="margin-left: 10px;">
                                                                Current Slider Value:
                                                                <span id="ex6SliderVal">3</span>
                                                            </span>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Enable Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex7" class="slider-handle min-slider-handle round" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false" data-slider-id='ex5Slider' data-slider-id="RED"/>
                                                        <input id="ex7-enabled" type="checkbox" style="margin-left: 10px;"/> Enabled
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group slider_tooltip">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Tooltip Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex8" class="slider-handle min-slider-handle round form-control" data-slider-id='ex8' type="text" data-slider-min="0"  data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Precision Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex9" class="slider form-control"    data-slider-precision="2.5" data-slider-step="0.01" data-slider-value="8.115" data-slider-id='ex9Slider'  type="text" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Marks and Lables</label>
                                                    <div class="col-md-10">
                                                        <input id="ex10" type="text" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]' data-slider-id='ex6Slider' data-slider-ticks-positions="[0, 30, 60, 80, 100]" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Hidden Slider</label>
                                                    <div class="col-md-10">
                                                        <a class="btn btn-primary" href="" id="ex20a">Show</a>
                                                        <div class="well" style="display: none">
                                                            <input id="ex11" type="text"
                                                                   data-provide="slider"
                                                                   data-slider-ticks="[1, 2, 3]"
                                                                   data-slider-ticks-labels='["short", "medium", "long"]'
                                                                   data-slider-min="1"
                                                                   data-slider-max="3"
                                                                   data-slider-step="1"
                                                                   data-slider-value="3"
                                                                   data-slider-id='ex7Slider'
                                                                   data-slider-tooltip="hide" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Reset Slider</label>
                                                    <div class="col-md-10">
                                                        <div class="well">
                                                            <input id="ex12" data-slider-id="ex26Slider" type="text" class="slider-handle min-slider-handle round"data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="10"/>
                                                            <button id="ex12_Refresh" class='btn btn-primary'>Reset</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group last">
                                                <div class="row my-5">
                                                    <label class="col-md-2 font-weight-light  control-label">Step Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex13"  type="text" data-slider-handle="custom" data-slider-step="20000" data-slider-min="0" data-slider-max="20000"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!--slider ends-->
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
    <script src="{{ asset('vendors/ion_rangeslider/js/ion.rangeSlider.js') }}" ></script>
    <script src="{{ asset('vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('vendors/ion_rangeslider/js/ion.rangeSlider.js') }}" ></script>
    <script src="{{ asset('vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    <script src="{{ asset('js/pages/sliders.js') }}"></script>
@stop
