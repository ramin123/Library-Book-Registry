@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    @lang('news/title.newsdetail')
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('css/pages/blog.css') }}"/>
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>{!! $news->title!!}</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="14"
                                                             data-c="#000" data-loop="true"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li> @lang('news/title.news')</li>
            <li class="active">@lang('news/title.newsdetail')</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pr-3 pl-3">
        <!--main content-->
        <div class="row">
            <div class="col-sm-11 col-md-12 col-full-width-right">
                <div class="blog-detail-image mrg_btm15">
                    @if(!empty($news->image))
                        <img src="{{URL::to('uploads/news/'.$news->image)}}" class="img-responsive" alt="Image">
                    @else
                        <img data-src="holder.js/791x380/#6cc66c:#fff" class="img-responsive" alt="Image">
                    @endif
                </div>
                <!-- /.news-detail-image -->
                <div class="the-box no-border blog-detail-content">
                    <p>
                        <span class="label label-danger square">{!! $news->created_at!!}</span>
                    </p>
                    <p class="text-justify">
                        {!! $news->content !!}
                    </p>


                </div>
                <!-- /the.box .no-border --> </div>
            <!-- /.col-sm-9 --></div>
        <!--main content ends-->
    </section>
@stop
@section('footer_scripts')
    <script>
        $("img").addClass("img-responsive");
    </script>
@stop
