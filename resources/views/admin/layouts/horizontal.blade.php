<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        | Josh Admin Template
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- global css -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('vendors/slimmenu/css/slimmenu.min.css') }}  ">
    <link rel="stylesheet" href="{{ asset('css/horizontal_menu.css') }}">
    <!-- font Awesome -->

    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->

<body class="skin-josh">
<header class="header">

    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="{{ route('admin.dashboard') }}" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>
        <div class="navbar-right toggle">
            <ul class="nav navbar-nav  list-inline">
                @include('admin.layouts._messages')
                @include('admin.layouts._notifications')
                <li class=" nav-item dropdown user user-menu">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        @if(Sentinel::getUser()->pic)
                            <img src="{{ Sentinel::getUser()->pic }}" alt="img" height="35px" width="35px"
                                 class="rounded-circle img-fluid float-left"/>

                        @elseif(Sentinel::getUser()->gender === "male")
                            <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" height="35px" width="35px"
                                 class="rounded-circle img-fluid float-left"/>

                        @elseif(Sentinel::getUser()->gender === "female")
                            <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" height="35px" width="35px"
                                 class="rounded-circle img-fluid float-left"/>

                        @else
                            <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img" height="35px" width="35px"
                                 class="rounded-circle img-fluid float-left"/>
                        @endif
                        <div class="riot">
                            <div>
                                <p class="user_name_max">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            @if(Sentinel::getUser()->pic)
                                <img src="{{ Sentinel::getUser()->pic }}" alt="img" height="35px" width="35px"
                                     class="rounded-circle img-fluid float-left"/>

                            @elseif(Sentinel::getUser()->gender === "male")
                                <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" height="35px" width="35px"
                                     class="rounded-circle img-fluid float-left"/>

                            @elseif(Sentinel::getUser()->gender === "female")
                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" height="35px" width="35px"
                                     class="rounded-circle img-fluid float-left"/>

                            @else
                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img" height="35px" width="35px"
                                     class="rounded-circle img-fluid float-left"/>
                            @endif
                            <p class="topprofiletext">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                                <i class="livicon" data-name="user" data-s="18"></i>
                                My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="{{ route('admin.users.edit', Sentinel::getUser()->id) }}">
                                <i class="livicon" data-name="gears" data-s="18"></i>
                                Account Settings
                            </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="float-left">
                                <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}">
                                    <i class="livicon" data-name="lock" data-size="16" data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                    Lock
                                </a>
                            </div>
                            <div class="float-right">
                                <a href="{{ URL::to('admin/logout') }}">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</header>


<div class="row horizontal_menu">
    <div class="col-md-12">
        @include('admin.layouts._horizontal_menu')
    </div>
</div>

<div class="wrapper ">
    <!-- Left side column. contains the logo and sidebar -->

    <aside class="right-side">

        <!-- Notifications -->
        <div id="notific">
            @include('notifications')
        </div>

        <!-- Content -->
        @yield('content')

    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->

<script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendors/slimmenu/js/jquery.slimmenu.min.js') }}"></script>
<script>
    $('#navigation').slimmenu(
        {
            resizeWidth: '574',
            collapserTitle: 'Main Menu',
            animSpeed: 'medium',
            easingEffect: null,
            indentChildren: false,
            expandIcon: '<i class="fa fa-angle-down"></i>',
            collapseIcon: '<i class="fa fa-angle-up"></i>'
        });

        $('.sub-toggle').on('click',function(){

            $('.sub-toggle').not(this).not($(this).parent('li').closest('ul').next()).removeClass('expanded');

//            $('.sub-toggle').not($(this).find('i')).find('i').removeClass('fa-angle-up').addClass('fa-angle-down');

            $('.sub-toggle').not($(this).find('i')).not($(this).parent('li').closest('ul').next().find('i')).find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
            $('.sub-toggle').not(this).not($(this).parent('li').closest('ul').next()).prev().slideUp(500);

        });
        $('.has-submenu .sub-toggle').on('click',function(){
            $(this).parent('li').closest('ul').next().find('i').removeClass('fa-angle-down').addClass('fa-angle-up');
        });


</script>



<!-- end of global js -->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>
