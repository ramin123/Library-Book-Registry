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
                <h1>Список книг</h1>
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
                                    class="fa fa-plus"></span> @lang('button.create')</a>
                    </div>
                            </div>
                            <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
                                <table class="table table-striped table-bordered" id="table1" width="100%">
                                    <thead>
                                        <tr>
                                <th>id</th>
                                <th>заголовок</th>
                                <th>тип</th>
                                <th>год публикации</th>
                                <th>Автор</th>
                                <th>Жанр</th>
                                <th>Create at</th>
                                <th style="width: 70px">@lang('news/table.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                @foreach ($book as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->type }}</td>
                        <td>{{ $value->publication_year }}</td>
                        <td>{{ $value->authorName }}</td>
                        <td>{{ $value->genreName }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                        <a href=' . "sdfs" . '><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view genre"></i></a>
                            <a href=' {{ url("admin/books/edit/".$value->id) }} '><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update genre"></i></a>
                            <a href=' {{ route("admin.books.confirm-delete", $value->id) }} ' data-toggle="modal" data-target="#delete_confirm" data-id="{{ $value->id }}"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete book" ></i></a>
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
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <script>
        $(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });

        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
            var button = $(event.relatedTarget);
            var $recipient = button.data('id');
            var modal = $(this);
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/books/delete/"+$recipient);
        })
    </script>
@stop
