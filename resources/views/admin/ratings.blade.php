@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Ratings
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/starability/starability-all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bootstrapStarRating/css/star-rating.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bootstraprating/bootstrap-rating.css') }}" rel="stylesheet" type="text/css"/>
    {{--<link href="{{ asset('vendors/bootstrapStarRating/themes/theme.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.0/css/theme-krajee-fa.css">

    <link href="{{ asset('css/pages/custom_rating.css') }}" rel="stylesheet" type="text/css"/>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Ratings</h1>
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
            <li class="active">Ratings</li>
        </ol>
    </section>
    <!--section ends-->
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <!--main content-->
        <div class="row starrate">
            <div class="col-md-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white ">
                        <span>
                            <i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Ratings
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="pad10">
                                        <form>
                                            <fieldset class="starability-basic">
                                                <h5>Default star rating:</h5>
                                                <input type="radio" id="rate1" name="rating" value="1"/>
                                                <label for="rate1" title="Terrible"></label>
                                                <input type="radio" id="rate2" name="rating" value="2"/>
                                                <label for="rate2" title="Not good"></label>
                                                <input type="radio" id="rate3" name="rating" value="3"/>
                                                <label for="rate3" title="Average"></label>
                                                <input type="radio" id="rate4" name="rating" value="4"/>
                                                <label for="rate4" title="Very good"></label>
                                                <input type="radio" id="rate5" name="rating" value="5"/>
                                                <label for="rate5" title="Amazing"></label>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="pad10">
                                        <form>
                                            <fieldset class="starability-slot">
                                                <h5>Slot machine rating:</h5>
                                                <input type="radio" id="slot-rate1" name="rating" value="1"/>
                                                <label for="slot-rate1" title="Terrible"></label>
                                                <input type="radio" id="slot-rate2" name="rating" value="2"/>
                                                <label for="slot-rate2" title="Not good"></label>
                                                <input type="radio" id="slot-rate3" name="rating" value="3"/>
                                                <label for="slot-rate3" title="Average"></label>
                                                <input type="radio" id="slot-rate4" name="rating" value="4"/>
                                                <label for="slot-rate4" title="Very good"></label>
                                                <input type="radio" id="slot-rate5" name="rating" value="5"/>
                                                <label for="slot-rate5" title="Amazing"></label>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="pad10">
                                        <form>
                                            <fieldset class="starability-grow">
                                                <h5>Growing star rating:</h5>
                                                <input type="radio" id="growing-rate1" name="rating" value="1"/>
                                                <label for="growing-rate1" title="Terrible"></label>
                                                <input type="radio" id="growing-rate2" name="rating" value="2"/>
                                                <label for="growing-rate2" title="Not good"></label>
                                                <input type="radio" id="growing-rate3" name="rating" value="3"/>
                                                <label for="growing-rate3" title="Average"></label>
                                                <input type="radio" id="growing-rate4" name="rating" value="4"/>
                                                <label for="growing-rate4" title="Very good"></label>
                                                <input type="radio" id="growing-rate5" name="rating" value="5"/>
                                                <label for="growing-rate5" title="Amazing"></label>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="pad10">
                                        <form>
                                            <fieldset class="starability-growRotate">
                                                <h5>Growing & star rating:</h5>
                                                <input type="radio" id="growing-rotating-rate1" name="rating"
                                                       value="1"/>
                                                <label for="growing-rotating-rate1" title="Terrible"></label>
                                                <input type="radio" id="growing-rotating-rate2" name="rating"
                                                       value="2"/>
                                                <label for="growing-rotating-rate2" title="Not good"></label>
                                                <input type="radio" id="growing-rotating-rate3" name="rating"
                                                       value="3"/>
                                                <label for="growing-rotating-rate3" title="Average"></label>
                                                <input type="radio" id="growing-rotating-rate4" name="rating"
                                                       value="4"/>
                                                <label for="growing-rotating-rate4" title="Very good"></label>
                                                <input type="radio" id="growing-rotating-rate5" name="rating"
                                                       value="5"/>
                                                <label for="growing-rotating-rate5" title="Amazing"></label>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="pad10">
                                        <form>
                                            <fieldset class="starability-fade">
                                                <h5>Fading star rating:</h5>
                                                <input type="radio" id="fading-rate1" name="rating" value="1"/>
                                                <label for="fading-rate1" title="Terrible"></label>
                                                <input type="radio" id="fading-rate2" name="rating" value="2"/>
                                                <label for="fading-rate2" title="Not good"></label>
                                                <input type="radio" id="fading-rate3" name="rating" value="3"/>
                                                <label for="fading-rate3" title="Average"></label>
                                                <input type="radio" id="fading-rate4" name="rating" value="4"/>
                                                <label for="fading-rate4" title="Very good"></label>
                                                <input type="radio" id="fading-rate5" name="rating" value="5"/>
                                                <label for="fading-rate5" title="Amazing"></label>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">

                                    <div class="pad10">
                                        <form>
                                            <fieldset class="starability-checkmark">
                                                <h5>Checkmark rating:</h5>
                                                <input type="radio" id="checkmark-rate1" name="rating" value="1"/>
                                                <label for="checkmark-rate1" title="Terrible"></label>
                                                <input type="radio" id="checkmark-rate2" name="rating" value="2"/>
                                                <label for="checkmark-rate2" title="Not good"></label>
                                                <input type="radio" id="checkmark-rate3" name="rating" value="3"/>
                                                <label for="checkmark-rate3" title="Average"></label>
                                                <input type="radio" id="checkmark-rate4" name="rating" value="4"/>
                                                <label for="checkmark-rate4" title="Very good"></label>
                                                <input type="radio" id="checkmark-rate5" name="rating" value="5"/>
                                                <label for="checkmark-rate5" title="Amazing"></label>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Movie Rating
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group label-floating is-empty">
                                <label for="your_name" class="control-label">Your Name</label>
                                <input type="text" class="form-control" id="your_name">
                            </div>
                            <div class="form-group label-floating is-empty">
                                <label for="movie_name" class="control-label">Movie Name</label>
                                <input type="text" class="form-control" id="movie_name">
                            </div>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" for="your_review">Your Review</label>
                                <textarea id="your_review" name="example-textarea-input" rows="4"
                                          class="form-control resize_vertical"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="pad10">
                                    <form>
                                        <fieldset class="starability-growRotate">

                                            <input type="radio" id="growing-rotating-ratem5" name="rating" value="1"/>
                                            <label for="growing-rotating-ratem5" title="Terrible"></label>
                                            <input type="radio" id="growing-rotating-ratem4" name="rating" value="2"/>
                                            <label for="growing-rotating-ratem4" title="Not good"></label>
                                            <input type="radio" id="growing-rotating-ratem3" name="rating" value="3"/>
                                            <label for="growing-rotating-ratem3" title="Average"></label>
                                            <input type="radio" id="growing-rotating-ratem2" name="rating" value="4"/>
                                            <label for="growing-rotating-ratem2" title="Very good"></label>
                                            <input type="radio" id="growing-rotating-ratem1" name="rating" value="5"/>
                                            <label for="growing-rotating-ratem1" title="Amazing"></label>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit your Rating</button>
                        </form>
                    </div>
                </div>

                {{--<div class="col-md-6 col-lg-6 col-12 my-3">--}}
                {{--<!--select2 starts-->--}}
                {{--<div class="card card-info">--}}
                {{--<div class="card-header">--}}
                {{--<h3 class="card-title">--}}
                {{--<i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Advanced Ratings--}}
                {{--</h3>--}}
                {{--<span class="float-right ">--}}
                {{--<i class="fa fa-chevron-up clickable"></i>--}}
                {{--</span>--}}
                {{--</div>--}}
                {{--<div class="card-body adv_rate">--}}
                {{--<div class="col-md-12 pad10">--}}
                {{--<h5 class="control-label">Basic Rating:</h5>--}}
                {{--<input id="input-1" name="input-1" class="rating d-none " data-min="0" data-max="5" data-step="1">--}}
                {{--</div>--}}
                {{--<div class="col-md-12 pad10">--}}
                {{--<h5 class="control-label">Half Stars Rating:</h5>--}}
                {{--<input id="input-4" name="input-4" class="rating " data-show-clear="false" data-show-caption="true">--}}
                {{--</div>--}}
                {{--<div class="col-md-12 pad10">--}}
                {{--<h5>Fractional Rating:</h5>--}}
                {{--<input id="input-2" name="input-2" class="rating" data-min="0" data-max="5" data-step="0.1">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<!--ends-->--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <script src="{{ asset('vendors/bootstrapStarRating/js/star-rating.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrapStarRating/themes/theme.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstraprating/bootstrap-rating.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstraprating/bootstrap-rating.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/pages/custom_rating.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->

@stop
