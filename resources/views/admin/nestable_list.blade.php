@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Nestable List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('css/pages/sortable.css') }}" rel="stylesheet" />

@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Nestable List</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Nestable List</li>
                </ol>
            </section>
<!-- Main content -->
<section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-bottom: 10px !important;" id="nestable_list_menu">
                    <button type="button" class="btn btn-warning" data-action="expand-all">Expand All</button>
                    <button type="button" class="btn btn-success" data-action="collapse-all">Collapse All</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Nestable List 1
                        </span>
                    </div>
                    <div class="card-body ">
                        <div class="dd" id="nestable_list_1">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">Item 1</div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">Item 2</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">Item 3</div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">Item 4</div>
                                        </li>
                                        <li class="dd-item" data-id="5">
                                            <div class="dd-handle">Item 5</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="6">
                                                    <div class="dd-handle">Item 6</div>
                                                </li>
                                                <li class="dd-item" data-id="7">
                                                    <div class="dd-handle">Item 7</div>
                                                </li>
                                                <li class="dd-item" data-id="8">
                                                    <div class="dd-handle">Item 8</div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="9">
                                            <div class="dd-handle">Item 9</div>
                                        </li>
                                        <li class="dd-item" data-id="10">
                                            <div class="dd-handle">Item 10</div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="dd-item" data-id="11">
                                    <div class="dd-handle">Item 11</div>
                                </li>
                                <li class="dd-item" data-id="12">
                                    <div class="dd-handle">Item 12</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card ">
                    <div class="card-header bg-info text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Nestable List 3
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="dd" id="nestable_list_3">
                            <ol class="dd-list">
                                <li class="dd-item dd3-item" data-id="13">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Item 13</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="14">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Item 14</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="15">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Item 15</div>
                                    <ol class="dd-list">
                                        <li class="dd-item dd3-item" data-id="16">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 16</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="17">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 17</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="18">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 18</div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Nestable List 2
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="dd" id="nestable_list_2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="13">
                                    <div class="dd-handle">Item 13</div>
                                </li>
                                <li class="dd-item" data-id="14">
                                    <div class="dd-handle">Item 14</div>
                                </li>
                                <li class="dd-item" data-id="15">
                                    <div class="dd-handle">Item 15</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="16">
                                            <div class="dd-handle">Item 16</div>
                                        </li>
                                        <li class="dd-item" data-id="17">
                                            <div class="dd-handle">Item 17</div>
                                        </li>
                                        <li class="dd-item" data-id="18">
                                            <div class="dd-handle">Item 18</div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Sortable Grid
                        </span>
                    </div>
                    <div class="card-body">
                        <div>
                            <ul id="sortable1">
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                                <li>Item5</li>
                                <li>Item6</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-danger text-white ">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Connected Sortable Lists
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6">
                            <ul id="sortable2" class="connected">
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                                <li>Item5</li>
                                <li>Item6</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul id="sortable3" class="connected">
                                <li class="highlight">Item1</li>
                                <li class="highlight">Item2</li>
                                <li class="highlight">Item3</li>
                                <li class="highlight">Item4</li>
                                <li class="highlight">Item5</li>
                                <li class="highlight">Item6</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- content -->

    @stop

{{-- page level scripts --}}
@section('footer_scripts')
{{--<script src="{{ asset('js/pages/jquery-ui.min.js') }}" ></script>--}}

    <script src="{{ asset('vendors/nestable-list/js/jquery.nestable.js') }}" ></script>
    <script src="{{ asset('vendors/html5sortable/js/html.sortable.js') }}" ></script>
    <script src="{{ asset('js/pages/ui-nestable.js') }}" ></script>

@stop
