@extends('layouts/default')

{{-- Page title --}}
@section('title')
News
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/news.css') }}">
<!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
<div class="breadcum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                        </a>
                    </li>
                    <li class="d-none d-lg-block d-sm-block d-md-block">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">News</a>
                    </li>
                </ol>
                <div class="float-right">
                    <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true"
                        data-c="#3d3d3d" data-hc="#3d3d3d"></i> News
                </div>
            </div>
        </div>
    </div>
</div>
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container news mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @if( $popular->count() != 0)
                <div class="col-sm-6 news-body">
                    <div class="text-left">
                        <div>
                            <h4 class="border-warning">
                                <span class="heading_border bg-warning">Popular News</span>
                            </h4>
                        </div>
                    </div>
                    @foreach($popular as $item)
                    <div class="media my-2">
                        <div class="media-left">
                            <a href="{{ route('news.show',$item->id) }}">
                                @if($item->image)
                                <img class="media-object mr-3" src="{{ URL::to('/uploads/news/'.$item->image)  }}"
                                    alt="image">
                                @else
                                <i class="far fa-newspaper fa-5x"></i>
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('news.show',$item->id) }}" class="text-primary">
                                <strong class="text-primary">{{ $item->title }}</strong>
                            </a>
                            <span class="text-danger small d-block">{!! date('d-m-Y', strtotime($item->created_at))
                                !!}</span>
                        </div>
                    </div>

                    @endforeach
                </div>
                @endif
                @if( $hotnews->count() != 0)
                <div class="col-sm-6 news-body">
                    <div class="text-left">
                        <div>
                            <h4 class="border-success">
                                <span class="heading_border bg-success">Hot News</span>
                            </h4>
                        </div>
                    </div>
                    @foreach($hotnews as $item)
                    <div class="media my-2">
                        <div class="media-left">
                            <a href="{{ route('news.show',$item->id) }}">
                                @if($item->image)
                                <img class="media-object mr-3" src="{{ URL::to('/uploads/news/'.$item->image)  }}"
                                    alt="image">
                                @else
                                <i class="far fa-newspaper fa-5x"></i>
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('news.show',$item->id) }}">
                                <strong class="text-primary">{{ $item->title }}</strong>
                            </a>
                            <span class="text-danger small d-block">{!! date('d-m-Y', strtotime($item->created_at))
                                !!}</span>
                        </div>
                    </div>

                    @endforeach

                </div>
                @endif

                @if($lifestyle->count())
                @php $first = $lifestyle->shift(); @endphp

                <div class="col-sm-12  mt-20">
                    <div class="text-left">
                        <div>
                            <h4 class="border-danger">
                                <span class="heading_border bg-danger">Life Style</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 lifestyle">
                    @if($first['image'])
                    <img class="media-object mr-3" src="{{ URL::to('/uploads/news/'.$first['image'])  }}" alt="image">
                    @else
                    <i class="far fa-newspaper fa-5x"></i>
                    @endif
                    <div class="sports-height">
                        <a href="{{ route('news.show',$first['id']) }}">
                            <h4>{{ $first['title'] }}</h4>
                        </a>
                        <span class="text-danger small">{!! date('d-m-Y', strtotime($first['created_at']))
                            !!}</span>
                        <p>{!! $first['content'] !!}</p>
                        {{-- remove first item from collection   --}}


                    </div>
                </div>
                <div class="col-sm-6 news-body">
                    <ul>
                        @foreach( $lifestyle as $item)
                        <li>
                            <div class="media my-2">
                                <div class="media-left">
                                    <a href="{{ route('news.show',$item->id) }}">
                                        @if($item->image)
                                        <img class="media-object mr-3"
                                            src="{{ URL::to('/uploads/news/'.$item->image)  }}" alt="image">
                                        @else
                                        <i class="far fa-newspaper fa-5x"></i>
                                        @endif
                                    </a>
                                </div>
                                <div class="media-body">
                                    <span class="text-danger small">{!! date('d-m-Y', strtotime($item->created_at))
                                        !!}</span>
                                    <a href="{{ route('news.show', $item->id) }}">
                                        <h5 class="">{{ $item->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($world->count() !=0)
                <div class="col-sm-12 mt-20">
                    <div class="text-left">
                        <div>
                            <h4 class="border-primary">
                                <span class="heading_border bg-primary">World News</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 worlnews">
                    <div class="row">
                        @foreach($world as $item)
                        <div class="col-sm-6 news-body">
                            <div class="media my-2">
                                <div class="media-left">
                                    <a href="{{ route('news.show',$item->id) }}">
                                        @if($item->image)
                                        <img class="media-object mr-3"
                                            src="{{ URL::to('/uploads/news/'.$item->image)  }}" alt="image">
                                        @else
                                        <i class="far fa-newspaper fa-5x"></i>
                                        @endif
                                    </a>
                                </div>
                                <div class="media-body">
                                    <span class="text-danger small">{!! date('d-m-Y', strtotime($item->created_at))
                                        !!}</span>
                                    <a href="{{ route('news.show', $item->id) }}">
                                        <h5 class="">{{ $item->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                @endif

                @if($business->count() !=0)
                @php $first = $business->shift(); @endphp
                <div class="col-sm-6 news-body mt-20">
                    <h4 class="border-danger">
                        <span class="heading_border bg-danger">Business News</span>
                    </h4>
                    <a href="{{route('news.show', $first['id'])  }}">
                        @if($first->image)
                        <img class="img-fluid height_180" src="{{ URL::to('/uploads/news/'.$first->image)  }}"
                            alt="image">
                        @else
                        <i class="far fa-newspaper fa-5x"></i>
                        @endif
                    </a>
                    <div class="sports-height">
                        <a href="{{ route('news.show', $first['id']) }}">
                            <h4>{{ $first['title'] }}</h4>
                        </a>

                        <span class="text-danger small">{!! date('d-m-Y', strtotime($first['created_at']))
                            !!}</span>
                        <div class="sports-content">
                            <p> {!! $first['content'] !!}</p>
                        </div>
                    </div>
                    @foreach( $business as $item)
                    <div class="media my-2">
                        <div class="media-left">
                            <a href="{{ route('news.show',$item->id) }}">
                                @if($item->image)
                                <img class="media-object mr-3" src="{{ URL::to('/uploads/news/'.$item->image)  }}"
                                    alt="image">
                                @else
                                <i class="far fa-newspaper fa-5x"></i>
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            <span class="text-danger small">{!! date('d-m-Y', strtotime($item->created_at)) !!}</span>
                            <a href="{{ route('news.show',$item->id) }}">
                                <h5 class="media-heading">{{ $item->title }}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
                @endif
                @if($sports->count() !=0)
                @php $first = $sports->shift(); @endphp
                <div class="col-sm-6 news-body  mt-20">

                    <div class="text-left">
                        <div>
                            <h4 class="border-success">
                                <span class="heading_border bg-success">Sports News</span>
                            </h4>
                        </div>
                    </div>
                    <a href="{{ route('news.show',$first['id']) }}">
                        @if($first['image'])
                        <img class="img-fluid height_180" src="{{ URL::to('/uploads/news/'.$first['image'])  }}"
                            alt="image">
                        @else
                        <i class="far fa-newspaper fa-5x"></i>
                        @endif
                    </a>
                    <div class="sports-height">
                        <a href="{{ route('news.show',$first->id) }}">
                            <h4>{{ $first['title'] }}</h4>
                        </a>
                        <span class="text-danger small">{!! date('d-m-Y', strtotime($first['created_at']))
                            !!}</span>
                        <div class="sports-content">
                            <p> {!! $first['content'] !!}</p>
                        </div>
                    </div>
                    @foreach( $sports as $item)
                    <div class="media my-2">
                        <div class="media-left">
                            <a href="{{ route('news.show',$item->id) }}">
                                @if($item->image)
                                <img class="media-object mr-3" src="{{ URL::to('/uploads/news/'.$item->image)  }}"
                                    alt="image">
                                @else
                                <i class="far fa-newspaper fa-5x"></i>
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            <span class="text-danger small">{!! date('d-m-Y', strtotime($item->created_at)) !!}</span>
                            <a href="{{ route('news.show',$item->id) }}">
                                <h5 class="media-heading">{{ $item->title }}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
                @endif
            </div>

        </div>
        <div class="col-md-4 ">
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel border rounded p-1">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <ul class="nav nav-tabs ">
                        <li class=" nav-item ">
                            <a href="#tab_default_1" data-toggle="tab" class="nav-link active">
                                Popular </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                Recent </a>
                        </li>
                    </ul>
                    <hr class="horizontalline">
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="mr-3" src="{{ asset('images/image_13.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="">Efficiently unleash cross-media information
                                            without cross-media value.</h5>
                                    </a><span class="text-danger">May 10, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="mr-3" src="{{ asset('images/image_14.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="">Efficiently unleash cross-media information
                                            without cross-media value.</h5>
                                    </a><span class="text-danger">May 8, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="mr-3" src="{{ asset('images/image_15.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="">Efficiently unleash cross-media information
                                            without cross-media value.</h5>
                                    </a><span class="text-danger">May5, 2015</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="mr-3" src="{{ asset('images/image_15.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="">Efficiently unleash cross-media information
                                            without cross-media value.</h5>
                                    </a><span class="text-danger">May 13, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="mr-3" src="{{ asset('images/image_13.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="">Efficiently unleash cross-media information
                                            without cross-media value.</h5>
                                    </a><span class="text-danger">May 12, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="mr-3" src="{{ asset('images/image_14.jpg') }}" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="">Efficiently unleash cross-media information
                                            without cross-media value.</h5>
                                    </a>
                                    <span class="text-danger">Feb 28, 2015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comments my-1 p-1">
                <h3>Comments</h3>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="mr-3 rounded" src="{{ asset('images/image_13.jpg') }}" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h5 class="">Efficiently unleash cross-media information without
                                cross-media value.</h5>
                        </a>
                        <span class="text-danger">Feb 28, 2015</span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="mr-3" src="{{ asset('images/image_14.jpg') }}" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h5 class="">Efficiently unleash cross-media information without
                                cross-media value.</h5>
                        </a><span class="text-danger">May 11, 2015</span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="mr-3" src="{{ asset('images/image_15.jpg') }}" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h5 class="">Efficiently unleash cross-media information without
                                cross-media value.</h5>
                        </a><span class="text-danger">Feb 28, 2015</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-content End -->
    </div>
    <!-- //Tabbablw-line End -->
</div>
<!-- Tabbable_panel End -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- begining of page level js -->
<!--tags-->
<script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

<!-- end of page level js -->

@stop