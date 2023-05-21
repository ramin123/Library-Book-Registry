@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    @lang('roles/title.management')
    @parent
@stop

{{-- Content --}}
@section('content')
    <section class="content-header">
        <h1>@lang('roles/title.management')</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#"> @lang('roles/title.roles')</a></li>
            <li class="active">@lang('roles/title.roles_list')</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-primary text-white clearfix">
                        <span class=" float-left"><i class="livicon" data-name="users" data-size="16"
                                                             data-loop="true" data-c="#fff" data-hc="white"></i>
                            @lang('roles')
                        </span>
                        <div class="float-right">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-sm btn-secondary"><span
                                        class="fa fa-plus"></span> @lang('button.create')</a>
                        </div>
                    </div>
                    <br/>
                    <div class="card-body">
                        @if ($roles->count() >= 1)
                            <div class="table-responsive-lg table-responsive-md table-responsive-sm table-responsive ">

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>@lang('roles/table.id')</th>
                                        <th>@lang('roles/table.name')</th>
                                        <th>@lang('roles/table.users')</th>
                                        <th>@lang('roles/table.created_at')</th>
                                        <th>@lang('roles/table.actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{!! $role->id !!}</td>
                                            <td>{!! $role->name !!}</td>
                                            <td>{!! $role->users()->count() !!}</td>
                                            <td>{!! $role->created_at->diffForHumans() !!}</td>
                                            <td>
                                                <a href="{{ route('admin.roles.edit', $role->id) }}">
                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true"
                                                       data-c="#428BCA" data-hc="#428BCA" title="edit role"></i>
                                                </a>
                                                <!-- let's not delete 'Admin' role by accident -->
                                                @if ($role->id !== 1)
                                                    @if($role->users()->count())
                                                        <a href="#" data-toggle="modal" data-target="#users_exists"
                                                           data-name="{!! $role->name !!}" class="users_exists">
                                                            <i class="livicon" data-name="warning-alt" data-size="18"
                                                               data-loop="true" data-c="#f56954" data-hc="#f56954"
                                                               title="@lang('roles/form.users_exists')"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('admin.roles.confirm-delete', $role->id) }}"
                                                           data-toggle="modal" data-id="{{ $role->id }}"
                                                           data-target="#delete_confirm">
                                                            <i class="livicon" data-name="remove-alt" data-size="18"
                                                               data-loop="true" data-c="#f56954" data-hc="#f56954"
                                                               title="@lang('roles/form.delete_role')"></i>
                                                        </a>
                                                    @endif

                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            @lang('general.noresults')
                        @endif
                    </div>
                </div>
            </div>
        </div>    <!-- row-->
    </section>




@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')

    <div class="modal fade" id="users_exists" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    @lang('roles/message.users_exists')
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Role</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this Role? This operation is irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    {{--<script>--}}
    {{--$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});--}}
    {{--$(document).on("click", ".users_exists", function () {--}}

    {{--var role_name = $(this).data('name');--}}
    {{--$(".modal-header h4").text( role_name+" Role" );--}}
    {{--});</script>--}}


    <script>
        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var $recipient = button.data('id');
            var modal = $(this)
            modal.find('.modal-footer a').prop("href", $url_path + "/admin/roles/" + $recipient + "/delete");
        })
    </script>
@stop
