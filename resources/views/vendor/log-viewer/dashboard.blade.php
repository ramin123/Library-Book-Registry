@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Logger View
@parent
@stop
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/log_viewer.css') }}">

@stop
@section('content')

<section class="content-header">
    <h1>Logger Views</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16"
                    data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li class="active">Logger view</li>
    </ol>
</section>
<!--section ends-->
<section class="content my-3 pl-3 pr-3">
    <!--main content-->
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12">

            <div class="card ">
                <div class="card-header bg-primary text-white clearfix">
                    <h4 class="card-title float-left">
                        <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Logger View
                    </h4>
                    <div class="float-right">
                        <a href="{{  URL::to('admin/log_viewers/logs') }}" class="btn btn-sm btn-secondary  m-r-5"><span
                                class="fa fa-plus"></span> Logs</a>
                        <span>
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if(($percents))
                        <div class="col-lg-3 col-sm-5">
                            <canvas id="stats-doughnut-chart" height="300" width="300px"></canvas>
                        </div>
                        <div class="col-lg-9  col-sm-7">
                            <section class="box-body">
                                <div class="row">
                                    @foreach($percents as $level => $item)
                                    <div class="col-lg-4 col-md-12  ">
                                        <div
                                            class="info-box level level-{{ $level }} {{ $item['count'] === 0 ? 'level-empty' : '' }}">
                                            <span class="info-box-icon">
                                                {!! log_styler()->icon($level) !!}
                                            </span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">{{ $item['name'] }}</span>
                                                <span class="info-box-number">
                                                    {{ $item['count'] }} entries - {!! $item['percent'] !!} %
                                                </span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: {{ $item['percent'] }}%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                        @else
                        <h4 class="pl-2 text-muted">Currently there are no logs </h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
@endsection

@section('footer_scripts')
<script type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}"></script>
<script>
    Chart.defaults.global.responsive      = true;
        Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
        Chart.defaults.global.animationEasing = "easeOutQuart";
</script>
<script>
    $(document).ready(function() {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            });
            $.ajax({
                url: '{{ url('admin/log_viewers/logcheck') }}',
                type: 'GET',

                success: function (result) {
                    console.log(result);
                    if (result.status == false) {
                        swalWithBootstrapButtons.fire({
                            title: 'error',
                            text: result.message,
                            type: "error",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true
                        });
                    }
                }
            });
        });
        $(function() {
            new Chart($('canvas#stats-doughnut-chart'), {
                type: 'doughnut',
                data:{!! $chartData !!},
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            });
        });

</script>
@endsection
