@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Grid
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Grid layout</h1>
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
            <li class="active">Grid layout</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12 ">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="star-half" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Bootstrap grid Examples
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body mx-2" id="slim1">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-12">
                                <p>
                                    we created some grid samples now you can examine in your browser. This first grid is
                                    using all 4 grid sizes combined in a single row. second grid indicates Grid,Third
                                    grid indicates sm Grid,fourth grid indicates md,fifth grid indicates lg.
                                </p>
                                <div class="card-header">
                                    <p class="d-none d-lg-block d-md-none d-sm-none">
                                        lg indicates that the large grid displaying. The grid stacks horizontally &lt;
                                        1200px.
                                    </p>
                                    <p class="d-none d-md-block d-lg-none d-sm-none">
                                        md indicates that the medium grid displaying. The grid stacks horizontally &lt;
                                        992px.
                                    </p>
                                    <p class="d-none d-sm-block d-md-none d-lg-none">
                                        sm indicates that the small grid displaying. The grid stacks horizontally &lt;
                                        768px.
                                    </p>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-1 col-sm-2 col-5 text-center" style="padding: 1em 0;
                                                background-color: #D9EDF7;
                                                border: 1px solid #A0DEF2;border-radius: 1px;">
                                <div class="d-lg-block d-md-none d-sm-none">.col-lg-4</div>
                                <div class="d-md-block d-sm-none d-lg-none">.col-md-1</div>
                                <div class="d-sm-block d-md-none d-lg-none">.col-sm-2</div>

                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-4 col-4 text-center" style="padding: 1em 0;
                                        background-color: #DFF0D8;
                                        border: 1px solid #A3E69E;border-radius: 1px;">
                                <div class="d-lg-block d-md-none d-sm-none">.col-lg-4</div>
                                <div class="d-md-block d-sm-none d-lg-none">.col-md-5</div>
                                <div class="d-sm-block d-md-none d-lg-none">.col-sm-4</div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-3 text-center" style="padding: 1em 0;
                                            background-color: #F5DFF7;
                                            border: 1px solid #F0C9F5;border-radius: 1px;">
                                <div class="d-lg-block d-md-none d-sm-none">.col-lg-4</div>
                                <div class="d-md-block d-sm-none d-lg-none">.col-md-6</div>
                                <div class="d-sm-block d-md-none d-lg-none">.col-sm-6</div>

                            </div>
                        </div>

                        <h3 class="mt-2">sm Grid</h3>
                        <div class="row my-3">
                            <div class="col-sm-2 text-center" style="padding: 1em 0;
                                                        background-color: #D9EDF7;
                                                        border: 1px solid #A0DEF2;border-radius: 1px;">
                                <div>.col-sm-2</div>
                            </div>
                            <div class="col-sm-4 text-center" style="padding: 1em 0;
                                                background-color: #DFF0D8;
                                                border: 1px solid #A3E69E;border-radius: 1px;">
                                <div>.col-sm-4</div>
                            </div>
                            <div class="col-sm-6 text-center" style="padding: 1em 0;
                                                    background-color: #F5DFF7;
                                                    border: 1px solid #F0C9F5;border-radius: 1px;">
                                <div>.col-sm-6</div>
                            </div>
                        </div>
                        <!-- end row -->
                        <h3 class="mt-2">md Grid</h3>
                        <div class="row my-3">
                            <div class="col-md-1 text-center" style="padding: 1em 0;
                                                          background-color: #D9EDF7;
                                                          border: 1px solid #A0DEF2;border-radius: 1px;">
                                <div>.col-md-1</div>
                            </div>
                            <div class="col-md-5 text-center" style="padding: 1em 0;
                                                  background-color: #DFF0D8;
                                                  border: 1px solid #A3E69E;border-radius: 1px;">
                                <div>.col-md-5</div>
                            </div>
                            <div class="col-md-6 text-center" style="padding: 1em 0;
                                                      background-color: #F5DFF7;
                                                      border: 1px solid #F0C9F5;border-radius: 1px;">
                                <div>.col-md-6</div>
                            </div>
                        </div>
                        <!-- end row -->
                        <h3 class="mt-2">lg Grid</h3>
                        <div class="row my-3">
                            <div class="col-lg-4 text-center" style="padding: 1em 0;
                                                  background-color: #D9EDF7;
                                                  border: 1px solid #A0DEF2;border-radius: 1px;">
                                <div>.col-lg-4</div>
                            </div>
                            <div class="col-lg-4 text-center" style="padding: 1em 0;
                                          background-color: #DFF0D8;
                                          border: 1px solid #A3E69E;border-radius: 1px;">
                                <div>.col-lg-4</div>
                            </div>
                            <div class="col-lg-4 text-center" style="padding: 1em 0;
                                                background-color: #F5DFF7;
                                                border: 1px solid #F0C9F5;border-radius: 1px;">
                                <div>.col-lg-4</div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12 my-3 ">
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>
                            <i class="livicon" data-name="screenshot" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Bootstrap grid
                        </span>
                        <span class="float-right ">
                                        <i class="fa fa-chevron-up clickable"></i>
                                    </span>
                    </div>
                    <div class="card-body" id="slim2">
                        <div class="row my-2">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-12</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-6</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-6</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-4</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-4</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-4</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-2 col-md-2 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2  text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-8 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-8</div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-4</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-3 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-6</div>
                                </div>
                            </div>
                            <div class="col-lg-3 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-12 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-12</div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row my-2">
                            <div class="col-lg-6 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-6</div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-lg-3 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-3</div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-lg-2 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-2</div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-lg-1 text-center">
                                <div class="card card-primary">
                                    <div class="card-body p-2">.col-lg-1</div>
                                </div>
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



@stop
