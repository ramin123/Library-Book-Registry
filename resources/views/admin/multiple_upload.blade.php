@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Multiple File Upload
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <meta name="csrf_token" id="token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/blueimp-file-upload/css/jquery.fileupload.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/blueimp-file-upload/css/jquery.fileupload-ui.css') }}"/>
    <link href="{{asset('vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/toastr/css/toastr.css') }}" rel="stylesheet"/>


    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fancybox/css/jquery.fancybox.css') }}"
          media="screen"/>

    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel="stylesheet"
              href="{{ asset('vendors/blueimp-file-upload/css/jquery.fileupload-noscript.css') }}"/>
        <link rel="stylesheet"
              href="{{ asset('vendors/blueimp-file-upload/css/jquery.fileupload-ui-noscript.css') }}"/>
    </noscript>
<style>
    .dis_none {
        display: none;
    }
    @media(min-width:320px) and (max-width:425px){
        .fileupload-buttonbar .btn, .fileupload-buttonbar .toggle{
            display:inline-block !important;
        }
        .cancel,.start{
            margin-top:5px;
        }
        .files .toggle{
            display:block;
        }
        .toggle{
            margin-top: 10px;
        }
    }
    blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        font-size: 17.5px;
        border-left: 5px solid #eee !important;
    }
   .fileupload-progress >.progress-striped{
        display:none !important;
    }
    .img-file{
        max-width:70px;
        height: 50px;
    }
    .fade.in{
        opacity: 1;
    }
</style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Multiple File Upload</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li ><a href="#">Laravel Examples</a></li>
            <li>Multiple File Upload</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content multiple-file_upload">
        <div class="container">

            <div class="row mt-5">

                <div class="col-12">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <span class="float-left">
                                <i class="livicon" data-name="list" data-size="18" data-c="#ffffff" data-hc="#ffffff"
                                   data-loop="true"></i>
                                File list
                            </span>
                            <div class="float-right">
                                <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#multiplefile">Add New</button>
                                {{--<a href="{{ URL::to('admin/blog/create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('button.create')</a>--}}
                            </div>
                        </div>
                        <div class="card-body" style="padding:30px;">


                            <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                                <table class="table table-bordered width100" id="table">
                                    <thead>
                                    <tr class="filters">
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Add New File</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this file? This operation is irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button  type="button" class="btn btn-danger delete-file">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>



    <div class="modal fade" id="multiplefile" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Add Files</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                {!! Form::open(['url' => URL::to('admin/file/createmulti'), 'method' => 'post', 'id'=>'fileupload', 'files'=> true]) !!}
                <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript>
                        <input type="hidden" name="redirect" value="">
                    </noscript>

                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- The table listing the files available for upload/download -->
                            <div class="presentation_box">

                                <table role="presentation" class="table table-striped">
                                    <tbody class="files"></tbody>
                                </table>
                                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                    <div class="slides"></div>
                                    <h3 class="title"></h3>
                                    <a class="prev">‹</a>
                                    <a class="next">›</a>
                                    <a class="close">×</a>
                                    <a class="play-pause"></a>
                                    <ol class="indicator"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-12 text-right">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <span>Add files</span>
                                                    <input type="file" name="file" multiple>
                                                </span>
                            <button type="submit" class="btn btn-primary start" data-dismiss="modal">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Save files</span>
                            </button>

                        <!-- The global file processing state -->
                            <span class="fileupload-process"></span>

                            <!-- The global progress state -->
                            <div class="col-lg-5 fileupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close()!!}

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.content --> @stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script src="{{ asset('vendors/toastr/js/toastr.js') }}"></script>
    <script src="{{ asset('js/ui-toastr.js') }}"></script>

    <script type="text/javascript"
            src="{{ asset('vendors/fancybox/js/jquery.fancybox.pack.js') }}"></script>



    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.ui.widget.js') }}"
            type="text/javascript"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="{{ asset('vendors/blueimp-tmpl/js/tmpl.min.js') }}" type="text/javascript"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="{{ asset('vendors/blueimp-load-image/js/load-image.all.min.js') }}"
            type="text/javascript"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="{{ asset('vendors/blueimp-canvas-to-blob/js/canvas-to-blob.min.js') }}"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="{{ asset('vendors/blueimp-gallery-with-desc/js/jquery.blueimp-gallery.min.js') }}"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <!-- The basic File Upload plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload.js') }}"
            type="text/javascript"></script>
    <!-- The File Upload processing plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload-process.js') }}"
            type="text/javascript"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload-image.js') }}"
            type="text/javascript"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload-audio.js') }}"></script>
    <!-- The File Upload video preview plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload-video.js') }}"></script>
    <!-- The File Upload validation plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload-validate.js') }}"></script>
    <!-- The File Upload user interface plugin -->
    <script src="{{ asset('vendors/blueimp-file-upload/js/jquery.fileupload-ui.js') }}"
            type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start text-right dis_none" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
        </td>
    </tr>
{% } %}
</script>


    <script>

            $(document).ready(function () {

            var table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.file.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'filename', name: 'file name' },
                    { data: 'image', name: 'image'},
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ]
            });
            table.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
                setTimeout(function(){
                    fileView()
                },100);



            $('#fileupload').fileupload({
                url: '{{URL::to('admin/file/createmulti')}}',
                dataType: 'json',
                maxNumberOfFiles: 4
            });
            table.draw()
                fileView()

                $('#fileupload').fileupload({
                    url: '{{URL::to('admin/file/createmulti')}}',
                    dataType: 'json',
                    maxNumberOfFiles: 4,
                    success: function (result) {
                        toastr.success( 'File successfully Added');
                        table.draw(false);
                        setTimeout(function(){
                            fileView()
                        },100);
                        $('tbody.files tr').remove();
                    }
                });


        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var $recipient = button.data('id');

            var modal = $(this)
            modal.find('.modal-footer .delete-file').attr("data-id",$recipient);
        })
             $('body').on('click','.delete-file',function(){
                 $.ajax({
                     url: $url_path+'/admin/file/'+$(this).attr("data-id")+'/delete',
                     type: 'GET',
                     dataType: 'json',
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     success: function (result) {
                         if (result.status == false) {
                             $('.modal').modal('hide');
                             table.draw(false);
                             setTimeout(function(){
                                 fileView()
                             },100);
                             toastr.error( 'Something went wrong');
                         }
                         else {
                             table.draw(false);
                             $('.modal').modal('hide');
                             setTimeout(function(){
                                 fileView()
                             },100);

                             toastr.success( 'File successfully deleted');
                         }
                     },
                 });
                });
            });

            function fileView(){
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title: {
                            type: 'outside'
                        },
                        overlay: {
                            speedOut: 0
                        }
                    }
                });
            }


    </script>
@stop
