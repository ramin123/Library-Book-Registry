@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/bootstrap-form-builder/assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pages/formbuilder.css') }}" rel="stylesheet" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
            <!--section starts-->
            <h1>Form Builder</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Builders</a>
                </li>
                <li class="active">Form Builder</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content pl-3 pr-3">
            <!--main content-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                    <div class="alert alert-success alert-dismissable visible-xs visible-md">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        May not work properly in touch enabled devices as it as requires drag and drop.
                    </div>
                    <!--form builder-->
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <span>
                                <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Drag & Drop components
                            </span>
                            <span class="float-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                        <div class="card-body ">
                            <div class="row clearfix">
                                <!-- Components -->
                                <div class="col-md-7 col-sm-12 col-lg-7 col-12">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="formtabs">
                                            <!-- Tab nav --> </ul>
                                        <form class="form-horizontal" id="components" role="form">
                                            <fieldset>
                                                <div class="tab-content">
                                                    <!-- Tabs of snippets go here --> </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <!-- / Components -->
                                <!-- Building Form. -->
                                <div class="col-md-5">
                                    <div class="clearfix">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Form Layout
                                                </button>
                                                <div class="dropdown-menu" id="form-layout" role="menu">
                                                    <li class="dropdown-item" value=1><a href="#">1 Column</a></li>
                                                    <li class="dropdown-item" value=2><a href="#">2 Columns</a></li>
                                                </div>
                                            </div>
                                            <input id="form-layout-text" class="form-control" placeholder="Form Layout: 1 column(s)" type="text" readonly>
                                        </div>
                                        <hr>
                                        <p class="padding_p">Drag elements here</p>
                                        <hr class="hr-ddd">
                                        <div id="build">
                                            <form id="target" class="form-horizontal"></form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Building Form. --> </div>
                    <!-- / Components --> </div>
                <!--form builder ends--> </div>
        </section>
        <!--main content ends-->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore.js"></script>
    <script data-main="{{ asset('vendors/bootstrap-form-builder/assets/js/main.js') }}" src="https://rawgithub.com/jrburke/requirejs/master/require.js"></script>
<script>
    $( document ).ready(function() {
        $(".wrapper").addClass("hide_menu");
    });
</script>
@stop
