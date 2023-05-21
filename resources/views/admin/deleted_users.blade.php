@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Deleted users
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>

@stop
<!-- end page css -->

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Deleted users</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Users</a></li>
            <li class="active">Deleted users</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff"
                               data-hc="#ffffff"></i>
                            Deleted Users List
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                            <table class="table table-bordered" id="table">
                                <thead>
                                <tr class="filters">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User E-mail</th>
                                    <th>Deleted At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{!! $user->first_name !!}</td>
                                        <td>{!! $user->last_name !!}</td>
                                        <td>{!! $user->email !!}</td>
                                        <td>{!! $user->deleted_at->diffForHumans() !!}</td>
                                        <td>
                                            <a href="{{ route('admin.restore.user', $user->id) }}"><i class="livicon"
                                                                                                      data-name="user-flag"
                                                                                                      data-c="#6CC66C"
                                                                                                      data-hc="#6CC66C"
                                                                                                      data-size="18"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop

{{-- page level scripts --}}
@section("footer_scripts")
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
@stop
