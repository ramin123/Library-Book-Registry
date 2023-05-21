@extends('admin/layouts/default')
{{-- Page title --}}
@section('title')
    Import New Users @parent
@stop
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('css/pages/import_data.css')}}">
@stop
@section('content')
      <section class="content-header">
        <!--section starts-->
        <h1>Import New Users</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Users</a>
            </li>
            <li class="active">Import New Users</li>
        </ol>
    </section>
        <!-- Main content -->
        <section class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title float-left my-2">Import New Users</h3>
                             <a href="{{ URL::to('admin/download_users/xlsx') }}"><button class="btn btn-success float-right">Download</button></a>
                        </div>


                        <div class="card-body">
                            <form method="POST" action="{{ URL('admin/bulk_import_users') }}"  files="true" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="import_file"  accept=".xlsx" />

                                <button class="btn btn-primary import btn-block" type="submit">Import File</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- </aside> --}}
@stop
@section('footer_scripts')
@stop
