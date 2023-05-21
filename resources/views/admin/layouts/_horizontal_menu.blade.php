<ul id="navigation" class="slimmenu">



    <li class="main-menu option-one"><a href="javascript:void(0)" {!! (Request::is('admin') || Request::is('admin/index1') ? 'class="menu-list active"' : 'menu-list' ) !!}><span class="d-block d-lg-none">Index</span><span class="d-none d-lg-block">Dashboards</span></a>
        <ul>

            <li>
                <a href="{{ route('admin.dashboard') }}" {!! (Request::is('admin') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Dashboard 1
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/index1') }}" {!! (Request::is('admin/index1') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Dashboard 2
                </a>
            </li>
        </ul>
    </li>
    <li class="main-menu"><a href="javascript:void(0)" {!! (Request::is('admin/generator_builder') || Request::is('admin/log_viewers') || Request::is('admin/custom_datatables') || Request::is('admin/multiple_upload') ? 'class="menu-list active"' : 'menu-list' ) !!}>Laravel</a>
        <ul>
            <li><a href="javascript:void(0)" {!! (Request::is('admin/generator_builder') || Request::is('admin/log_viewers') || Request::is('admin/custom_datatables') || Request::is('admin/multiple_upload') ? 'class="sub-list active"' : 'sub-list' ) !!}>Laravel Examples</a>
                <ul>
                    <li>
                        <a href="{{  URL::to('admin/generator_builder') }}" {!! (Request::is('admin/generator_builder') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            CRUD Builder
                        </a>
                    </li>
                    <li>
                        <a href="{{  URL::to('admin/log_viewers') }}" {!! (Request::is('admin/log_viewers') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Log Viewer
                        </a>
                    </li>
                    <li>
                        <a href="{{  URL::to('admin/custom_datatables') }}" {!! (Request::is('admin/custom_datatables') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Custom Datatables
                        </a>
                    </li>
                    <li>
                        <a href="{{  URL::to('admin/multiple_upload') }}" {!! (Request::is('admin/multiple_upload') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Multiple File Upload
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" {!! (Request::is('admin/laravel_charts') || Request::is('admin/database_charts') ? 'class="sub-list active"' : 'sub-list' ) !!}>Laravel Charts</a>
                <ul>
                    <li>
                        <a href="{{  URL::to('admin/laravel_charts') }}" {!! (Request::is('admin/laravel_charts') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Simple Charts
                        </a>
                    </li>
                    <li>
                        <a href="{{  URL::to('admin/database_charts') }}" {!! (Request::is('admin/database_charts') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Database Charts
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </li>

    <li class="main-menu"><a href="javascript:void(0)" {!! (Request::is('admin/roles/*') || Request::is('admin/users/*') || Request::is('admin/deleted_users') || Request::is('admin/login') || Request::is('admin/register') ? 'class="menu-list active"' : 'menu-list' ) !!}>Users</a>
        <ul>
            <li><a href="javascript:void(0)" {!! (Request::is('admin/role/*') ? 'class="menu-list active"' : 'sub-list' ) !!}>Roles</a>
                <ul>
                    <li>
                        <a href="{{  URL::to('admin/roles') }}" {!! (Request::is('admin/roles') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Role List
                        </a>
                    </li>
                    <li>
                        <a href="{{  URL::to('admin/roles/create') }}" {!! (Request::is('admin/roles/create') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                            Add new role
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{  URL::to('admin/users') }}" {!! (Request::is('admin/users') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Users List
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/users/create') }}" {!! (Request::is('admin/users/create') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Add new User
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/deleted_users') }}" {!! (Request::is('admin/deleted_users') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Deleted Users
                </a>
            </li>

        </ul>
    </li>

    <li class="main-menu option-one"><a href="javascript:void(0)" {!! (Request::is('admin/blogcategory') || Request::is('admin/blog/*') ? 'class="menu-list active"' : 'menu-list' ) !!}>Blog</a>
        <ul>

            <li>
                <a href="{{ URL::to('admin/blogcategory') }}" {!! (Request::is('admin/blogcategory') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Blog Category
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/blog') }}" {!! (Request::is('admin/blog') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Blog List
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/blog/create') }}" {!! (Request::is('admin/blog/create') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Add Blog
                </a>
            </li>


        </ul>
    </li>

    <li class="main-menu"><a href="javascript:void(0)" {!! (Request::is('admin/charts') || Request::is('admin/invoice') || Request::is('admin/piecharts') || Request::is('admin/charts_animation') || Request::is('admin/jscharts') ? 'class="menu-list active"' : 'menu-list' ) !!}>Charts</a>
        <ul>
            <li>
                <a href="{{  URL::to('admin/charts') }}" {!! (Request::is('admin/charts') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Flot Charts
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/piecharts') }}" {!! (Request::is('admin/piecharts') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Pie Charts
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/charts_animation') }}" {!! (Request::is('admin/charts_animation') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Animated Charts
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/jscharts') }}" {!! (Request::is('admin/jscharts') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Js Charts
                </a>
            </li>
            <li>
                <a href="{{  URL::to('admin/sparklinecharts') }}" {!! (Request::is('admin/sparklinecharts') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    SparkLine Charts
                </a>
            </li>
        </ul>
    </li>


    <li class=""><a href="javascript:void(0)" {!! (Request::is('admin/lockscreen') || Request::is('admin/invoice') || Request::is('admin/blank') || Request::is('admin/login') || Request::is('admin/register') || Request::is('admin/horizontal_layout') ? 'class="menu-list active"' : 'menu-list' ) !!}>Pages </a>
        <ul>
            <li>
                <a href="{{ URL::to('admin/horizontal_layout') }}" {!! (Request::is('admin/horizontal_layout') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Horizontal Layout
                </a>
            </li>
            <li>
                <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}" {!! (Request::is('admin/lockscreen') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Lockscreen
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/invoice') }}" {!! (Request::is('admin/invoice') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Invoice
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/blank') }}" {!! (Request::is('admin/blank') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Blank
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/login') }}" {!! (Request::is('admin/login') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Login
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/register') }}" {!! (Request::is('admin/register') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    Register
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/404') }}" {!! (Request::is('admin/404') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    404 Error
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/500') }}" {!! (Request::is('admin/500') ? 'class="sub-list active"' : 'sub-list' ) !!}>
                    500 Error
                </a>
            </li>
        </ul>
    </li>



</ul>
