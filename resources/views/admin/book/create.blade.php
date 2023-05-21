@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Add Record @parent
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
        <h1>Добавить запись</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="14"
                                                             data-c="#000" data-loop="true"></i>
                    @lang('general.home')
                </a>
            </li>
            <li>
                <a href="#">Книга</a>
            </li>
            <li class="active">Добавить запись</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pr-3 pl-3">
        <!--main content-->
        <div class="row">
            <div class="col-12">
            <div class="the-box no-border">
                <!-- errors -->
                <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="row">
                    <div class="col-sm-8">
                        <label>Заголовок: </label>
                        <div class="form-group {{ $errors->first('title', 'has-error') }}">
                        <input type="text" name="title" class="form-control" placeholder="Заголовок">
                       <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <label>год публикации: </label>
                        <div class="form-group {{ $errors->first('publication_year', 'has-error') }}">
                        <input type="date" name="publication_year" class="form-control" placeholder="год публикации">
                       <span class="help-block">{{ $errors->first('publication_year', ':message') }}</span>
                        </div>
                    </div>
                    

                    <div class="col-sm-8">
                    
                        <div class="form-group {{ $errors->first('type', 'has-error') }}">
                                <label for="select1">Тип</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="graphic">graphic</option>
                                    <option value="digital">digital</option>
                                    <option value="printed">printed</option>
                                </select>
                                <span class="help-block">{{ $errors->first('type', ':message') }}</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                    
                        <div class="form-group {{ $errors->first('author_id', 'has-error') }}">
                                <label for="select1">Автор</label>
                                <select class="form-control" id="author_id" name="author_id">
                                    @foreach($author as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">{{ $errors->first('author_id', ':message') }}</span>
                        </div>
                        
                    </div>
                    <div class="col-sm-8">
                    
                        <div class="form-group {{ $errors->first('genre_id', 'has-error') }}">
                                <label for="select1">Жанр</label>
                                <select class="form-control" id="genre_id" name="genre_id">
                                @foreach($genre as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">{{ $errors->first('genre_id', ':message') }}</span>
                        </div>
                        
                    </div>

                    <!-- /.col-sm-8 -->
                    
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">Публиковать</button>
                            <a href="{!! URL::to('admin/books') !!}"
                               class="btn btn-danger">Отказаться</a>
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
