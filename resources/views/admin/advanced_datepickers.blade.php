@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Advanced Date and Time pickers
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/airDatepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/flatpickr/css/flatpickr.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('css/pages/adv_date_pickers.css') }}" rel="stylesheet" type="text/css"/>
@stop


{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Advanced Date picker slider</h1>
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
            <li class="active">Advanced Date and Time pickers</li>
        </ol>
    </section>
    <!--section ends-->
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header bg-success text-white ">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Date Pickers
                        </span>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable text-white"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="fancy">
                                    Date Selector :
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                       <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                         data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="flatpickr flatpickr-input form-control" type="text" placeholder="select date">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label for="fancy">
                                    Textual Format :
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                       <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                           data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr" data-dateFormat="l, F j, Y" id="textual">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- phone mask -->
                            <div class="form-group">
                                <label  for="min_max">
                                    MinDate and MaxDate: (from today to next 14days)
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                       <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                           data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr" data-mindate=today data-maxdate='2017-12-31' id="min_max">
                                </div>
                            </div>
                            <!-- /.input group -->
                            <!-- /.form group -->
                            <!-- phone mask -->
                            <div class="form-group">
                                <label for="elements">
                                    Custom Elements and Input Groups :
                                </label>
                                <div>
                                    <p class="flatpickr input-group" data-wrap="true" data-clickOpens="false">
                                        <input class="form-control" placeholder="Pick date" data-input id="elements">
                                        <span class="input-group-append add-on">
                                            <a class="input-btn" data-toggle>
                                                <span class="input-group-text remove_radius"> <i class="livicon" data-name="calendar" data-size="23"
                                                   data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                            </a>
                                        </span>
                                        <span class="input-group-append add-on">
                                            <a class="input-btn" data-clear>
                                                 <span class="input-group-text"><i class="livicon" data-name="remove" data-size="23"
                                                   data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                            </a>
                                        </span>
                                    </p>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- IP mask -->
                            <div class="form-group">
                                <label for="datetimepicker">DateTime Picker With 24 Hour Mode:</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                           data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr" data-enabletime=true data-time_24hr=true
                                           data-timeFormat="H:i" id="datetimepicker">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="datetimepicker">Multiple dates</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                           data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control flatpickr flatpickr-input active" type="text" data-id="multiple" placeholder="select multiple dates" id="multiple">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--select2 starts-->
                <div class="card my-3">
                    <div class="card-header bg-primary text-white ">
                       <span>
                            <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Advanced Date Pickers
                        </h3>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <!--  Multiple Dates -->
                            <div class="form-group">
                                <label for="multiple">
                                    Multiple Dates
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"> <i class="livicon" data-name="phone" data-size="16" data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input type="text" class="datepicker-here form-control" data-language='en' data-multiple-dates="4" data-multiple-dates-separator=", " data-position='bottom left' id="multiple"/>
                                </div>
                            </div>
                            <!-- /.input group -->
                            <!-- Disabled Days -->
                            <div class="form-group">
                                <label for="disable">
                                    Disabled Days:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="datepicker-here form-control" id="disabled-days">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- phone mask -->
                            <div class="form-group">
                                <label for="actions">
                                    Actions with time:
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="livicon" data-name="phone" data-size="16" data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="datepicker-here form-control" data-timepicker="true" data-time-format="hh:ii aa" id="timepicker-actions-exmpl">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- IP mask -->
                            <div class="form-group">
                                <label>Custom cells content:</label>
                                <div class="example">
                                    <div class="example--label"></div>
                                    <div class="example-content">
                                        <div class="list-inline">
                                            <div>
                                                <div id="custom-cells">
                                                    {{--<div class="datepicker-inline"><div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"><div class="datepicker--nav-action" data-action="prev"><svg><path d="M 17,12 l -5,5 l 5,5"></path></svg></div><div class="datepicker--nav-title">jan, <i>2018</i></div><div class="datepicker--nav-action" data-action="next"><svg><path d="M 14,12 l 5,5 l -5,5"></path></svg></div></nav><div class="datepicker--content"><div class="datepicker--days datepicker--body active"><div class="datepicker--days-names"><div class="datepicker--day-name -weekend-">Su</div><div class="datepicker--day-name">Mo</div><div class="datepicker--day-name">Tu</div><div class="datepicker--day-name">We</div><div class="datepicker--day-name">Th</div><div class="datepicker--day-name">Fr</div><div class="datepicker--day-name -weekend-">Sa</div></div><div class="datepicker--cells datepicker--cells-days"><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="25" data-month="1" data-year="2018">25</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="26" data-month="1" data-year="2018">26</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="27" data-month="1" data-year="2018">27</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="28" data-month="1" data-year="2018">28</div><div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="2" data-year="2018">1<span class="dp-note"></span></div><div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="2" data-year="2018">2</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="3" data-month="2" data-year="2018">3</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="4" data-month="2" data-year="2018">4</div><div class="datepicker--cell datepicker--cell-day" data-date="5" data-month="2" data-year="2018">5</div><div class="datepicker--cell datepicker--cell-day" data-date="6" data-month="2" data-year="2018">6</div><div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="2" data-year="2018">7</div><div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="2" data-year="2018">8</div><div class="datepicker--cell datepicker--cell-day" data-date="9" data-month="2" data-year="2018">9</div><div class="datepicker--cell datepicker--cell-day -weekend- -selected-" data-date="10" data-month="2" data-year="2018">10<span class="dp-note"></span></div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="11" data-month="2" data-year="2018">11</div><div class="datepicker--cell datepicker--cell-day" data-date="12" data-month="2" data-year="2018">12<span class="dp-note"></span></div><div class="datepicker--cell datepicker--cell-day" data-date="13" data-month="2" data-year="2018">13</div><div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="2" data-year="2018">14</div><div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="2" data-year="2018">15</div><div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="2" data-year="2018">16</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="17" data-month="2" data-year="2018">17</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="18" data-month="2" data-year="2018">18</div><div class="datepicker--cell datepicker--cell-day" data-date="19" data-month="2" data-year="2018">19</div><div class="datepicker--cell datepicker--cell-day" data-date="20" data-month="2" data-year="2018">20</div><div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="2" data-year="2018">21</div><div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="2" data-year="2018">22<span class="dp-note"></span></div><div class="datepicker--cell datepicker--cell-day -current-" data-date="23" data-month="2" data-year="2018">23</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="24" data-month="2" data-year="2018">24</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="25" data-month="2" data-year="2018">25</div><div class="datepicker--cell datepicker--cell-day" data-date="26" data-month="2" data-year="2018">26</div><div class="datepicker--cell datepicker--cell-day" data-date="27" data-month="2" data-year="2018">27</div><div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="2" data-year="2018">28</div><div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="2" data-year="2018">29</div><div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="2" data-year="2018">30</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="31" data-month="2" data-year="2018">31</div></div></div></div></div></div></div>--}}
                                                </div>
                                            </div>
                                            <div class="calender-content-style" id="custom-cells-events"><strong class="text-primary">04/10/2018</strong>
                                                <p class="light-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita prorsus, inquam; Si enim ad populum me vocas, eum. Ita prorsus, inquam; Nonne igitur tibi videntur, inquit, mala? Hunc vos beatum; Idemne, quod iucunde? </p></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--select2 starts-->
                <div class="card ">
                    <div class="card-header bg-info text-white">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="23" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Custom Date Pickers
                        </span>
                        <span class="float-right ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label  for="disableRangeMultiple">Disable Date Intervals: (3rd, 5th, 7th-10 dates from today are disabled)</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control" id="disableRangeMultiple">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">

                                <label for="check_in_date">Check-In, Check-out Date Picker:</label>

                            <div class="row">
                                <div class="col-sm-5 pad-0-res">
                                <div class="input-group">
                                    <div class="input-group-append">
                                         <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                           data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control" id="check_in_date" placeholder="Check-In Date">
                                </div>
                            </div>
                                <div class="col-sm-5 pad-0-res">
                                <div class="input-group">
                                    <div class="input-group-append">
                                         <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                           data-hc="#555555" data-loop="true"></i></span>
                                    </div>
                                    <input class="form-control" id="check_out_date" placeholder="Check Out Date">
                                </div>
                            </div>
                        </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="display">Display Week Numbers:</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                     <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-weeknumbers=true
                                       placeholder="Enabled week numbers" id="display">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="preload">Preload Date and Time:</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                     <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-defaultDate="2016-03-01 03:30:00 -0300"
                                       data-enableTime="true" id="preload">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.input group -->
                        <div class="form-group">
                            <label for="datetimepicker">Range selector</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                        <span class="input-group-text"> <i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                                                           data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr flatpickr-input active" type="text" data-id="range" placeholder="select range" id="rangeflat">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <!--ends-->
                </div>
                <div class="card my-3">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Fancy Picker
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="timepicker">
                                Time Picker:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                     <span class="input-group-text"><i class="livicon" data-name="clock" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-enabletime=true data-nocalendar=true
                                       value="09:00" id="timepicker">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alt">
                                Human-friendly Date Output:
                            </label>
                            <div class="input-group">
                                <div class="input-group-append">
                                     <span class="input-group-text"><i class="livicon" data-name="calendar" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control flatpickr" data-dateFormat=" F j, Y" id="alt"
                                       placeholder="The real input is hidden :^)"/>
                            </div>
                            <strong>Selected date</strong>: <span id="realdate">nothing yet</span>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header bg-primary text-white ">
                        <span>
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Date And Time Picker
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="date_picker">Date Picker:</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                     <span class="input-group-text"><i class="livicon" data-name="laptop" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control datepicker1" type="text" placeholder="Try me.." id="date_picker">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="pickr">Time Picker:</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"> <i class="livicon" data-name="laptop" data-size="16" data-c="#555555"
                                       data-hc="#555555" data-loop="true"></i></span>
                                </div>
                                <input class="form-control timepicker" type="text" placeholder="Try me.." id="pickr">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!--ends-->
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <script src="{{ asset('vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/flatpickr/js/flatpickr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom_datepicker.js') }}" type="text/javascript"></script>

@stop
