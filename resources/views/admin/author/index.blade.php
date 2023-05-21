@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Genre
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Автор</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16"
                                                             data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#">Автор</a></li>
            <li class="active">Автор</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-12">
            <div class="card ">
                <div class="card-header clearfix bg-primary text-white">
                    <span class="float-left"><i class="livicon" data-name="users" data-size="16"
                                                         data-loop="true" data-c="#fff" data-hc="white"></i>
                        Автор
                    </span>
                    <div class="float-right">
                        <a href="{{ URL::to('admin/authors/create') }}" class="btn btn-sm btn-secondary"><span
                                    class="fa fa-plus"></span> Создавать</a>
                    </div>
                </div>
                <br/>
                <div class="card-body">
                    <table class="table table-bordered" id="table">
                            <thead>
                            <tr class="filters">
                                <th>id</th>
                                <th>Имя</th>
                                <th>Create at</th>
                                <th style="width: 70px">@lang('news/table.actions')</th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        </div><!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(function () {
            var table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.authors.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false}
                ]
            });
            table.on('draw', function () {
                $('.livicon').each(function () {
                    $(this).updateLivicon();
                });
            });
        });

    </script>
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
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/authors/"+$recipient+"/delete");
        })
    </script>
@stop
