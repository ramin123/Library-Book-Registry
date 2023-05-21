@extends('layouts/default')

{{-- Page title --}}
@section('title')
Products
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- breadcrumb --}}
@section('top')
<div class="breadcum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                        </a>
                    </li>
                    <li class="d-none d-sm-block ">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">Products</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> Products
                </div>
            </div>
        </div>

    </div>
</div>
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container my-3">
    <!--Content Section Start -->
    <!-- Best Deal Section Start -->
    <h3 class="text-primary mb-3">BEST DEALS</h3>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="3.5s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/htc.jpg') }}"
                        class="img-fluid" alt="htc image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">HTC Desire 816G Plus - (Blue)</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android v4.4.2 (KitKat)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 13 MP,Autofocus, LED flash</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.5 Inch Screen</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 1080HD Video</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16M colors</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Octa-core 1.7 GHz Cortex-</li>
                </ul>
                <h4 class="text-primary">Rs. 17,826 <del class="text-danger">Rs. 21,990</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class=" thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/sony.jpg') }}"
                        class="img-fluid" alt="sony image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Sony Xperia C3 - (Black)</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android v4.4.2 (KitKat)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 8 MP autofocus LED flash</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.0 Inch Screen </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> TFT capacitive touchscreen </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16M colors</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Quad-core 1.2 GHz</li>
                </ul>
                <h4 class="text-primary">Rs. 18,088 <del class="text-danger">Rs. 21,990</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.9s">
            <div class=" thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/karbon.jpg') }}"
                        class="img-fluid" alt="karbon image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Karbonn Titanium Octane Plus</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16 MP,Autofocus, LED flash</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.0 inch Screen </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Nano Sim</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> LCD capacitive touchscreen,</li>
                </ul>
                <h4 class="text-primary">Rs. 7,700 <del class="text-danger">Rs. 13,990</del></h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6  col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="1.4s">
            <div class=" thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/nokia.jpg') }}"
                        class="img-fluid" alt="nokia image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Microsoft Lumia 535 Dual SIM </h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Microsoft Windows Phone 8.1</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5 MP, Camera </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> autofocus, LED flash </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.0 inch Screen </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16M colors</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Dual Sim</li>
                </ul>
                <h4 class="text-primary">Rs. 8,571 <del class="text-danger">Rs. 10,299</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-12">
            <nav aria-label="Page navigation" class="float-right">
                <ul class="pagination">
                    <li class="disabled page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">&laquo;</span></a></li>
                    <li class="active page-item"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- //Best Deal Section End -->
    <!-- New Launches Section Start -->
    <h3 class="text-primary mb-3">NEW LAUNCHES </h3>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="3.5s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/samsung balck.jpg') }}"
                        class="img-fluid" alt="samsung black image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Samsung Galaxy S6 32 GB - (Black)</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.1 inches </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Nano Sim</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Internal 32 GB </li>
                </ul>
                <h4 class="text-primary">Rs. 49,900</h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class=" thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/samsung.jpg') }}"
                        class="img-fluid" alt="samsung image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Samsung Galaxy S6 64 GB - (White)</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.1 inches </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Nano Sim</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Internal 64 GB </li>
                </ul>
                <h4 class="text-primary">Rs. 55,900</h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6  col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.9s">
            <div class=" thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/samsung balck.jpg') }}"
                        class="img-fluid" alt="samsung black image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Samsung Galaxy S6 Edge 32 GB</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.1 inches </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Nano Sim</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Internal 32 GB </li>
                </ul>
                <h4 class="text-primary">Rs. 58,900</h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="1.4s">
            <div class=" thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/samsung.jpg') }}"
                        class="img-fluid" alt="samsung image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold">Samsung Galaxy S6 Edge 64 GB </h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Android OS, v5.0.2 (Lollipop)</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 16 MP, 3456 x 4608 pixels</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> 5.1 inches </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Nano Sim</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Quad 2.1GHz + Quad </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Internal 64 GB </li>
                </ul>
                <h4 class="text-primary">Rs. 64,900</h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-12">
            <nav aria-label="Page navigation" class="float-right">
                <ul class="pagination">
                    <li class="disabled page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">&laquo;</span></a></li>
                    <li class="active page-item"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- //New Launches Section End -->
    <!-- Womens Section Start -->
    <h3 class="text-primary mb-3">WOMENS </h3>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="3.5s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/saree.jpg') }}"
                        class="img-fluid" alt="saree image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Vichitra Multi Colour Will Make Your Day Floral
                    Printed Saree</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product Type - Women's Saree</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Multi Colour</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Pattern - Printed</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Georgette</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine/Hand Wash</li>
                </ul>
                <h4 class="text-primary">Rs. 1198.00<del class="text-danger"> Rs. 1599.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/saree2.jpg') }}"
                        class="img-fluid" alt="saree2 image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Diva Fashion Brown Vibrant Saree With Mixed Print
                </h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product Type - Women's Saree</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Multi Colour</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Pattern - Printed</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Jacquard</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine/Hand Wash</li>
                </ul>
                <h4 class="text-primary">Rs. 1078.00<del class="text-danger"> Rs. 1349.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="clearfix visible-sm"></div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.9s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/saree3.jpg') }}"
                        class="img-fluid" alt="saree3 image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Bunkar Purple Ethnic Motif Resham Work Saree</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product Type - Women's Saree</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Multi Colour</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Pattern - Printed</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Georgette</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine/Hand Wash</li>
                </ul>
                <h4 class="text-primary">Rs. 1348.00<del class="text-danger"> Rs. 1799.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="1.4s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/saree4.jpg') }}"
                        class="img-fluid" alt="saree4 image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Silk Bazaar Silk Casual Wear Saree - Rust Work
                    Saree</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product Type - Women's Saree</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Pink</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Pattern - Printed</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Length(in mtr) - 6.3 Meter </li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Dry Clean Only</li>
                </ul>
                <h4 class="text-primary">Rs. 1139.00<del class="text-danger"> Rs. 1425.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-12 text-right">
            <a href="{{ URL::to('category') }}" class="more_items ml-auto">More items</a>
        </div>
    </div>
    <!-- //Womens Section End -->
    <!-- Mens Section Start -->
    <h3 class="text-primary mb-3">MENS </h3>
    <div class="row">
        <div class="col-sm-6 col-md-6  col-lg-3 wow flipInX" data-wow-duration="3.5s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/men.jpg') }}"
                        class="img-fluid" alt="men image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Mario Solid Shirt</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product - Men's Club Wear</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Blue</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Cotton</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine Wash </li>
                </ul>
                <h4 class="text-primary">Rs. 1699.00<del class="text-danger"> Rs. 1999.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/men2.jpg') }}"
                        class="img-fluid" alt="men2 image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Inmark White Linen Crafted Shirt</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product -Men's Club Wear</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Cotton</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - White</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine/Hand Wash</li>
                </ul>
                <h4 class="text-primary">Rs. 1899.00<del class="text-danger"> Rs. 1999.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="0.9s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/men3.jpg') }}"
                        class="img-fluid" alt="men3 image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Andrew Solid Shirt</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product -Men's Club Wear</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Cotton</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Mehroon</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine/Hand Wash</li>
                </ul>
                <h4 class="text-primary">Rs. 1599.00<del class="text-danger"> Rs. 1999.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6  col-lg-3 wow flipInX" data-wow-duration="1s" data-wow-delay="1.4s">
            <div class="thumbnail text-center">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/cart/men4.jpg') }}"
                        class="img-fluid" alt="men4 image"></a>
                <br />
                <h5 class="text-primary mt-4 mb-2 font-weight-bold"> Atelier Check Shirt</h5>
                <ul>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Product -Men's Club Wear</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Fabric - Cotton</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Color - Multi Color</li>
                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#787878"
                            data-hc="787878"></i> Care - Machine/Hand Wash</li>
                </ul>
                <h4 class="text-primary">Rs. 1499.00<del class="text-danger"> Rs. 1999.00</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
        <div class="col-12 text-right">
            <a href="{{ URL::to('category') }}" class="more_items ">More items</a>
        </div>
    </div>
    <!-- //Mens Section End -->
    <!-- //Content Section End -->
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
            new WOW().init();
        });
</script>
@stop