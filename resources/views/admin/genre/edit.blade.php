@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    @lang('news/title.edit')
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">

    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>Обновить</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="14"
                                                             data-c="#000" data-loop="true"></i>
                    @lang('general.home')
                </a>
            </li>
            <li>
                <a href="#">@lang('news/title.news')</a>
            </li>
            <li class="active">@lang('news/title.edit')</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content ">
        <!--main content-->
        <div class="row">
            <div class="col-12">
            <div class="the-box no-border">
            <form action="{{ route('admin.genres.update',$genre->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                        <label>Имя: </label>
                        <div class="form-group {{ $errors->first('name', 'has-error') }}">
                        <input type="text" name="name" class="form-control" value="{{$genre->name}}" placeholder="Имя">
                       <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                        </div>
                    </div>
                    <!-- /.col-sm-8 -->
                    
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">Обновлять</button>
                            <a href="{!! URL::to('admin/genres') !!}"
                               class="btn btn-danger">Отказаться</a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 --> </div>
                
                    <!-- /.col-sm-4 --> </div>
                <!-- /.row -->
                {!! Form::close() !!}
            </div>
        </div>
        </div>
        <!--main content ends-->
    </section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/summernote/js/summernote.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"
            type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/add_newblog.js') }}"></script>
@stop
