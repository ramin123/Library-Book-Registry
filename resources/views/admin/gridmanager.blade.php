@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Page Builder
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('vendors/gridmanager/css/jquery.gridmanager.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/gridmanager/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pages/grid_manager.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Page Builder</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">Builders</a>
                    </li>
                    <li class="active">
                       Page Builder
                    </li>
                </ol>
            </section>
             <!--breadcrumb-->
             <!--Main content -->
            <section class="content pl-3 pr-3">
                <div class="alert alert-success alert-dismissable visible-xs visible-md">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    May not work properly in touch enabled devices as it as requires drag and drop.
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="livicon" data-name="map" data-size="14" data-loop="true" data-c="white" data-hc="white"></i>
                            Page Builder
                        </h3>
                        <span class="float-right ">
                            <i class="fa fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class=" row pd-30">
                            <div class="col-12">
                                <div id="mycanvas">
                                <div class='row'>
                                    <div class="col-12">
                                        <p>
                                            <img data-src="holder.js/1900x100/#418bca:#fff" class='img-fluid'></p>
                                    </div>
                                </div>
                                <div class='row my-3'>
                                    <div class='col-md-6 col-lg-6 col-12 w-100 '>
                                        <h2>2-Column Row</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit lorem sed posuere eleifend. Ut nec tellus sed erat iaculis bibendum ac et diam. Cras convallis tincidunt placerat. Duis posuere leo quis tincidunt iaculis. Vestibulum pulvinar, neque quis cursus rhoncus, justo mi dictum enim, non facilisis ligula justo eleifend felis. Donec velit nibh, egestas eu sapien at, bibendum consectetur urna. Donec tincidunt vitae erat vitae congue.
                                        </p>
                                    </div>
                                    <div class='col-md-6 col-lg-6 col-12 w-100 '>
                                        <h2>2-Column Row</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit lorem sed posuere eleifend. Ut nec tellus sed erat iaculis bibendum ac et diam. Cras convallis tincidunt placerat. Duis posuere leo quis tincidunt iaculis. Vestibulum pulvinar, neque quis cursus rhoncus, justo mi dictum enim, non facilisis ligula justo eleifend felis. Donec velit nibh, egestas eu sapien at, bibendum consectetur urna. Donec tincidunt vitae erat vitae congue.
                                        </p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-4'>
                                        <h3>3-Column Row</h3>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-4'>
                                        <h3>3-Column Row</h3>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-4'>
                                        <h3>3-Column Row</h3>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#00bc8c:#fff" class='img-fluid'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#5bc0de:#fff" class='img-fluid'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#00BC8C:#fff" class='img-fluid'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                    <div class='column col-md-3'>
                                        <p>
                                            <img data-src="holder.js/400x150/#EF6F6C:#fff" class='img-fluid'></p>
                                        <h4>4-Column Row</h4>
                                        <p>
                                            Vivamus faucibus nibh ut aliquam dignissim. Nunc tempus velit sit amet eleifend tempor. Aliquam vel tortor euismod, viverra urna tempus, scelerisque ipsum. Pellentesque at mauris non tortor elementum pretium. Integer rutrum libero at facilisis interdum. Praesent lobortis elit erat, quis elementum justo rhoncus eu. Ut eu dui lectus. Duis faucibus eu augue ut placerat.
                                        </p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='column col-md-2 col-lg-2 col-12'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2 col-lg-2 col-12'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2 col-lg-2 col-12'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2 col-lg-2 col-12'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2 col-lg-2 col-12'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                    <div class='column col-md-2 col-lg-2 col-12'>
                                        <h5>6-Column Row</h5>
                                        <p>&nbsp;Ut eu dui lectus. Duis faucibus eu augue ut placerat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </section>
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->


<script src="{{ asset('js/pages/jquery-ui.min.js') }}" ></script>
    <script src="{{ asset('vendors/gridmanager/js/jquery.gridmanager.js') }}" ></script>
    <script src="{{ asset('js/pages/grid_manager.js') }}" ></script>

    
@stop
