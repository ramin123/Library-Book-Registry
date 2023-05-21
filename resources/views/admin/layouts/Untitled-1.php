<ul id="menu" class="page-sidebar-menu">

    <li {!! (Request::is('admin') ? 'class="active"' : '' ) !!}>
        <a href="{{ route('admin.dashboard') }}">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Dashboard 1</span>
        </a>
    </li>
    <li {!! (Request::is('admin/genres') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/genres') }}">
            <i class="livicon" data-name="genre" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Genre</span>
        </a>
    </li>
    <li {!! (Request::is('admin/authors') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/authors') }}">
            <i class="livicon" data-name="authors" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Author</span>
        </a>
    </li>
    <li {!! (Request::is('admin/books') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/books') }}">
            <i class="livicon" data-name="books" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Books</span>
        </a>
    </li>
    <li {!! (Request::is('admin/books/authorList/show') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/books/authorList/show') }}">
            <i class="livicon" data-name="books" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Authors And Books</span>
        </a>
    </li>
    <li {!! (Request::is('admin/books/list/list') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/books/list/list') }}">
            <i class="livicon" data-name="books" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Books list -Author - Genre</span>
        </a>
    </li>
    <!-- <li {!! (Request::is('admin/books') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/genres') }}">
            <i class="livicon" data-name="genre" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Genre</span>
        </a>
    </li> -->
    <!-- <li {!! (Request::is('admin/index1') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/index1') }}">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
            Dashboard 2
        </a>
    </li>

    <li {!! (Request::is('admin/generator_builder') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL('admin/generator_builder') }}">
            <i class="livicon" data-name="shield" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            CRUD Generator
        </a>
    </li> -->
    <li {!! (Request::is('admin/log_viewers') || Request::is('admin/log_viewers/logs') ? 'class="active"' : '' ) !!}>

        <a href="{{  URL::to('admin/log_viewers') }}">
            <i class="livicon" data-name="help" data-size="18" data-c="#1DA1F2" data-hc="#1DA1F2" data-loop="true"></i>
            Log Viewer
        </a>
    </li>
    <li {!! (Request::is('admin/activity_log') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/activity_log') }}">
            <i class="livicon" data-name="eye-open" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            Activity Log
        </a>
    </li>
    <li {!! (Request::is('admin/datatables') || Request::is('admin/editable_datatables') || Request::is('admin/dropzone') || Request::is('admin/multiple_upload') || Request::is('admin/custom_datatables')|| Request::is('admin/selectfilter') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Laravel Examples</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/datatables') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/datatables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Ajax Data Tables
                </a>
            </li>
            <li {!! (Request::is('admin/editable_datatables') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/editable_datatables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Editable Data Tables
                </a>
            </li>
            <li {!! (Request::is('admin/custom_datatables') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/custom_datatables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Custom Datatables
                </a>
            </li>
            <li {!! (Request::is('admin/dropzone') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/dropzone') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Drop Zone
                </a>
            </li>
            <li {!! (Request::is('admin/multiple_upload') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/multiple_upload') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Multiple File Upload
                </a>
            </li>
            <li {!! (Request::is('admin/selectfilter') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/selectfilter') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Select2 Filters
                </a>
            </li>
        </ul>
    </li>
    <li {!! ( Request::is('admin/laravel_charts') || Request::is('admin/database_charts') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="barchart" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Laravel Charts</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/laravel_charts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/laravel_charts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Simple charts
                </a>
            </li>
            <li {!! (Request::is('admin/database_charts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/database_charts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Database Charts
                </a>
            </li>
        </ul>
    </li>

    <li {!! (Request::is('admin/form_builder') || Request::is('admin/form_builder2') || Request::is('admin/buttonbuilder') || Request::is('admin/gridmanager') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="wrench" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Builders</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/form_builder') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/form_builder') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Builder
                </a>
            </li>
            <li {!! (Request::is('admin/form_builder2') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/form_builder2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Builder 2
                </a>
            </li>
            <li {!! (Request::is('admin/buttonbuilder') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/buttonbuilder') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Button Builder
                </a>
            </li>
        </ul>
    </li>

    <li {!! (Request::is('admin/form_examples') || Request::is('admin/editor') || Request::is('admin/editor2') || Request::is('admin/form_layout') || Request::is('admin/validation') || Request::is('admin/formelements') || Request::is('admin/dropdowns') || Request::is('admin/radio_checkbox') || Request::is('admin/ratings') || Request::is('admin/form_layouts') || Request::is('admin/formwizard') || Request::is('admin/accordionformwizard') || Request::is('admin/datepicker') | Request::is('admin/advanced_datepickers')? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="doc-portrait" data-c="#67C5DF" data-hc="#67C5DF" data-size="18" data-loop="true"></i>
            <span class="title">Forms</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/form_examples') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/form_examples') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Examples
                </a>
            </li>
            <li {!! (Request::is('admin/editor') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/editor') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Editors
                </a>
            </li>
            <li {!! (Request::is('admin/editor2') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/editor2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Editors2
                </a>
            </li>
            <li {!! (Request::is('admin/validation') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/validation') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Validation
                </a>
            </li>
            <li {!! (Request::is('admin/formelements') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/formelements') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Elements
                </a>
            </li>
            <li {!! (Request::is('admin/dropdowns') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/dropdowns') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Drop Downs
                </a>
            </li>
            <li {!! (Request::is('admin/radio_checkbox') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/radio_checkbox') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Radio and Checkbox
                </a>
            </li>
            <li {!! (Request::is('admin/ratings') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/ratings') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Ratings
                </a>
            </li>
            <li {!! (Request::is('admin/form_layouts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/form_layouts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Layouts
                </a>
            </li>
            <li {!! (Request::is('admin/formwizard') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/formwizard') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Wizards
                </a>
            </li>
            {{--<li {!! (Request::is('admin/accordionformwizard') ? 'class="active"' : '') !!}>--}}
            {{--<a href="{{ URL::to('admin/accordionformwizard') }}">--}}
            {{--<i class="fa fa-angle-double-right"></i>--}}
            {{--Accordion Wizards--}}
            {{--</a>--}}
            {{--</li>--}}

            <li {!! (Request::is('admin/datepicker') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/datepicker') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Date Pickers
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_datepickers') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/advanced_datepickers') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Date Pickers
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/animatedicons') || Request::is('admin/buttons') || Request::is('admin/advanced_buttons') || Request::is('admin/tabs_accordions') || Request::is('admin/cards') || Request::is('admin/icon') || Request::is('admin/color') || Request::is('admin/grid') || Request::is('admin/carousel') || Request::is('admin/tagsinput') || Request::is('admin/nestable_list') || Request::is('admin/sortable_list') || Request::is('admin/toastr') || Request::is('admin/notifications')|| Request::is('admin/treeview_jstree')|| Request::is('admin/sweetalert') || Request::is('admin/session_timeout') || Request::is('admin/portlet_draggable') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
            <span class="title">UI Features</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">

            <li {!! (Request::is('admin/buttons') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/buttons') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Buttons
                </a>
            </li>
            <li {!! (Request::is('admin/tabs_accordions') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/tabs_accordions') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Tabs and Accordions
                </a>
            </li>
            <li {!! (Request::is('admin/cards') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/cards') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Cards
                </a>
            </li>
            <li {!! (Request::is('admin/icon') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/icon') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Icon Fonts
                </a>
            </li>
            <li {!! (Request::is('admin/animatedicons') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/animatedicons') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Animated Icons
                </a>
            </li>
            <li {!! (Request::is('admin/color') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/color') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Color Picker Slider
                </a>
            </li>
            <li {!! (Request::is('admin/grid') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/grid') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Grid Layout
                </a>
            </li>

            <li {!! (Request::is('admin/carousel') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/carousel') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Carousel
                </a>
            </li>
            <li {!! (Request::is('admin/tagsinput') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/tagsinput') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Tags Input
                </a>
            </li>
            <li {!! (Request::is('admin/nestable_list') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/nestable_list') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Nestable List
                </a>
            </li>

            <li {!! (Request::is('admin/sortable_list') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/sortable_list') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sortable List
                </a>
            </li>

            <li {!! (Request::is('admin/treeview_jstree') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/treeview_jstree') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Treeview and jsTree
                </a>
            </li>

            <li {!! (Request::is('admin/toastr') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/toastr') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Toastr Notifications
                </a>
            </li>

            <li {!! (Request::is('admin/sweetalert') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/sweetalert') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sweet Alert
                </a>
            </li>

            <li {!! (Request::is('admin/notifications') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/notifications') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Notifications
                </a>
            </li>
            <li {!! (Request::is('admin/session_timeout') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/session_timeout') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Session Timeout
                </a>
            </li>
            <li {!! (Request::is('admin/portlet_draggable') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/portlet_draggable') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Draggable Portlets
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/general') || Request::is('admin/modals') || Request::is('admin/pickers') || Request::is('admin/x-editable') || Request::is('admin/timeline') || Request::is('admin/animations') || Request::is('admin/sliders') || Request::is('admin/knob') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
            <span class="title">UI Components</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/general') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/general') }}">
                    <i class="fa fa-angle-double-right"></i>
                    General Components
                </a>
            </li>
            <li {!! (Request::is('admin/modals') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/modals') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Modals
                </a>
            </li>
            <li {!! (Request::is('admin/pickers') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/pickers') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Pickers
                </a>
            </li>
            <!--<li {!! (Request::is('admin/x-editable') ? 'class="active"' : '') !!}>-->
            <!--<a href="{{ URL::to('admin/x-editable') }}">-->
            <!--<i class="fa fa-angle-double-right"></i>-->
            <!--X-editable-->
            <!--</a>-->
            <!--</li>-->
            <li {!! (Request::is('admin/timeline') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/timeline') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Timeline
                </a>
            </li>
            <li {!! (Request::is('admin/animations') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/animations') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Animations
                </a>
            </li>
            <li {!! (Request::is('admin/sliders') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/sliders') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sliders
                </a>
            </li>
            <li {!! (Request::is('admin/knob') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/knob') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Circles Sliders
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/simple_table') || Request::is('admin/responsive_tables') || Request::is('admin/advanced_tables') || Request::is('admin/advanced_tables2') || Request::is('admin/jtable') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
            <span class="title">DataTables</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/simple_table') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/simple_table') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Simple tables
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_tables') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/advanced_tables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Data Tables
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_tables2') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/advanced_tables2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Data Tables2
                </a>
            </li>

            <li {!! (Request::is('admin/responsive_tables') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/responsive_tables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Responsive Datatables
                </a>
            </li>
            {{--<li {!! (Request::is('admin/jtable') ? 'class="active"' : '') !!}>--}}
            {{--<a href="{{ URL::to('admin/jtable') }}">--}}
            {{--<i class="fa fa-angle-double-right"></i>--}}
            {{--JTable--}}
            {{--</a>--}}
            {{--</li>--}}
        </ul>
    </li>
    <li {!! (Request::is('admin/charts') || Request::is('admin/piecharts') || Request::is('admin/charts_animation') || Request::is('admin/jscharts') || Request::is('admin/sparklinecharts') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="barchart" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Charts</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/charts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/charts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Flot Charts
                </a>
            </li>
            <li {!! (Request::is('admin/piecharts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/piecharts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Pie Charts
                </a>
            </li>
            <li {!! (Request::is('admin/charts_animation') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/charts_animation') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Animated Charts
                </a>
            </li>
            <li {!! (Request::is('admin/jscharts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/jscharts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    JS Charts
                </a>
            </li>
            <li {!! (Request::is('admin/sparklinecharts') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/sparklinecharts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sparkline Charts
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/calendar') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/calendar') }}">
            <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
            Calendar
            <span class="badge badge-danger event_count">7</span>
        </a>
    </li>
    <li {!! (Request::is('admin/emails/inbox') || Request::is('admin/emails/compose') || Request::is('admin/emails/sent') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" ) !!}>
        <a href="#">
            <i class="livicon" data-name="mail" data-size="18" data-c="#67C5DF" data-hc="#67C5DF" data-loop="true"></i>
            <span>Email</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/emails/compose') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/emails/compose') }}">
                    <i class="fa fa-angle-double-right"></i> Compose
                </a>
            </li>
            <li {!! (Request::is('admin/emails/inbox') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/emails/inbox') }}">
                    <i class="fa fa-angle-double-right"></i> Inbox
                </a>
            </li>
            <li {!! (Request::is('admin/emails/sent') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/emails/sent') }}">
                    <i class="fa fa-angle-double-right"></i> Sent
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/tasks') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/tasks') }}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
            Tasks
            <span class="badge badge-danger" id="taskcount">{{ Request::get('tasks_count') }}</span>
        </a>
    </li>
    <li {!! (Request::is('admin/gallery') || Request::is('admin/masonry_gallery') || Request::is('admin/imagecropping') || Request::is('admin/imgmagnifier') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
            <span class="title">Gallery</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/gallery') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/gallery') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Gallery
                </a>
            </li>
            <li {!! (Request::is('admin/masonry_gallery') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/masonry_gallery') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Masonry Gallery
                </a>
            </li>
            <li {!! (Request::is('admin/imagecropping') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/imagecropping') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Image Cropping
                </a>
            </li>
            <li {!! (Request::is('admin/imgmagnifier') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/imgmagnifier') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Image Magnifier
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/users') || Request::is('admin/bulk_import_users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) || Request::is('admin/user_profile') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/roles') || Request::is('admin/roles/create') || Request::is('admin/roles/*') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Roles</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/roles') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Roles List
                </a>
            </li>
            <li {!! (Request::is('admin/roles/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Role
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/googlemaps') || Request::is('admin/vectormaps') || Request::is('admin/advancedmaps') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="map" data-c="#67C5DF" data-hc="#67C5DF" data-size="18" data-loop="true"></i>
            <span class="title">Maps</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/googlemaps') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/googlemaps') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Google Maps
                </a>
            </li>
            <li {!! (Request::is('admin/vectormaps') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/vectormaps') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Vector Maps
                </a>
            </li>
            <li {!! (Request::is('admin/advancedmaps') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/advancedmaps') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Maps
                </a>
            </li>
        </ul>
    </li>
    <li {!! ((Request::is('admin/blogcategory') || Request::is('admin/blogcategory/create') || Request::is('admin/blog') || Request::is('admin/blog/create')) || Request::is('admin/blog/*') || Request::is('admin/blogcategory/*') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
            <span class="title">Blog</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/blogcategory') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blogcategory') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blog Category List
                </a>
            </li>
            <li {!! (Request::is('admin/blog') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blog') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blog List
                </a>
            </li>
            <li {!! (Request::is('admin/blog/create') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blog/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Blog
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/news') || Request::is('admin/news_item') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="move" data-c="#ef6f6c" data-hc="#ef6f6c" data-size="18" data-loop="true"></i>
            <span class="title">News</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/news') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/news') }}">
                    <i class="fa fa-angle-double-right"></i>
                    News
                </a>
            </li>
            <li {!! (Request::is('admin/news_item') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/news_item') }}">
                    <i class="fa fa-angle-double-right"></i>
                    News Details
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/minisidebar') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/minisidebar') }}">
            <i class="livicon" data-name="list-ul" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            Mini Sidebar
        </a>
    </li>
    <li {!! (Request::is('admin/fixedmenu') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/fixedmenu') }}">
            <i class="livicon" data-name="list-ul" data-size="18" data-c="#1DA1F2" data-hc="#1DA1F2" data-loop="true"></i>
            Fixed Menu and Header
        </a>
    </li>
    <li {!! (Request::is('admin/horizontal_layout') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/horizontal_layout') }}">
            <i class="livicon" data-name="list-ul" data-size="18" data-c="#1DA1F2" data-hc="#1DA1F2" data-loop="true"></i>
            Horizontal Layout
        </a>
    </li>
    <li {!! (Request::is('admin/invoice') || Request::is('admin/blank') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>
            <span class="title">Pages</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/lockscreen') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    Lockscreen
                </a>
            </li>
            <li {!! (Request::is('admin/invoice') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/invoice') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Invoice
                </a>
            </li>
            <li {!! (Request::is('admin/login') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/login') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Login
                </a>
            </li>
            <li {!! (Request::is('admin/login2') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/login2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Login 2
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/login#toregister') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Register
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/register2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Register2
                </a>
            </li>
            <li {!! (Request::is('adminar/404') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/404') }}">
                    <i class="fa fa-angle-double-right"></i>
                    404 Error
                </a>
            </li>
            <li {!! (Request::is('admin/500') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/500') }}">
                    <i class="fa fa-angle-double-right"></i>
                    500 Error
                </a>
            </li>
            <li {!! (Request::is('admin/blank') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blank') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blank Page
                </a>
            </li>
        </ul>
    </li>
    <!-- Menus generated by CRUD generator -->
    @include('admin/layouts/menu')
</ul>
