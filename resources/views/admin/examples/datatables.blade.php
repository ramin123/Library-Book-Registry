@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Ajax Datatables Example
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Ajax Datatables</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">Laravel Examples</a></li>
            <li class="active">Ajax Datatables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row">
            <div class="col-12">
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Users List
                    </span>
                </div>
                <br />
                <div class="card-body">
                    <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                    <table class="table table-bordered width100" id="table1">
                        <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>
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
        $(function() {
            var table = $('#table1').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.datatables.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' }
                ]
            });
            table.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
        });
    </script>
@stop
