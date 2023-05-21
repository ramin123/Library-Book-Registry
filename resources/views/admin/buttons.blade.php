@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Buttons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/buttons.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Buttons</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">UI Features</a>
        </li>
        <li class="active">Buttons</li>
    </ol>
</section>
<!--section ends-->
<section class="content pl-3 pr-3">
    <!--main content-->
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Basic buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary mr-2">Primary</button>
                    <button type="button" class="btn btn-success mr-2">Success</button>
                    <button type="button" class="btn btn-info  mr-2">Info</button>
                    <button type="button" class="btn btn-warning mr-2 ">Warning</button>
                    <button type="button" class="btn btn-danger  mr-2 ">Danger</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="eye-open" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i> Outline Buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">

                    <button type="button" class="btn btn-outline-primary mr-2">
                        Primary
                    </button>
                    <button type="button" class="btn btn-outline-success mr-2">
                        Success
                    </button>
                    <button type="button" class="btn btn-outline-info mr-2">Info
                    </button>
                    <button type="button" class="btn btn-outline-warning mr-2">
                        Warning
                    </button>
                    <button type="button" class="btn btn-outline-danger mr-2">
                        Danger
                    </button>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i>Square buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-success rounded-0 mr-2">Success</button>
                        </div>
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-primary rounded-0 mr-2">Primary</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="eye-open" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i>Circle buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-info  mr-2 rounded-circle">C</button>
                        </div>
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-danger  mr-2 rounded-circle">D</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <span>
                        <i class="livicon" data-name="signal" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Sizing variations
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-success mr-2">Btn-lg</button>
                    <button type="button" class="btn btn-success mr-2">Btn</button>
                    <button type="button" class="btn btn-sm btn-success mr-2">Btn-sm</button>
                    <button type="button" class="btn btn-xs btn-success mr-2">Btn-xs</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i>Block level Button
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">

                    <div class="flatbuttons_small1">
                        <a href="#" class="btn btn-block btn-rounded btn-info btn-large">Button</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <span>
                        <i class="livicon" data-name="signal" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i> Glow Buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-inline text-center">

                            <a href="#" class="btn btn-glow btn-success ">Button</a>
                        </div>
                        <div class="col-6 d-inline text-center">
                            <a href="#" class="btn btn-glow btn-primary ">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="location" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i> Pill Buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-pill btn-info text-white">Button</a>

                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-pill btn-danger text-white">Button</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i>Long shadow
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">

                            <button type="button" class="btn btn-success  btn-longshadow-left p-3"><i
                                    class="fa fa-share-alt fa-2x"></i></button>
                        </div>
                        <div class="col-6 text-center">
                            <button type="button" class="btn btn-primary  btn-longshadow p-3"><i
                                    class="fa fa-rss fa-2x"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i> Button Wrapper
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="btn-wrap">
                                <button type="button" class="btn btn-info btn-circle">
                                    <i class="fa fa-rss"></i>
                                </button>
                            </span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="btn-wrap">
                                <button type="button" class="btn  btn-danger btn-pill">
                                    Button
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <spna>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i>Dropdown Button
                    </spna>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars ml-1"></i>
                                    Select Me
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"> Option Link 1</a>
                                    <a class="dropdown-item" href="#">Option Link 2 </a>
                                    <a class="dropdown-item" href="#">Option Link 3</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-center">
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-primary dropdown-toggle btn-pill btn-dropdown-primary"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fa fa-bars ml-1"></i>
                                    Select Me
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"> Option Link 1</a>
                                    <a class="dropdown-item" href="#">Option Link 2 </a>
                                    <a class="dropdown-item" href="#">Option Link 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i> 3-D Buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-3d btn-info ">Button</a>

                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-3d btn-danger ">Button</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-success">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i>Button Group1
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 text-center mb-3">
                            <div class="ui-group-buttons">
                                <a href="#" class="btn btn-success" role="button">
                                    <span class="livicon" data-name="thumbs-up" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="white"></span>
                                </a>
                                <div class="or text-white"></div>
                                <a href="#" class="btn btn-danger" role="button">
                                    <span class="livicon" data-name="thumbs-down" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="white"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 text-center mb-3">
                            <div class="ui-group-buttons">
                                <a href="#" class="btn btn-success" role="button">
                                    <span class="livicon" data-name="check" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="white"></span>
                                    <span>Sign Up</span>
                                </a>
                                <div class="or text-white"></div>
                                <a href="#" class="btn btn-info" role="button">
                                    <span class="livicon" data-name="remove" data-size="18" data-loop="true"
                                        data-c="#333" data-hc="black"></span>
                                    <span>Reset</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mb-4">
            <div class="card ">
                <div class="card-header card-outline-info">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i>Button Group2
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body p-4">
                    <div class="text-center">
                        <ul class="list-inline">
                            <li>
                                <div class="btn-group btn-pill" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-info">Option 1</button>
                                    <button type="button" class="btn btn-info">Option 2</button>
                                    <button type="button" class="btn btn-info">Option 3</button>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-6 col-12 ">
            <div class="card">
                <div class="card-header card-outline-success ">
                    <span>
                        <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i>Buttons with Icons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-4 text-center">
                            <a href="#" class="btn btn-warning btn-sm " role="button">
                                <span class="livicon" data-name="bookmark" data-size="14" data-loop="true" data-c="#fff"
                                    data-hc="white"></span>
                                <br /> Bookmarks
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#" class="btn btn-primary btn-sm " role="button">
                                <span class="livicon" data-name="signal" data-size="14" data-loop="true" data-c="#fff"
                                    data-hc="white"></span>
                                <br /> Reports
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#" class="btn btn-primary btn-sm " role="button">
                                <span class="livicon" data-name="tag" data-size="14" data-loop="true" data-c="#fff"
                                    data-hc="white"></span>
                                <br /> Tags
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 text-center">
                            <button type="button" class="btn btn-labeled btn-success">
                                <span class="btn-label float-left">
                                    <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff"
                                        data-hc="white"></i>
                                </span>
                                <span class="label-text">Success</span>
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button" class="btn btn-labeled btn-info">
                                <span class="btn-label float-left">
                                    <i class="livicon" data-name="refresh" data-size="16" data-loop="true" data-c="#fff"
                                        data-hc="white"></i>
                                </span>
                                <span class="label-text">Refresh</span>
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button" class="btn btn-labeled btn-danger">
                                <span class="btn-label float-left">
                                    <i class="livicon" data-name="remove" data-size="16" data-loop="true" data-c="#fff"
                                        data-hc="white"></i>
                                </span>
                                <span class="label-text">Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-12 ">
            <div class="card">
                <div class="card-header card-outline-info ">
                    <span>
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i>Social Dashboard
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="list-group">
                                <a href="#" class="list-group-item facebook-like">
                                    <p class="float-right">
                                        <i class="fab fa-facebook-f f"></i>
                                    </p>
                                    <h4 class="list-group-item-heading " id="count1"><b>1000</b></h4>
                                    <p class="list-group-item-text">Likes</p>
                                </a>
                                <a href="#" class="list-group-item twitter">
                                    <p class="float-right">
                                        <i class="fab fa-twitter f"></i>
                                    </p>
                                    <h4 class="list-group-item-heading " id="count2"><b>1000</b></h4>
                                    <p class="list-group-item-text ">Followers</p>
                                </a>
                                <a href="#" class="list-group-item vimeo">
                                    <p class="float-right">
                                        <i class="fab fa-vimeo-v f"></i>
                                    </p>
                                    <h4 class="list-group-item-heading " id="count3"><b>1000</b></h4>
                                    <p class="list-group-item-text">Views</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="list-group">
                                <a href="#" class="list-group-item tumblr">
                                    <p class="float-right">
                                        <i class="fab fa-tumblr f"></i>
                                    </p>
                                    <h4 class="list-group-item-heading " id="count4"><b>1000</b></h4>
                                    <p class="list-group-item-text">Tumblrs</p>
                                </a>
                                <a href="#" class="list-group-item linkedin">
                                    <p class="float-right">
                                        <i class="fab fa-linkedin-in f"></i>
                                    </p>
                                    <h4 class="list-group-item-heading" id="count5"><b>1000</b></h4>
                                    <p class="list-group-item-text ">Connection</p>
                                </a>
                                <a href="#" class="list-group-item youtube">
                                    <p class="float-right">
                                        <i class="fab fa-youtube f"></i>
                                    </p>
                                    <h4 class="list-group-item-heading " id="count6"><b>1000</b></h4>
                                    <p class="list-group-item-text ">Subscribers</p>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class=" col-12 ">
            <div class="card">
                <div class="card-header  card-outline-info ">
                    <span>
                        <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#67c5df"
                            data-hc="#67c5df"></i> Social Buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body p-4">

                    <button class="btn  btn-adn mr-2 ml-4 mb-3"><i class="fab fa-adn"></i></button>
                    <button class="btn  btn-bitbucket mr-2 mb-3"><i class="fab fa-bitbucket"></i></button>
                    <button class="btn  btn-dropbox mr-2 mb-3"><i class="fab fa-dropbox"></i></button>
                    <button class="btn  btn-facebook mr-2 mb-3"><i class="fab fa-facebook"></i></button>
                    <button class="btn  btn-flickr mr-2 mb-3"><i class="fab fa-flickr"></i></button>
                    <button class="btn  btn-foursquare mr-2 mb-3"><i class="fab fa-foursquare"></i></button>
                    <button class="btn  btn-github mr-2 mb-3"><i class="fab fa-github"></i></button>
                    <button class="btn  btn-google mr-2 mb-3"><i class="fab fa-google"></i></button>
                    <button class="btn  btn-instagram mr-2 mb-3"><i class="fab fa-instagram"></i></button>
                    <button class="btn  btn-linkedin mr-2 mb-3"><i class="fab fa-linkedin"></i></button>
                    <button class="btn  btn-microsoft mr-2 mb-3"><i class="fab fa-windows"></i></button>
                    <button class="btn  btn-odnoklassniki mr-2 mb-3"><i class="fab fa-odnoklassniki"></i></button>
                    <button class="btn  btn-openid mr-2 mb-3"><i class="fab fa-openid"></i></button>
                    <button class="btn  btn-pinterest mr-2 mb-3"><i class="fab fa-pinterest"></i></button>
                    <button class="btn  btn-soundcloud mr-2 mb-3"><i class="fab fa-soundcloud"></i></button>
                    <button class="btn  btn-tumblr mr-2 mb-3"><i class="fab fa-tumblr"></i></button>
                    <button class="btn  btn-twitter mr-2 mb-3"><i class="fab fa-twitter"></i></button>
                    <button class="btn  btn-vimeo mr-2 mb-3"><i class="fab fa-vimeo-square"></i></button>
                    <button class="btn  btn-vk mr-2 mb-3"><i class="fab fa-vk"></i></button>
                    <button class="btn  btn-yahoo mr-2 mb-3"><i class="fab fa-yahoo"></i></button>


                    <!--end-->
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-8 col-lg-12 col-12 mb-sm-3">
            <div class="card">
                <div class="card-header  card-outline-info ">
                    <span>
                        <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#31b0d5"
                            data-hc="#31b0d5"></i> Social Outline Buttons
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body p-4">
                    <button class="btn  btn-outline-adn mr-2 mb-3"><i class="fab fa-adn"></i></button>
                    <button class="btn  btn-outline-bitbucket mr-2 mb-3"><i class="fab fa-bitbucket"></i></button>
                    <button class="btn  btn-outline-dropbox mr-2 mb-3"><i class="fab fa-dropbox"></i></button>
                    <button class="btn  btn-outline-facebook mr-2 mb-3"><i class="fab fa-facebook"></i></button>
                    <button class="btn  btn-outline-flickr mr-2 mb-3"><i class="fab fa-flickr"></i></button>
                    <button class="btn  btn-outline-foursquare mr-2 mb-3"><i class="fab fa-foursquare"></i></button>
                    <button class="btn  btn-outline-github mr-2 mb-3"><i class="fab fa-github"></i></button>
                    <button class="btn  btn-outline-google mr-2 mb-3"><i class="fab fa-google"></i></button>
                    <button class="btn  btn-outline-instagram mr-2 mb-3"><i class="fab fa-instagram"></i></button>
                    <button class="btn  btn-outline-linkedin mr-2 mb-3"><i class="fab fa-linkedin"></i></button>
                    <button class="btn  btn-outline-microsoft mr-2 mb-3"><i class="fab fa-windows"></i></button>
                    <button class="btn  btn-outline-odnoklassniki mr-2 mb-3"><i class="fab fa-odnoklassniki"></i>
                    </button>
                    <button class="btn  btn-outline-openid mr-2 mb-3"><i class="fab fa-openid"></i></button>
                    <button class="btn  btn-outline-pinterest mr-2 mb-3"><i class="fab fa-pinterest"></i></button>
                    <button class="btn  btn-outline-soundcloud mr-2 mb-3"><i class="fab fa-soundcloud"></i></button>
                    <button class="btn  btn-outline-tumblr mr-2 mb-3"><i class="fab fa-tumblr"></i></button>
                    <button class="btn  btn-outline-twitter mr-2 mb-3"><i class="fab fa-twitter"></i></button>
                    <button class="btn  btn-outline-vimeo mr-2 mb-3"><i class="fab fa-vimeo-square"></i></button>
                    <button class="btn  btn-outline-vk mr-2 mb-3"><i class="fab fa-vk"></i></button>
                    <button class="btn  btn-outline-yahoo mr-2 mb-3"><i class="fab fa-yahoo"></i></button>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.js') }}"></script>
<script src="{{ asset('js/pages/custom_buttons.js') }}"></script>

@stop