@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Editors
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"
    rel="stylesheet" media="screen"/>
    {{--<link href="{{ asset('vendors/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css">--}}

    <link href="{{ asset('vendors/trumbowyg/css/trumbowyg.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/trumbowyg/css/trumbowyg.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/trumbowyg/css/trumbowyg.colors.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Form Editors</h1>
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
            <li class="active">Editors 2</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->
        <div class="row my-3">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header bg-danger text-white">
                        <div class="bootstrap-admin-box-title ">
                            <span>
                                <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff"
                                   data-hc="white"></i>
                                Bootstrap WYSIHTML5
                            </span>
                        </div>
                    </div>
                    <div class="card-body panel_bgcolor">
                        <div class='box well well-sm'>
                            <div class='box-header'>
                                <h3 class='box-title text-info'>
                                    Bootstrap WYSIHTML5
                                    <small>Simple editor</small>
                                </h3>
                                <div class="float-right box-tools"></div>
                                <div class='box-body box_content'>
                                    <form>
                                        <textarea id="bootstrap-editor2" class="textarea editor-cls"
                                                  placeholder="Place some text here"></textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                        <div class="col-12">
                            <div class="card my-3">
                                <div class="card-header bg-primary text-white">
                                    <div class="text-white bootstrap-admin-box-title editor-clr">
                                        <span><i class="livicon" data-name="tag" data-size="16"
                                                                  data-loop="true" data-c="#fff" data-hc="white"></i>
                                            SummerNote</span>
                                    </div>
                                </div>

                                <div class="card-body panel_bgcolor">
                                    <div class="bootstrap-admin-card-content">
                                        <div id="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card my-3">
                                <div class="card-header bg-success text-white">
                                    <div class="text-white bootstrap-admin-box-title editor-clr">
                                        <span><i class="livicon" data-name="thermo-down" data-size="16"
                                                                  data-loop="true" data-c="#fff" data-hc="white"></i>
                                            Flip Editor</span>
                                    </div>
                                </div>
                                <div class="card-body panel_bgcolor">
                                    <div class="bootstrap-admin-card-content">
                                        <textarea id="split_editor"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!--main content ends--> </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}"
            type="text/javascript"></script>


    <script src="{{ asset('vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js') }}"
            type="text/javascript"></script>
{{--    <script src="{{ asset('vendors/summernote/js/summernote.min.js') }}" type="text/javascript"></script>--}}

    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.base64.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.colors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.noembed.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.pasteimage.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.preformatted.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('vendors/trumbowyg/js/trumbowyg.upload.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/editor2.js') }}" type="text/javascript"></script>

    <script>
        $('.custom-control-indicator') .removeClass('custom-control-indicator').addClass('custom-control-label');
        $('.modal-footer').addClass('mx-auto');
    </script>
@stop
