@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Compose New Mail
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" media="screen"/>
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Compose</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/inbox') }}">Email</a>
            </li>
            <li class="active">Compose</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row web-mail">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="bg-white">
                    <ul class="list">
                        <li class="compose">
                            <a href="{{ URL::to('admin/compose') }}">
                                <i class="livicon" data-n="pen" data-s="16" data-c="white"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/inbox') }}">
                                <i class="livicon" data-n="inbox" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp;Inbox
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/sent') }}">
                                <i class="livicon" data-n="check-circle" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Sent
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/trash') }}">
                                <i class="livicon" data-n="trash" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Trash
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/spam') }}">
                                <i class="livicon" data-n="eye-close" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Spam
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/draft') }}">
                                <i class="livicon" data-n="unlink" data-s="16" data-c="gray"></i>
                                &nbsp; &nbsp; Draft
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8">
                <form>
                    <div class="card border-primary">
                        <div class="card-header border-bottom bg-primary text-white">
                            <h4>
                                <strong>Compose</strong>
                            </h4>
                        </div>
                        <div class="card-body">

                            <div class="compose row">
                                <label class="col-2 d-none d-sm-inline-block d-md-inline-block d-lg-inline-block"
                                       for="to1">To:</label>
                                <input type="email" name="email" class="col-9" id="to1" placeholder="Email id"
                                       tabindex="1" required>
                                <div class="clear"></div>
                                <label class="col-2 d-none d-sm-inline-block d-md-inline-block d-lg-inline-block"
                                       for="to">Subject:</label>
                                <input type="text" name="email_sub" class="col-9" id="to" tabindex="1"
                                       placeholder="Subject">
                                <div class="clear"></div>
                                <div class='box-body pad col-sm-12'>
                                    <div id="summernote"></div>
                                </div>
                                <div class="col-12 my-2">
                                    <a href="{{ URL::to('admin/inbox') }}"
                                       class="btn btn-sm btn-primary btn_margin_top">
                                    <span class="livicon" data-n="external-link" data-s="12" data-c="white"
                                          data-hc="white"></span>
                                        Send
                                    </a>

                                    <a href="{{ URL::to('admin/draft') }}"
                                       class="btn btn-sm btn-success btn_margin_top">
                                    <span class="livicon" data-n="briefcase" data-s="12" data-c="white"
                                          data-hc="white"></span>
                                        Draft
                                    </a>

                                    <a href="{{ URL::to('admin/inbox') }}"
                                       class="btn btn-sm btn-warning btn_margin_top">
                                    <span class="livicon" data-n="trash" data-s="12" data-c="white"
                                          data-hc="white"></span>
                                        Discard
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            fontNames: ['Lato', 'Arial', 'Courier New']
        });
        $('body').on('click', '.btn-codeview', function (e) {

            if ($('.note-editor').hasClass("fullscreen")) {
                var windowHeight = $(window).height();
                $('.note-editable').css('min-height', windowHeight);
            } else {
                $('.note-editable').css('min-height', '300px');
            }
        });
        $('body').on('click', '.btn-fullscreen', function (e) {
            setTimeout(function () {
                if ($('.note-editor').hasClass("fullscreen")) {
                    var windowHeight = $(window).height();
                    $('.note-editable').css('min-height', windowHeight);
                } else {
                    $('.note-editable').css('min-height', '300px');
                }
            }, 500);

        });
        $('.note-link-url').on('keyup', function () {
            if ($('.note-link-text').val() != '') {
                $('.note-link-btn').attr('disabled', false).removeClass('disabled');
            }
        });
        $('#slimscrollside').slimscroll({
            height: '700px',
            size: '3px',
            color: 'black',
            opacity: .3
        });

    </script>



    <script>
        $('.custom-control-indicator').removeClass('custom-control-indicator').addClass('custom-control-label')
        $('.modal-footer').addClass('mx-auto')
    </script>

@stop
