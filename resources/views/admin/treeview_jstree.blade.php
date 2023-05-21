@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Date and Time pickers
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('vendors/jstree/css/style.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/bootstrap-treeview.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/treeview_jstree.css') }}" rel="stylesheet" type="text/css"/>

@stop


{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Treeview and jsTree</h1>
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
        <li class="active">Treeview and jsTree</li>
    </ol>
</section>
<!--section ends-->
<!-- Main content -->
<section class="content pr-3 pl-3">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-success text-white">
                    <span>
                        Bootstrap Tree View 1
                    </span>
                    <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="w-100">Custom Icons:</label>
                            <div id="treeview5" class=""></div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12">
                            <label class="w-100">Tags as Badges:</label>
                            <div id="treeview6" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-warning text-white">
                    <span>
                        Populating Tree
                    </span>
                    <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="population_tree">
                                <label class="w-100">Basic Population:</label>
                                <div id="container1">
                                    <ul>
                                        <li>Root node 1
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Grand Child 1</li>
                                                        <li>Grand Child 2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2</li>
                                            </ul>
                                        </li>
                                        <li>Root node 2</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="population_tree">
                                <label>Population with Search:</label>
                                <form id="search">
                                    <div class="form-group is-empty">
                                        <input class="form-control" type="search" id="hint" placeholder="Search"/>
                                        <button class="btn btn-raised btn-secondary btn_search" type="submit">Search
                                        </button>
                                    </div>
                                </form>
                                <div id="container3">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>Root node 1
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Grand Child 1</li>
                                                        <li>Grand Child 2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2</li>
                                            </ul>
                                        </li>
                                        <li>Root node 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="population_tree">
                                <label>Population with Checkbox:</label>
                                <div id="container2">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>Root node
                                            <ul>
                                                <li>Parent node 1
                                                    <ul>
                                                        <li>Child node 1
                                                            <ul>
                                                                <li>Grand Child 1</li>
                                                                <li>Grand Child 2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 2</li>
                                                    </ul>
                                                </li>
                                                <li>Parent node 2</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span>
                        Bootstrap Tree View 2
                    </span>
                    <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 my-3">
                            <div class="card card-info">
                                <div class="card-header">
                                    <span>
                                        Expandible Tree :
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <label>Input:</label>
                                            <div class="form-group">
                                                <label for="input-expand-node" class="sr-only">Search Tree:</label>
                                                <!-- <input type="input" class="form-control" id="input-expand-node" placeholder="Identify node..." value="Parent 1">
-->
                                                <select class="form-control" id="input-expand-node">
                                                    <option>Parent 1</option>
                                                    <option>Child 1</option>
                                                    <option>Grandchild 1</option>
                                                    <option>Grandchild 2</option>
                                                    <option>Child 2</option>
                                                    <option>Parent 2</option>
                                                    <option>Parent 3</option>
                                                    <option>Parent 4</option>
                                                    <option>Parent 5</option>
                                                </select>
                                            </div>
                                            <div class="checkbox mb-3">
                                                <label>
                                                    <input type="checkbox" class="checkbox custom-checkbox"
                                                           id="chk-expand-silent" value="false"> Silent (No events)
                                                </label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <button type="button"
                                                            class="btn btn-success expand-node btn_margin_bottom"
                                                            id="btn-expand-node">Expand Node
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" id="select-expand-node-levels">
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger expand-node"
                                                        id="btn-collapse-node">Collapse Node
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary expand-node"
                                                        id="btn-toggle-expanded">Toggle Node
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <button type="button" class="btn btn-success btn_margin_bottom"
                                                            id="btn-expand-all">Expand All
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" id="select-expand-all-levels">
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-danger" id="btn-collapse-all">Collapse
                                                All
                                            </button>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Tree:</label>
                                            <div id="treeview-expandible" class=""></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Events:</label>
                                            <div id="expandible-output"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12 my-3">
                            <div class="card my-3">
                                <div class="card-header bg-info text-white">
                                    <span>
                                        Checkable Tree :
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Input</label>
                                            <div class="form-group">
                                                <label for="input-check-node" class="sr-only">Search Tree:</label>
                                                <select class="form-control" id="input-check-node">
                                                    <option>Parent 1</option>
                                                    <option>Child 1</option>
                                                    <option>Grandchild 1</option>
                                                    <option>Grandchild 2</option>
                                                    <option>Child 2</option>
                                                    <option>Parent 2</option>
                                                    <option>Parent 3</option>
                                                    <option>Parent 4</option>
                                                    <option>Parent 5</option>
                                                </select>
                                            </div>
                                            <div class="checkbox mb-3">
                                                <label>
                                                    <input type="checkbox" class="checkbox custom-checkbox"
                                                           id="chk-check-silent" value="false"> Silent (No events)
                                                </label>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <button type="button" class="btn btn-success check-node"
                                                            id="btn-check-node">Check Node
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger check-node"
                                                        id="btn-uncheck-node">Uncheck Node
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary check-node"
                                                        id="btn-toggle-checked">Toggle Node
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <button type="button" class="btn btn-success" id="btn-check-all">
                                                        Check All
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-danger" id="btn-uncheck-all">Uncheck
                                                All
                                            </button>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Tree</label>
                                            <div id="treeview-checkable" class=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Events</label>
                                            <div id="checkable-output"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- begining of page level js -->
<script src="{{ asset('vendors/jstree/js/jstree.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/bootstrap-treeview.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/treeview_jstree.js') }}" type="text/javascript"></script>

@stop
