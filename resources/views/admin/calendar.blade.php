@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Calendar
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/fullcalendar/css/fullcalendar.print.css') }}" rel="stylesheet" media='print'
          type="text/css">
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css"/>
@stop
<!--page level styles ends-->

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Calendar</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Calendar</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-12">
                <div class="box">
                    <div class="box-title">
                        <h3 class="my-2">Draggable Events</h3>
                        <div class="float-right box-toolbar">
                            <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id='external-events'>
                            <div class='external-event palette-warning fc-event'>Team Out <i
                                        class="fa fa-times event-clear" aria-hidden="true"></i></div>
                            <div class='external-event palette-primary fc-event'>Product Seminar <i
                                        class="fa fa-times event-clear" aria-hidden="true"></i></div>
                            <div class='external-event palette-danger fc-event'>Client Meeting <i
                                        class="fa fa-times event-clear" aria-hidden="true"></i></div>
                            <div class='external-event palette-info fc-event'>Repeating Event <i
                                        class="fa fa-times event-clear" aria-hidden="true"></i></div>
                            <div class='external-event palette-success fc-event'>Anniversary Celebrations <i
                                        class="fa fa-times event-clear" aria-hidden="true"></i></div>
                            <p class="well no-border no-radius">
                                <input type='checkbox' class="custom-checkbox" id='drop-remove'
                                       style="opacity:1 !important"/>
                                <label for='drop-remove'>remove after drop</label>
                            </p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal"
                           data-target="#myModal">Create event</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-9 col-lg-9 col-12">
                <div class="box">
                    <div class="box-body">
                        <div id="calendar"></div>

                        <div id="fullCalModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">×</span> <span class="sr-only">close</span>
                                        </button>
                                        <h4 id="modalTitle" class="modal-title"></h4>
                                    </div>
                                    <div id="modalBody" class="modal-body">
                                        <i class="mdi-action-alarm-on"></i>&nbsp;&nbsp;Start: <span
                                                id="startTime"></span>&nbsp;&nbsp;- End: <span id="endTime"></span>
                                        <h4 id="eventInfo"></h4>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">
                            <i class="fa fa-plus"></i> Create Event
                        </h4>
                        <button type="button" class="close reset" data-dismiss="modal" aria-hidden="true">&times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" id="new-event" class="form-control" placeholder="Event">
                            <div class="input-group-btn">
                                <button type="button" id="color-chooser-btn"
                                        class="color-chooser btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    Type
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu float-right" id="color-chooser">
                                    <li>
                                        <a class="palette-primary" href="#">Primary</a>
                                    </li>
                                    <li>
                                        <a class="palette-success" href="#">Success</a>
                                    </li>
                                    <li>
                                        <a class="palette-info" href="#">Info</a>
                                    </li>
                                    <li>
                                        <a class="palette-warning" href="#">warning</a>
                                    </li>
                                    <li>
                                        <a class="palette-danger" href="#">Danger</a>
                                    </li>
                                    <li>
                                        <a class="palette-default" href="#">Default</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success mr-auto" id="add-new-event" data-dismiss="modal">
                            <i class="fa fa-plus"></i> Add
                        </button>
                        <button type="button" class="btn btn-danger float-right reset" data-dismiss="modal">
                            Close
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">
                            <i class="fa fa-plus"></i>
                            Edit Event
                        </h4>

                        <button type="button" class="close reset" data-dismiss="modal" aria-hidden="true">&times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" id="event_title" class="form-control" placeholder="Event">
                            <div class="input-group-btn">
                                <button type="button" id="color-chooser-btn_edit"
                                        class="color-chooser btn btn-info dropdown-toggle " data-toggle="dropdown">
                                    Type
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu float-right" id="color-chooser">
                                    <li>
                                        <a class="palette-primary" href="#">Primary</a>
                                    </li>
                                    <li>
                                        <a class="palette-success" href="#">Success</a>
                                    </li>
                                    <li>
                                        <a class="palette-info" href="#">Info</a>
                                    </li>
                                    <li>
                                        <a class="palette-warning" href="#">warning</a>
                                    </li>
                                    <li>
                                        <a class="palette-danger" href="#">Danger</a>
                                    </li>
                                    <li>
                                        <a class="palette-default" href="#">Default</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success  mr-auto text_save" data-dismiss="modal">
                            Update
                        </button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                            Close
                            <i class="fa fa-times"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/calendar.js') }}" type="text/javascript"></script>
@stop
