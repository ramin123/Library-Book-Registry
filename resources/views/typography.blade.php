@extends('layouts/default')

{{-- Page title --}}
@section('title')
Typography
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
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
                        <a href="#"> Typography</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="pen" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> Typography
                </div>
            </div>
        </div>
    </div>
</div>

@stop


{{-- Page content --}}
@section('content')
<!-- container Section Start -->
<div class="container my-3">
    <!-- Heading Section Start -->
    <h2>Typography</h2>
    <div class="row">
        <!-- Bootstrap Headings Start -->
        <div class="col-md-12 col-lg-4 col-12 col-sm-4">
            <div class="col-12">
                <h3 id="heading_title">Heading</h3>
            </div>
            <div class="box-body text-center">
                <h1>h1. Bootstrap heading</h1>
                <h2>h2. Bootstrap heading</h2>
                <h3>h3. Bootstrap heading</h3>
                <h4>h4. Bootstrap heading</h4>
                <h5>h5. Bootstrap heading</h5>
                <h6>h6. Bootstrap heading</h6>
            </div>
        </div>
        <!-- //Bootstrap Headings End -->
        <!-- Horizontal Descripstion Start -->
        <div class="col-md-12 col-lg-4 col-12 col-sm-4">
            <h3 id="horizontal_description_title" class="text-center">Horizontal Description</h3>
            <dl class="row dl_horizontal">
                <dt class="col-sm-3 col-lg-6 col-md-6 text-right">Description lists</dt>
                <dd class="col-sm-9 col-lg-6 col-md-6">A description list is perfect for defining terms.</dd>
                <dt class="col-sm-3 col-lg-6 col-md-6 text-right ">Question</dt>
                <dd class="col-sm-9 col-lg-6 col-md-6">
                    Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                </dd>
                <!--<dd >Donec id elit non mi porta gravida at eget metus.</dd>-->
                <dt class="col-sm-3 col-lg-6 col-md-6 text-right">Progress bar</dt>
                <dd class="col-sm-9 col-lg-6 col-md-6">Etiam porta sem malesuada magna mollis euismod.</dd>
                <dt class="col-sm-3 col-lg-6 col-md-6 text-right">Answer</dt>
                <dd class="col-sm-9 col-lg-6 col-md-6">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
                </dd>
            </dl>
        </div>
        <!-- //Horizontal Descripstion End -->
        <!-- TextS Section Start -->
        <div class="col-md-12 col-lg-4 col-sm-4 col-12">
            <h3>Texts</h3>
            <div class="float-right">
                <ul class="list-unstyled ">
                    <li class="text-warning">The ship set ground on the shore of this uncharted desert isle with Gilligan the
                        Skipper</li>
                    <li class="text-success">too the millionaire and his wife. Just two good ol' boys Fightin' the system
                        like a true</li>
                    <li class="text-primary">modern day Robin Hood. So join us here each week my friends you're sure to get a
                        smile</li>
                    <li class="text-danger">from seven stranded castaways here on Gilligans Isle.It's time to put on makeup.
                    </li>
                    <li>It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. As long
                        as we live its you and me baby. There ain't nothin' wrong with that. Boy the way Glen Miller
                        played.</li>
                </ul>
            </div>
        </div>
        <!-- //TextS Section Start End -->
    </div>
    <!-- //Heading Section End -->

    <!-- Text align Section Start -->
    <div class="row">
        <!-- Text align start -->
        <div class="col-md-8 col-lg-8  col-sm-12 col-12">
            <h3><label style="padding: 0">Text Align</label></h3>
            <h4 class="text-left"><b>Left aligned text.</b></h4>
            <p class="text-left">Wouldn't you like to get away? Sometimes you want to go where everybody knows your
                name. </p>
            <h4 class="text-center"><b>Center aligned text.</b></h4>
            <p class="text-center">Wouldn't you like to get away? Sometimes you want to go where everybody knows your
                name.</p>
            <h4 class="text-right"><b>Right aligned text.</b></h4>
            <p class="text-right">Wouldn't you like to get away? Sometimes you want to go where everybody knows your
                name.</p>
            <h4 class="text-justify"><b>Justified text.</b></h4>
            <p class="text-justify">Wouldn't you like to get away? Sometimes you want to go where everybody knows your
                name.</p>
            <h4 class="text-nowrap"><b>No wrap text.</b></h4>
            <p class="text-nowrap d-none d-lg-inline-block d-sm-inline-block d-md-inline-block">Wouldn't you like to get
                away? Sometimes you want to go where everybody knows your name.</p>
            <p class="d-lg-none d-sm-none d-md-none">Wouldn't you like to get away?</p>
        </div>

        <!-- //Text align End -->
        <!-- Text Transformation Start -->
        <div class="col-md-4 col-lg-4 col-12 col-sm-12">
            <h3><label id="text_transformation_title">Text Transformation</label></h3>
            <p class="text-lowercase">Wouldn't you like to get away? Sometimes you want.</p>
            <p class="text-uppercase">Wouldn't you like to get away? Sometimes you want.</p>
            <p class="text-capitalize">Wouldn't you like to get away? Sometimes you want.</p>
        </div>
        <!-- Text Transformation End -->
    </div>
    <!-- //Text align Section End -->
    <!-- Blockquote Section Start -->
    <div class="row">
        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
            <blockquote class="blockquote">
                <h3 class="warning">Josh Admin features</h3>
                <p>Latte cultivar single origin fair trade acerbic doppio white. Redeye, con panna, et, cafe au lait
                    robusta a mazagran crema. Froth aroma siphon foam saucer half and half robust froth java beans
                    galao. Coffee instant affogato, percolator to go macchiato, extra cream coffee single shot viennese
                    redeye. Brewed trifecta froth, caramelization breve arabica sweet cinnamon. Coffee dripper carajillo
                    as americano aroma grinder.
                </p>
                <div>--Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </div>
            </blockquote>
        </div>
    </div>
    <!-- //Blockquote Section End -->
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop