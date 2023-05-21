@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    @lang('admin/roles/title.create')
    @parent
@stop

{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>
        @lang('roles/title.create')
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li>@lang('roles/title.roles')</li>
        <li class="active">
            @lang('roles/title.create')
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content pr-3 pl-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    <span> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        @lang('roles/title.create')
                    </span>
                </div>
                <div class="card-body">
                    {!! $errors->first('slug', '<span class="help-block">Another role with same slug exists, please choose another name</span> ') !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="post" action="{{ route('admin.roles.store') }}">
                        <!-- CSRF Token -->

                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->
                            first('name', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                @lang('roles/form.name')
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Role Name"
                                       value="{!! old('name') !!}">
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('name', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="{{ route('admin.roles.index') }}">
                                    @lang('button.cancel')
                                </a>
                                <button type="submit" class="btn btn-success">
                                    @lang('button.save')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>
@stop
