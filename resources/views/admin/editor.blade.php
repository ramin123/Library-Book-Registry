@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form Editors
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"  rel="stylesheet" media="screen"/>
    <link href="{{ asset('css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Form Editors</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Editors</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->
            <div class="row">
                <div class="col-12">
                    <div class="card my-3">
                        <div class="card-header bg-primary text-white ">
                            <div class="bootstrap-admin-box-title editor-clr">
                                <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                CKEditor Standard
                            </div>
                        </div>
                        <div class="bootstrap-admin-card-content">
                            <textarea id="ckeditor_standard"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card my-3">
                        <div class="card-header bg-success text-white ">
                            <div class=" bootstrap-admin-box-title editor-clr">
                                <i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                CKEditor Full
                            </div>
                        </div>
                        <div class="bootstrap-admin-card-content">
                            <textarea id="ckeditor_full"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card my-3">
                        <div class="card-header bg-info text-white">
                            <div class=" bootstrap-admin-box-title editor-clr">
                                <i class="livicon" data-name="thermo-up" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                TinyMCE Basic
                            </div>
                        </div>
                        <div class="bootstrap-admin-card-content">
                            <textarea id="tinymce_basic"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card my-3">
                        <div class="card-header bg-warning text-white">
                            <div class="bootstrap-admin-box-title editor-clr">
                                <i class="livicon" data-name="umbrella" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                TinyMCE Full
                            </div>
                        </div>
                        <div class="bootstrap-admin-card-content">
                            <textarea id="tinymce_full"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card filterable my-3">
                        <div class="card-header bg-secondary text-white">
                            <span>
                                <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Inline editing
                            </span>
                        </div>
                        <div class="card-body">
                            <div id="container">
                                <div id="header">
                                    <div id="headerLeft">
                                        <h2 id="sampleTitle" contenteditable="true">
                                            CKEditor
                                            <br>Goes Inline!</h2>
                                        <h3 contenteditable="true">
                                            Lorem ipsum dolor sit amet dolor duis blandit vestibulum faucibus a, tortor.
                                        </h3>
                                    </div>
                                    <div id="headerRight">
                                        <div contenteditable="true">
                                            <p>
                                                Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.
                                            </p>
                                            <p>
                                                Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="columns">
                                    <div id="column1">
                                        <div contenteditable="true">
                                            <h3>Fusce vitae porttitor</h3>
                                            <p>
                                                <strong>Lorem ipsum dolor sit amet dolor. Duis blandit vestibulum faucibus a, tortor.</strong>
                                            </p>
                                            <p>
                                                Proin nunc justo felis mollis tincidunt, risus risus pede, posuere cubilia Curae, Nullam euismod, enim. Etiam nibh ultricies dolor ac dignissim erat volutpat. Vivamus fermentum
                                                <a href="http://ckeditor.com/">nisl nulla sem in</a>
                                                metus. Maecenas wisi. Donec nec erat volutpat.
                                            </p>
                                            <blockquote>
                                                <p>
                                                    Fusce vitae porttitor a, euismod convallis nisl, blandit risus tortor, pretium. Vehicula vitae, imperdiet vel, ornare enim vel sodales rutrum
                                                </p>
                                            </blockquote>
                                            <blockquote>
                                                <p>
                                                    Libero nunc, rhoncus ante ipsum non ipsum. Nunc eleifend pede turpis id sollicitudin fringilla. Phasellus ultrices, velit ac arcu.
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div id="column2">
                                        <div contenteditable="true">
                                            <h3>Integer condimentum sit amet</h3>
                                            <p>
                                                <strong>Aenean nonummy a, mattis varius. Cras aliquet.</strong>
                                                Praesent
                                                <a href="http://ckeditor.com/">magna non mattis ac, rhoncus nunc</a>
                                                , rhoncus eget, cursus pulvinar mollis.
                                            </p>
                                            <p>
                                                Proin id nibh. Sed eu libero posuere sed, lectus. Phasellus dui gravida gravida feugiat mattis ac, felis.
                                            </p>
                                            <p>
                                                Integer condimentum sit amet, tempor elit odio, a dolor non ante at sapien. Sed ac lectus. Nulla ligula quis eleifend mi, id leo velit pede cursus arcu id nulla ac lectus. Phasellus vestibulum. Nunc viverra enim quis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--main content ends--> </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('vendors/ckeditor/js/ckeditor.js')}}" type="text/javascript"></script>




    <script src="{{asset('vendors/tinymce/js/tinymce.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/editor.js') }}" type="text/javascript"></script>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'ckeditor_full' );
        CKEDITOR.replace( 'ckeditor_standard' );
    </script>


@stop
