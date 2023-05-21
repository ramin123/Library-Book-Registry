@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Elements
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
    <link href="{{ asset('css/pages/formelements.css') }}" rel="stylesheet" />
    <style>
        .span4{
            font-size: 14px !important;
        }
        textarea{
            overflow: hidden;
            min-height: 1px;
            resize: none;
        }
    </style>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>
            Advanced Form Elements
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
                Form Elements
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12">
                <!-- credit card section -->
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="credit-card" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Credit Card
                        </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="card-wrapper"></div>
                            <br />
                            <div id="card">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-3 my-2 control-label" for="card1">Card Number</label>
                                        <div class="col-md-9">
                                            <input name="number" required type="text" placeholder="" class="form-control" id="card1" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-3 my-2 control-label" for="card2">Name on Card</label>
                                        <div class="col-md-9">
                                            <input name="name" type="text" class="form-control" maxlength="40" required  id="card2"/>
                                        </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-3  my-2 control-label" for="card3">CVV</label>
                                        <div class="col-md-9">
                                            <input name="cvc" required type="text" placeholder="" class="form-control" id="card3" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-3 my-2  control-label" for="card4">Expiry Date</label>
                                        <div class="col-md-9">
                                            <input name="expiry" placeholder="" class="form-control"  id="card4"/>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="lab" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i> Auto Grow
                        </span>
                        <span class="float-right ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body auto_block">
                        <div class="form-group">
                            <label for="grow">
                                Auto Grow Basic
                            </label>
                            <div class="row">
                                <div class="col-12">
                                <textarea placeholder="Write something here..." data-autogrow class="form-control autogrow_area" rows="3" cols="80" id="grow"></textarea>
                            </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="grow1">
                                Heavy padding
                            </label>
                            <div class="row">
                                <div class="col-12">
                                    <textarea style="padding: 45px;" placeholder="Write something here..." class="form-control span3" data-autogrow rows="3"></textarea>
                                {{--<textarea placeholder="Write something here..." class="form-control pd-45 resize_vertical autogrow_area" rows="5" cols="80" id="grow1"></textarea>--}}
                            </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="grow2">
                                Medium padding with border
                            </label>
                            <div class="row">
                                <div class="col-12">
                                <textarea placeholder="Write something here..." class="form-control scroll pd resize_vertical autogrow_area" rows="5" cols="80" id="grow2"></textarea>
                            </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>
                                Initially hidden
                            </label>
                            <div class="row">
                                <div class="col-12">
                                <div class="span4">
                                    <textarea placeholder="Write something here..." class="form-control display-no autogrow_area resize_vertical" data-autogrow rows="3" cols="80"></textarea>
                                    <a onclick="$(this).closest('.span4').find('textarea').toggle(); $(this).text(this.text=='Hide'?'Show':'Hide');return false;" href="#">Show</a>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                    </div>
                <!-- credit card section ends -->
            </div>
            <div class="col-md-12 col-lg-6 col-12">
                <div class="card">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Bootstrap Input MaxLength
                        </span>
                    </div>
                    <div class="card-body">
                        <!--max length starts-->
                        <div class="form-group">
                            <label for="defaultconfig" class="control-label">
                                Default MaxLength
                            </label>
                            <input maxlength="25" name="defaultconfig" id="defaultconfig" type="text" class="form-control" placeholder="Placeholder text">
                        </div>
                        <div class="form-group">
                            <label for="thresholdconfig" class="control-label">
                                Threshold value
                            </label>
                            <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                        </div>
                        <div class="form-group">
                            <label for="moreoptions" class="control-label">Options</label>
                            <input type="text" class="form-control" maxlength="25" name="moreoptions" id="moreoptions" />
                        </div>
                        <div class="form-group">
                            <label for="alloptions" class="control-label">
                                All the options
                            </label>
                            <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                        </div>
                        <div class="form-group">
                            <label for="textarea" class="control-label">Text Area</label>
                            <textarea id="textarea" class="form-control resize_vertical " maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="placement" class="control-label">Position</label>
                            <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                        </div>
                        <!--min length ends-->
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

    <!-- InputMask -->
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" ></script>
    <!-- date-range-picker -->
    <script src="{{ asset('vendors/autogrow/js/jQuery-autogrow.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/card/js/jquery.card.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('js/pages/formelements.js') }}"  type="text/javascript"></script>

@stop
