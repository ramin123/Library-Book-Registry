@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    @lang('blog/title.bloglist')
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
    <h1>@lang('blog/title.bloglist')</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#">@lang('blog/title.blog')</a></li>
        <li class="active">@lang('blog/title.bloglist')</li>
    </ol>
</section>

<!-- Main content -->
<section class="content pr-3 pl-3">
    <div class="row">
        <div class="col-12">
        <div class="card ">
            <div class="card-header bg-primary text-white clearfix">
                <h4 class="card-title float-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    @lang('blog/title.bloglist')
                </h4>
                <div class="float-right">
                    <a href="{{ URL::to('admin/blog/create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr class="filters">
                            <th>@lang('blog/table.id')</th>
                            <th>@lang('blog/table.title')</th>
                            <th>@lang('blog/table.comments')</th>
                            <th>@lang('blog/table.created_at')</th>
                            <th>@lang('blog/table.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($blogs))
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->comments->count() }}</td>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ URL::to('admin/blog/' . $blog->id ) }}"><i class="livicon"
                                                                                                     data-name="info"
                                                                                                     data-size="18"
                                                                                                     data-loop="true"
                                                                                                     data-c="#428BCA"
                                                                                                     data-hc="#428BCA"
                                                                                                     title="@lang('blog/table.view-blog-comment')"></i></a>
                                    <a href="{{ URL::to('admin/blog/' . $blog->id . '/edit' ) }}"><i class="livicon"
                                                                                                     data-name="edit"
                                                                                                     data-size="18"
                                                                                                     data-loop="true"
                                                                                                     data-c="#428BCA"
                                                                                                     data-hc="#428BCA"
                                                                                                     title="@lang('blog/table.update-blog')"></i></a>
                                    <a href="{{ route('admin.blog.confirm-delete', $blog->id) }}" data-toggle="modal" data-id="{{$blog->id }}"
                                       data-target="#delete_confirm"><i class="livicon" data-name="remove-alt"
                                                                        data-size="18" data-loop="true" data-c="#f56954"
                                                                        data-hc="#f56954"
                                                                        title="@lang('blog/table.delete-blog')"></i></a>
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
    </div><!-- row-->
</section>
@stop

{{-- page level scripts --}}
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
                    <h4 class="modal-title" id="deleteLabel">Delete Blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this blog? This operation is irreversible.
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
    var button = $(event.relatedTarget)
    var $recipient = button.data('id');
    var modal = $(this)
    modal.find('.modal-footer a').prop("href",$url_path+"/admin/blog/"+$recipient+"/delete");
})
</script>
@stop
