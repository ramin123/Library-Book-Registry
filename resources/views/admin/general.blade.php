@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
General Components
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css') }}" />
    <link href="{{ asset('css/pages/alertmessage.css') }}" rel="stylesheet"  type="text/css"/>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>General Components</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="12" data-c="#000" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Components</a>
                    </li>
                    <li class="active">General Components</li>
                </ol>
            </section>
            <!--section ends-->
<section class="content pr-3 pl-3">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Welcome to General Components page
            </div>
        </div>
    </div>
    <!--main content-->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Basic Alerts
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="alert alert-success">
                        <span>
                            Welldone! You successfully read this important alert message.
                        </span>
                    </div>
                    <div class="alert alert-info">
                        <span>
                            Heads up! This alert needs your attention, but it's not super important.
                        </span>
                    </div>
                    <div class="alert alert-warning">
                        <span>Warning! Better check yourself, you're not looking too good.</span>
                    </div>
                    <div class="alert alert-danger">
                        <span>Oh snap! Change a few things up and try submitting again.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Dismissable alerts
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <span>Welldone! You successfully read this important alert message.</span>
                    </div>
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <span>Heads up! This alert needs your attention, but it's not super important.</span>
                    </div>
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <span>Warning! Better check yourself, you're not looking too good.</span>
                    </div>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <span>Oh snap! Change a few things up and try submitting again.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="sky-dish" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Links in alerts
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="alert alert-success ">
                        <strong>Welldone!</strong> You successfully read
                        <a href="#" class="alert-link">this important alert message.</a>
                    </div>
                    <div class="alert alert-info ">
                        <strong>Heads up!</strong> This
                        <a href="#" class="alert-link">alert needs your attention,</a>
                        but it's not super important.
                    </div>
                    <div class="alert alert-warning ">
                        <strong>Warning!</strong> Better check yourself,
                        <a href="#" class="alert-link">you're not looking too good.</a>
                    </div>
                    <div class="alert alert-danger ">
                        <strong>Oh snap!</strong>
                        <a href="#" class="alert-link">Change a few things up</a>
                        and try submitting again.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Notes
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="alert-message alert-message-success">
                        <h4>Alert Message Success</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            <strong>strong message</strong> .
                        </p>
                    </div>
                    <div class="alert-message alert-message-default">
                        <h4>Alert Message Default</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            <strong>strong message</strong> .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12 col-lg-6 my-3">
            <div class="card ">
                <div class="card-header bg-danger text-white ">
                    <span>
                        <i class="livicon" data-name="spinner-two" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Themed Progressbars
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body c2">
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-transitiongoal="20"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="spinner-three" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Striped progressbars
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body c2">
                    <div class="progress progress-striped">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="20"></div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="spinner-five" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Vertical Progress bar
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body c1">
                    <div class="progress vertical bottom">
                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                    <div class="progress vertical bottom">
                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                    <div class="progress vertical bottom">
                        <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                    <div class="progress vertical bottom">
                        <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-secondary text-white">
                    <span>
                        <i class="livicon" data-name="gears" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Vertical Striped Progress bar
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body c1">
                    <div class="progress progress-striped vertical bottom">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="20"></div>
                    </div>
                    <div class="progress progress-striped vertical bottom">
                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                    <div class="progress progress-striped vertical bottom">
                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                    <div class="progress progress-striped vertical bottom">
                        <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                    <div class="progress progress-striped vertical bottom">
                        <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="spinner-one" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Animated progressbars
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body c2">
                    <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="20"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info six-sec-ease-in-out" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success six-sec-ease-in-out" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning six-sec-ease-in-out" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger six-sec-ease-in-out" role="progressbar" data-transitiongoal="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="spinner-six" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Inverse Vertical Striped Progress Bar
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body c1">
                    <div class="progress vertical">
                        <div class="progress progress-striped vertical wide active text_none">
                            <div class="progress-bar progress-bar-primary" role="progressbar" data-transitiongoal="20"></div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress progress-striped vertical wide active text_none">
                            <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress progress-striped vertical wide active">
                            <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress progress-striped vertical wide active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress progress-striped vertical wide active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-danger text-white ">
                    <span>
                        <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Typography heading
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body text-center">
                        <h1>h1. Bootstrap heading</h1>
                        <h2>h2. Bootstrap heading</h2>
                        <h3>h3. Bootstrap heading</h3>
                        <h4 >h4.Bootstrap heading</h4>
                        <h5>h5. Bootstrap heading</h5>
                        <h6>h6. Bootstrap heading</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-secondary text-white">
                    <span>
                        <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Horizontal Description
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <dl class="dl-horizontal">
                            <dt>Description lists</dt>
                            <dd>A description list is perfect for defining terms.</dd>
                            <dt>Question</dt>
                            <dd>
                                Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                            </dd>
                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                            <dt>Progress bar</dt>
                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                            <dt>Answer</dt>
                            <dd>
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                            </dd>
                        </dl>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="align-left" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Unstyled List
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>
                                Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        <i class="livicon" data-name="align-center" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Unordered List
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>
                                Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="align-right" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Ordered Lists
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <ol style="font-size: 14px">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>
                                Nulla volutpat aliquam velit
                                <ol>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ol>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Example body text
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <p>Nullam quis risus eget
                            <a href="javascript:void(0)">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
                        </p>
                        <p>
                            <small>This line of text is meant to be treated as fine print.</small>
                        </p>
                        <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                        <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                        <p>An abbreviation of the word attribute is
                            <abbr title="attribute">attr</abbr>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Emphasis Classes
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Blockquotes
                    </span>
                                <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="bs-component">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bs-component">
                                <blockquote class="float-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 my-lg-0 my-sm-0 my-3">
            <div class="card ">
                <div class="card-header bg-danger text-white">
                    <span>
                        <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Breadcrumbs
                    </span>
                    <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="bs-example">
                        <ol class="breadcrumb">
                            <li class="next">
                                <a href="#">
                                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Home
                                </a>
                            </li>
                            <li class="next">
                                <a href="#">UI Features</a>
                            </li>
                            <li>Pickers</li>
                        </ol>
                        <ul class="breadcrumb">
                            <li class="next1">
                                <a href="#">
                                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                                </a>
                            </li>
                            <li>Tables</li>
                        </ul>
                        <ul class="breadcrumb" style="margin-bottom: 5px;">
                            <li class="next2">
                                <a href="#">
                                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                                </a>
                            </li>
                            <li class="next2">
                                <a href="#">Tables</a>
                            </li>
                            <li>Data Tables</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12">
            <div class="card ">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Poll
                    </span>
                    <span class="float-right ">
                                <i class="fa fa-chevron-up clickable"></i>
                            </span>
                </div>
                <div class="card-body">
                    <div class="card ">
                        <div class="card-header bg-primary text-white">
                            <span>
                                <i class="livicon" data-name="hand-right" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                Who will win this year Football?
                            </span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Brazil</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Netherlands</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; France</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Germany</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="custom-checkbox" value="">&nbsp; Others</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="button" class="btn btn-primary btn-block btn-sm">Vote</button>
                            <a href="#" class="small">View Result</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
<!-- content -->
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script type='text/javascript' src="{{ asset('vendors/bootstrap-progressbar/js/bootstrap-progressbar.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/pages/general.js') }}" ></script>
    
@stop
