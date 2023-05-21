@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Book List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/tables.css') }}" />

    <style>

        #table1_filter{
            margin-bottom: 10px;
        }

    </style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">

                <!--section starts-->
                <h1>Список</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Панель приборов
                        </a>
                    </li>
                    <li>
                        <a href="#">Таблицы данных</a>
                    </li>
                    <li class="active">Список книг</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content pl-3 pr-3">
                <div class="row">
                    <div class="col-lg-12 my-3">
                        <div class="card filterable">
                            <div class="card-header bg-primary text-white clearfix  ">
                            <span class="float-left"><i class="livicon" data-name="users" data-size="16"
                                                         data-loop="true" data-c="#fff" data-hc="white"></i>
                                                         Книги
                    </span>
                    <div class="float-right">
                        <a href="{{ URL::to('admin/books/create') }}" class="btn btn-sm btn-secondary"><span
                                    class="fa fa-plus"></span> Создавать</a>
                    </div>
                            </div>
                            <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
                                <table class="table table-striped table-bordered" id="table1" width="100%">
                                    <thead>
                                        <tr>
                                <th>#</th>
                                <th>Имя автора</th>
                                <th>Количество книг</th>
                                <th style="width: 70px">@lang('news/table.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                @foreach ($author as $value)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->num_books }}</td>
                        <td>
                            <a href=''><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view genre"></i></a>
                            </td>
                    </tr>
                    @endforeach   
                            </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                
                
                <!-- /.modal ends here -->
            </section>
            <!-- content -->

    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/pages/table-advanced.js') }}" ></script>
    
@stop
