@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Trash
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />

    <!-- page level css ends-->
    <style>

    </style>
@stop

{{-- Page content --}}
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Trash</h1>
    </section>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row web-mail">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="whitebg">
                    <ul>
                        <li class="compose">
                            <a href="{{ URL::to('emails/compose') }}">
                                <i class="fa fa-fw fa-envelope"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('emails/inbox') }}">
                                <i class="fa fa-inbox" aria-hidden="true"></i>
                                &nbsp; &nbsp;Inbox
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('emails/sent') }}">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                &nbsp; &nbsp; Sent
                            </a>
                        </li>
                        <li  class="active">
                            <a href="{{ URL::to('emails/trash') }}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                &nbsp; &nbsp; Trash
                                <span class="badge">{{ $emails->count() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('emails/draft') }}">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                                &nbsp; &nbsp; Draft (10)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8">
                <div class="whitebg">
                    <table class="table table-striped table-advance table-hover" id="inbox-check">
                        <thead>
                        <tr>
                            <td colspan="6">
                                <div class="col-md-8">
                                    <h4>
                                        <strong>Trash</strong>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6">

                                <div class="row">
                                    <div class="col-md-8 col-lg-9 col-xs-12">
                                        <div class="btn-group float-left table-bordered paddingrightleft_10 paddingtopbottom_5px">
                                            <input type="checkbox" id="checkall" class="icheck">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu ul">
                                                <!-- dropdown menu links -->
                                                <li>
                                                    <a href="#">All</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="move_to_inbox">Move To Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#">Read</a>
                                                </li>
                                                <li>
                                                    <a href="#">UnRead</a>
                                                </li>
                                                <li>
                                                    <a href="#">Starred</a>
                                                </li>
                                                <li>
                                                    <a href="#">Unstarred</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group float-left table-bordered paddingrightleft_10 paddingtopbottom_5px margin_left">
                                            <i class="fa fa-redo" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-3 col-xs-12">
                                        <div class="float-right">
                                            <ul class="pagination ">
                                                <li class="">
                                                    <a href="#">&laquo;</a>
                                                </li>
                                                <li>
                                                    <a>1 - 18 of 228</a>
                                                </li>
                                                <li class="">
                                                    <a href="#">&raquo;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                            <tbody>
                        @foreach($emails as $email)
                            <tr data-messageid="{{ $email->id }}" class="unread">
                                <td style="width:7%;" class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" name="trash_checkbox" value="{{ $email->id }}" class="mail-checkbox">
                                        </span>
                                    </div>
                                </td>
                                <td style="width:2%;" class="inbox-small-cells">
                                    <div class="rating">
                                        <i class="fa fa-star starred"></i>
                                    </div>
                                </td>
                                <td style="width:22%;" class="view-message hidden-xs">
                                    <a href="{{ URL::to('emails/'.$email->id.'/trash' ) }}">
                                        @if($email->senderName->provider_id && $email->senderName->pic)
                                            <img src="{!! $email->senderName->pic !!}" alt="img" width="35"  height="35"
                                                 class="img-circle img-responsive img_height float-left"/>
                                        @elseif($email->senderName->pic)
                                            <img src="{!! url('/').'/uploads/users/'.$email->senderName->pic !!}" alt="img" width="35" height="35"
                                                 class="img-circle img-responsive img_height float-left"/>
                                        @else
                                            <img src="{{  Gravatar::src($email->senderName->email)}}" width="35"  height="35" alt="User Image" class="img-circle img_height img-responsive float-left" />
                                        @endif
                                        {{ $email->senderName->first_name }} {{ $email->senderName->last_name }}</a>
                                </td>
                                <td style="width:40%;" class="view-message ">
                                    <a href="{{ URL::to('emails/'.$email->id.'/trash' ) }}">{{ $email->subject }}</a>
                                </td>

                                <td style="width:23%;" class="view-message text-right">
                                    <a href="{{ URL::to('emails/'.$email->id.'/trash' ) }}">{{ $email->created_at->diffForHumans() }}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/iCheck/js/icheck.js')}}"></script>
    <script src="{{ asset('js/pages/mail_box.js') }}"></script>
    <script>
        $(document).ready(function(){
           $(".move_to_inbox").on("click",function(){
               $trash_ids = [];
               $.each($("input[name='trash_checkbox']:checked"), function(){
                   $trash_ids.push($(this).val());
               });
               $.ajax({
                   url: '{{ url('emails/trash')}}',
                   data: {'id': $trash_ids, _token: '{{ csrf_token() }}'},
                   type: 'post',
                   success: function(e) {
                       // e.preventDefault();
                       window.location = '{{url('emails/trash')}}';
                   }
               });
           })
        });
    </script>
@stop
