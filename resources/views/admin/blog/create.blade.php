@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
@lang('blog/title.add-blog') :: @parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
@stop
<!--end of page level css-->


{{-- Page content --}}
@section('content')
<section class="content-header">
    <!--section starts-->
    <h1>@lang('blog/title.add-blog')</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="14" data-c="#000"
                    data-loop="true"></i>
                @lang('general.home')
            </a>
        </li>
        <li>
            <a href="#">@lang('blog/title.blog')</a>
        </li>
        <li class="active">@lang('blog/title.add-blog')</li>
    </ol>
</section>
<!--section ends-->
<section class="content pr-3 pl-3">
    <!--main content-->
    <div class="row">
        <div class="col-12">
            <div class="the-box no-border">
                <!-- errors -->
                {!! Form::open(['url' => URL::to('admin/blog'), 'method' => 'post', 'class' => 'bf', 'files'=> true])
                !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->first('title', 'has-error') }}">
                            {!! Form::text('title', null, ['class' => 'form-control input-lg','placeholder'=>
                            trans('blog/form.ph-title')]) !!}
                            <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                        </div>
                        <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                            {!! Form::textarea('content', NULL,
                            ['placeholder'=>trans('blog/form.ph-content'),'rows'=>'5','class'=>'textarea
                            form-control','style'=>'style="width: 100%; height: 200px !important; font-size: 14px;
                            line-height: 18px; border: 1px solid #dddddd; padding: 10px;"']) !!}
                            <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                        </div>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-4">
                        <div class="form-group {{ $errors->first('blog_category_id', 'has-error') }}">
                            <label for="blog_category" class="">Blog Category</label>
                            {!! Form::label('blog_category_id', trans('blog/form.ll-postcategory')) !!}
                            {!! Form::select('blog_category_id',$blogcategory ,null, ['class' => 'form-control
                            select2', 'id'=>'blog_category' ,'placeholder'=>trans('blog/form.select-category')]) !!}
                            <span class="help-block">{{ $errors->first('blog_category_id', ':message') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::text('tags', null, ['class' => 'form-control input-lg',
                            'data-role'=>"tagsinput", 'placeholder'=>trans('blog/form.tags')]) !!}
                        </div>
                        <label>@lang('blog/form.lb-featured-img')</label>
                        <div class="form-group {{ $errors->first('image', 'has-error') }}">


                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                        class="img-responsive" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                    style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" id="pic" accept="image/*" />
                                    </span>
                                    <span class="btn btn-primary fileinput-exists"
                                        data-dismiss="fileinput">Remove</span>
                                </div>
                                <span class="help-block">{{ $errors->first('image', ':message') }}</span>

                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">@lang('blog/form.publish')</button>
                            <a href="{!! URL::to('admin/blog/create') !!}"
                                class="btn btn-danger">@lang('blog/form.discard')</a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
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
<script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
<script src="{{ asset('js/pages/add_newblog.js') }}" type="text/javascript"></script>

<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>

@stop
