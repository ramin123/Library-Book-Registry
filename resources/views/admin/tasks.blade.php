@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Tasks
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('css/pages/todolist.css') }}"/>
    <meta name="_token" content="{{ csrf_token() }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}">
    <!-- end of page level css -->
    <style>
        .datetimepicker-dropdown-bottom-left:before{
            right:inherit;
        }
        .todolist .row
        {
            display: block;
        }
        .todolist [class*="col-"] {
            float: none;
            display: inline-block;
            vertical-align: top;
        }
        .todolist .col-lg-9,.col-md-9
        {
            width:83%;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Tasks</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Tasks</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <div class="row">
            <!-- To do list -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="card todolist">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title">
                            <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i>
                            To Do List
                        </h4>
                    </div>
                    <div class="card-body nopadmar">
                        <div class="card-body">
                                <div class="scroller_height">
                                    <div class="row list_of_items">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <div class="add_list adds">
                            {!! Form::open(['class'=>'form', 'id'=>'main_input_box']) !!}
                            <div class="form-group">
                                {!! Form::label('task_description', 'Task description: ') !!}
                                {!! Form::text('task_description', null, ['class' => 'form-control','id'=>'task_description', 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('task_deadline', 'Deadline: ') !!}
                                {!! Form::text('task_deadline', null, ['class' => 'form-control datepicker', 'id'=>'task_deadline', 'onkeydown'=>'return false', 'data-date-format'=> 'YYYY/MM/DD', 'required' => 'required','autocomplete'=>'off']) !!}
                            </div>
                            <button type="submit" class="btn btn-primary add_button">
                                Add Task
                            </button>
                            {!! Form::close() !!}
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- content -->
    <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/tasklist.js') }}"></script>

    <script>
        var currentDate = new Date();
        $(".datepicker").datetimepicker({
            startDate: currentDate,
            format: "yyyy/mm/dd",
            autoclose: true,
            time:false,
            pickerPosition: "bottom-right",
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>
@stop
