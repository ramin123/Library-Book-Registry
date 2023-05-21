@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Gallery
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('css/pages/animated-masonry-gallery.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fancybox/css/jquery.fancybox.css') }}" media="screen" />
    <style>
        .mb-10{
            margin-bottom: 10px;
        }
        .btn-group-xs>.btn, .btn-xs {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }

    </style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Masonry Gallery</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="active">Masonry Gallery</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content pl-3 pr-3">
                <div class="content gallery">
                    <div id="gallery">
                    <div class="row" id="slim">
                            <div class="col-md-5 col-12 col-lg-12" id="gallery-header-center-left-title">All Galleries</div>
                            <div class="ml-auto">
                                <div class="col-12 mb-10 filter-button-group">
                                    <button type="button" id="filter-all" data-filter=".all" class="btn btn-info btn-sm">All</button>
                                    <button type="button" id="filter-studio" data-filter=".studio" class="btn btn-primary btn-sm">Studio</button>
                                    <button type="button" id="filter-landscape" data-filter=".landscape" class="btn btn-success btn-sm">Landscape</button>
                                </div>
                            </div>
                        </div>
                            <div id="gallery-content " >
                                <div class="grid" id="gallery-content-center">
                                    <div class="grid-sizer"></div>
                                    <a class="fancybox img-fluid  grid-item all" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item studio" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item landscape" href="{{ asset('img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-fluid  grid-item landscape" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item studio" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item all" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-fluid  grid-item landscape" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item all" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item studio" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-fluid  grid-item all" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid  grid-item landscape" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-fluid  grid-item studio" href="{{ asset('img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/2.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item landscape" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/400-x-699.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-fluid grid-item landscape" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item landscape" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>

                                    <a class="fancybox img-fluid grid-item landscape" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder//small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/small/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/1.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item landscape" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/2.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item studio" href="{{ asset('img/img_holder/big/1.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/1.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item landscape" href="{{ asset('img/img_holder/big/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/big/2.jpg') }}" class="img-fluid all landscape" alt="gallery">
                                    </a>
                                    <a class="fancybox img-fluid grid-item all" href="{{ asset('img/img_holder/small/2.jpg') }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img src="{{ asset('img/img_holder/small/2.jpg') }}" class="img-fluid all studio" alt="gallery">
                                    </a>
                                </div>
                            </div>
                            <!-- .images-box -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <!--<script type="text/javascript" src="{{ asset('js/pages/jquery.isotope.min.js') }}" ></script>-->
<script src="https://unpkg.com/isotope-layout@3.0.5/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/pages/animated-masonry-gallery.js') }}" ></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{ asset('vendors/fancybox/js/jquery.fancybox.pack.js') }}" ></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
    </script>
    
@stop
