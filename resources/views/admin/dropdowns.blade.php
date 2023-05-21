@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Drop Downs
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link type="text/css" href="{{ asset('vendors/bootstrap-multiselect/css/bootstrap-multiselect.css') }}"
      rel="stylesheet"/>
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/selectize/css/selectize.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/iCheck/css/line/line.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/bootstrap-switch/css/bootstrap-switch.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendors/switchery/css/switchery.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/formelements.css') }}" rel="stylesheet"/>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>
        Drop Downs
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
            Drop Downs
        </li>
    </ol>
</section>
<!--section ends-->
<section class="content dropdownspage  pr-3 pl-3">
    <!--main content-->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-12 ">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                        Select2
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="select21" class="control-label">
                            Select2 single select
                        </label>
                        <select id="select21" class="form-control select2">
                            <option value="">Select value...</option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">
                                    North Dakota
                                </option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">
                                    Mississippi
                                </option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">
                                    South Dakota
                                </option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">
                                    Connecticut
                                </option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">
                                    Massachusetts
                                </option>
                                <option value="MI">Michigan</option>
                                <option value="NH">
                                    New Hampshire
                                </option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">
                                    North Carolina
                                </option>
                                <option value="OH">Ohio</option>
                                <option value="PA">
                                    Pennsylvania
                                </option>
                                <option value="RI">
                                    Rhode Island
                                </option>
                                <option value="SC">
                                    South Carolina
                                </option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">
                                    West Virginia
                                </option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select22" class="control-label">
                            Select2 multi select
                        </label>
                        <select id="select22" class="form-control select2" multiple>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">
                                    North Dakota
                                </option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">
                                    Mississippi
                                </option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">
                                    South Dakota
                                </option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">
                                    Connecticut
                                </option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">
                                    Massachusetts
                                </option>
                                <option value="MI">Michigan</option>
                                <option value="NH">
                                    New Hampshire
                                </option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">
                                    North Carolina
                                </option>
                                <option value="OH">Ohio</option>
                                <option value="PA">
                                    Pennsylvania
                                </option>
                                <option value="RI">
                                    Rhode Island
                                </option>
                                <option value="SC">
                                    South Carolina
                                </option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">
                                    West Virginia
                                </option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select23" class="control-label">
                            Select2 single select with country flag
                        </label>
                        <select id="select23" class="form-control select2">
                            <option value="">Select a value...</option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">
                                    North Dakota
                                </option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">
                                    Mississippi
                                </option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">
                                    South Dakota
                                </option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">
                                    Connecticut
                                </option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">
                                    Massachusetts
                                </option>
                                <option value="MI">Michigan</option>
                                <option value="NH">
                                    New Hampshire
                                </option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">
                                    North Carolina
                                </option>
                                <option value="OH">Ohio</option>
                                <option value="PA">
                                    Pennsylvania
                                </option>
                                <option value="RI">
                                    Rhode Island
                                </option>
                                <option value="SC">
                                    South Carolina
                                </option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">
                                    West Virginia
                                </option>
                            </optgroup>
                        </select>
                    </div>




                    <div class="form-group">
                        <label for="select24" class="control-label ">
                            Select2 append
                        </label>
                        <div class="input-group-append radius_left">
                            <select id="select24" >
                                <option value="">Select value...</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">
                                        North Dakota
                                    </option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">
                                        Mississippi
                                    </option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">
                                        South Dakota
                                    </option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">
                                        Connecticut
                                    </option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">
                                        Massachusetts
                                    </option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">
                                        New Hampshire
                                    </option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">
                                        North Carolina
                                    </option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">
                                        Pennsylvania
                                    </option>
                                    <option value="RI">
                                        Rhode Island
                                    </option>
                                    <option value="SC">
                                        South Carolina
                                    </option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">
                                        West Virginia
                                    </option>
                                </optgroup>
                            </select>
                            <div class="input-group-append">
                                <!--<button class="btn btn-secondary" type="button" data-select2-open="single-append-text">-->
                                <span class="input-group-text border_radius"><span class="fa fa-search"></span></span>
                                <!--</button>-->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="single-prepend-text1" class="control-label">Select2 prepend</label>
                        <div class="input-group">
					<span class="input-group-prepend">
						<button class="btn btn-secondary input-group-text" type="button" data-select2-open="single-prepend-text1">
							<span class="fa fa-search"></span>
						</button>
					</span>
                            <select id="single-prepend-text" class="form-control select2-single">
                                <option></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="select25 multi-append" class="control-label">--}}
                            {{--Select2 prepend--}}
                        {{--</label>--}}
                        {{--<div class="input-group select2-bootstrap-prepend dropdowns-select-prepend">--}}
                                        {{--<div class="input-group-btn">--}}
                                            {{--<button class="btn btn-secondary input-group-text remove_radius_right" type="button"--}}
                                                    {{--data-select2-open="single-prepend-text">--}}
                                                {{--<span class="fa fa-search"></span>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                            {{--<select id="select25  multi-append" class="form-control">--}}
                                {{--<option value="">Select value...</option>--}}
                                {{--<option value="A">A</option>--}}
                                {{--<option value="B">B</option>--}}
                                {{--<option value="C">C</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group d-table-cell">
                        <label for=" multi-append select26" class="control-label">
                            Select2 multi append
                        </label>
                        <div class="input-group select2-bootstrap-append dropdowns-select-multiappend ">
                            <select id="select26 multi-append" class="form-control select2">
                                <option value="">Select value...</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-secondary remove_radius" type="button" data-select2-open="multi-append">
                                    <span class="fa fa-search"></span>
                                </button>
                                <button class="btn btn-secondary remove_radius" type="button" data-select2-open="multi-prepend">State
                                </button>
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                    Action
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-item">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">
                                            Another action
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" class="dropdown-item">
                                            Separated link
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--ends--> </div>
            </div>
            <div class="card m-b-50 my-3">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="spinner-one" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                        Selectize Tagging and Select
                    </span>
                    <span class="float-right ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <!-- Time Picker -->
                        <div class="form-group">
                            <label for="select-gear">Default Selectize:</label>
                            <select id="select-gear" class="form-control" placeholder="Select gear...">
                                <optgroup label="Climbing">
                                    <option value="pitons">Pitons</option>
                                    <option value="cams">Cams</option>
                                    <option value="nuts">Nuts</option>
                                    <option value="bolts">Bolts</option>
                                    <option value="stoppers">Stoppers</option>
                                    <option value="sling">Sling</option>
                                </optgroup>
                                <optgroup label="Skiing">
                                    <option value="skis">Skis</option>
                                    <option value="skins">Skins</option>
                                    <option value="poles">Poles</option>
                                </optgroup>
                            </select>
                        </div>
                        <!-- /.form group -->
                        <!-- time Picker -->
                        <div class="form-group">
                            <label class="control-label" for="selectize3">Selectize with max limit:</label>
                            <select id="selectize3" class="form-control">
                                <option value="">Select gear...</option>
                                <option value="pitons">Pitons</option>
                                <option value="cams">Cams</option>
                                <option value="nuts">Nuts</option>
                                <option value="bolts">Bolts</option>
                                <option value="stoppers">Stoppers</option>
                                <option value="sling">Sling</option>
                                <option value="skis">Skis</option>
                                <option value="skins">Skins</option>
                                <option value="poles">Poles</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="selectize-tags1">Selectize Tags:</label>
                            <input type="text" id="selectize-tags1" class="form-control" value="web development,design">
                            <p>Press the [backspace] key and go back to editing the item without it being fully
                                removed.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="selectize-tags2">Selectize Tags with remove button:</label>
                            <input type="text" id="selectize-tags2" class="demo-default"
                                   value="science,biology,chemistry,physics">
                            <p>This selectize adds classic a classic remove button to each item for behavior that mimics
                                Select2 and Chosen.</p>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.box-body -->
            </div>

            <!--select-->
        </div>
        <!--col-md-6 ends-->
        <!--col-md-6 ends-->
        <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="camcoder" data-size="16" data-loop="true" data-c="#fff"
                           data-hc="white"></i>
                        Bootstrap Multi-select
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body bg_radius">
                        <div class="form-group">
                            <label class="control-label" for="multiselect1">Single Select using Radio:</label>
                            <select id="multiselect1" class="form-control">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="multiselect2">Multi Select using checkbox:</label>
                            <select id="multiselect2" multiple="multiple" class="form-control">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->
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
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>

<script language="javascript" type="text/javascript" src="{{ asset('vendors/sifter/sifter.js') }}"></script>
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/microplugin/microplugin.js') }}"></script>
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/selectize/js/selectize.min.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/switchery/js/switchery.js') }}"></script>
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
<script language="javascript" type="text/javascript"
        src="{{ asset('vendors/card/js/jquery.card.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ asset('js/pages/custom_elements.js') }}"></script>

@stop
