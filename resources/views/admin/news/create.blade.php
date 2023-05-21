@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    @lang('news/title.add-news') @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>@lang('news/title.add-news')</h1>
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
            <li class="active">@lang('news/title.add-news')</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pr-3 pl-3">
        <!--main content-->
        <div class="row">
            <div class="col-12">
            <div class="the-box no-border">
                <!-- errors -->
                {!! Form::open(['url' => URL::to('admin/news'), 'method' => 'post', 'class' => 'bf', 'files'=> true]) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="row">
                    <div class="col-sm-8">
                        <label>News Title</label>
                        <div class="form-group {{ $errors->first('title', 'has-error') }}">
                            {!! Form::text('title', null, ['class' => 'form-control input-lg','placeholder'=> trans('blog/form.ph-title')]) !!}
                            <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                        </div>
                        <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                            {!! Form::textarea('content', NULL, ['placeholder'=>trans('blog/form.ph-content'),'rows'=>'5','class'=>'textarea form-control','style'=>'style="width: 100%; height: 200px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"']) !!}
                            <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                        </div>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-4">

                        <div class="form-group {{ $errors->first('category', 'has-error') }}">
                            <label for="blog_category" class="">News Category</label>
                            {!! Form::select('category',['popular'=>'popular','hotnews'=>'Hot News','world'=>'Wolrd News','lifestyle'=>'Life Style','business'=>'Business','sports'=>'Sports'], null, ['class' => 'form-control select2', 'id'=>'blog_category' ,'placeholder'=>trans('blog/form.select-category')]) !!}
                            <span class="help-block">{{ $errors->first('category', ':message') }}</span>
                        </div>

                        <div class="form-group {{ $errors->first('image', 'has-error') }}">
                            <label class="control-label col-12">@lang('blog/form.lb-featured-img')</label>
                            <div class="col-12 fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                         class="img-responsive"/>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                     style="max-width: 200px; max-height: 150px;">

                                </div>
                                <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image" id="pic" accept="image/*"/>
                                            </span>
                                    <span class="btn btn-primary fileinput-exists"
                                          data-dismiss="fileinput">Remove</span>
                                </div>
                                <span class="help-block">{{ $errors->first('image', ':message') }}</span>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">@lang('blog/form.publish')</button>
                            <a href="{!! URL::to('admin/news/create') !!}"
                               class="btn btn-danger">@lang('blog/form.discard')</a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 --> </div>
                {!! Form::close() !!}
            </div>
        </div>
        </div>
        <!--main content ends-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <!--edit blog-->
    <script src="{{ asset('vendors/summernote/js/summernote.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"
            type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('js/pages/add_newblog.js') }}" type="text/javascript"></script>
@stop
