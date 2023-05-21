@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
@lang('blogcategory/title.management')
@parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Montent --}}
@section('content')
<section class="content-header">
    <h1>@lang('blogcategory/title.management')</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#"> @lang('blogcategory/title.blogcategories')</a></li>
        <li class="active">@lang('blogcategory/title.blogcategorylist')</li>
    </ol>
</section>

<!-- Main content -->
<section class="content pr-3 pl-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-primary text-white clearfix">
                    <span class="float-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        @lang('blogcategory/title.blogcategorylist')
                    </span>
                    <div class="float-right">
                    <a href="{{ URL::to('admin/blogcategory/create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('button.create')</a>
                    </div>
                </div>
                <br />
                <div class="card-body">
                    <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>@lang('blogcategory/table.id')</th>
                                    <th>@lang('blogcategory/table.name')</th>
                                    <th>@lang('blogcategory/table.blogs')</th>
                                    <th>@lang('blogcategory/table.created_at')</th>
                                    <th>@lang('blogcategory/table.actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!empty($blogscategories))
                                @foreach ($blogscategories as $bcategory)
                                    <tr>
                                        <td>{{{ $bcategory->id }}}</td>
                                        <td>{{{ $bcategory->title }}}</td>
                                        <td>{{{ $bcategory->blog()->count() }}}</td>
                                        <td>{{{ $bcategory->created_at->diffForHumans() }}}</td>
                                        <td>
                                            <a href="{{{ URL::to('admin/blogcategory/' . $bcategory->id . '/edit' ) }}}"><i
                                                        class="livicon" data-name="edit" data-size="18" data-loop="true"
                                                        data-c="#428BCA" data-hc="#428BCA"
                                                        title="@lang('blogcategory/form.update-blog')"></i></a>

                                            @if($bcategory->blog()->count())
                                                <a href="#" data-toggle="modal" data-target="#blogcategory_exists" data-name="{!! $bcategory->title !!}" class="blogcategory_exists">
                                                    <i class="livicon" data-name="warning-alt" data-size="18"
                                                       data-loop="true" data-c="#f56954" data-hc="#f56954"
                                                       title="@lang('blogcategory/form.blogcategoryexists')"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.blogcategory.confirm-delete', $bcategory->id) }}" data-toggle="modal" data-id="{{ $bcategory->id }}" data-target="#delete_confirm">
                                                    <i class="livicon" data-name="remove-alt" data-size="18"
                                                       data-loop="true" data-c="#f56954" data-hc="#f56954"
                                                       title="@lang('blogcategory/form.deleteblogcategory')"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>

@stop
{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Blog category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this blog category? This operation is irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <div class="modal fade" id="blogcategory_exists" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete Blog Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body">
                    @lang('blogcategory/message.blogcategory_have_blog')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });

//        $(document).on("click", ".blogcategory_exists", function () {

//            var group_name = $(this).data('name');
//            $(".modal-header h4").text( group_name+" blog category" );
//        });
        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
            var button = $(event.relatedTarget);
            var $recipient = button.data('id');
            var modal = $(this);
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/blogcategory/"+$recipient+"/delete");
        })
    </script>
@stop
