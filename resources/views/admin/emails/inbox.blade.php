@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Inbox
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />

    <!-- page level css ends-->
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">

        <!--section starts-->
        <h1>Inbox</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Emails</a>
            </li>
            <li class="active">Inbox</li>
        </ol>
    </section>
    @if (isset($success))
        <div id="notific">
            <div class="alert alert-success alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> {{ $success }}
            </div>
        </div>
    @endif
    <!-- Main content -->
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row web-mail">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="whitebg1">
                    <ul>
                        <li class="compose">
                            <a href="{{ URL::to('admin/emails/compose') }}">
                                <i class="fa fa-fw fa-envelope"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ URL::to('admin/emails/inbox') }}">
                                <i class="fa fa-inbox" aria-hidden="true"></i>
                                &nbsp; &nbsp;Inbox
                                @if($count>0)
                                <span class="badge badge-success  float-right mt-1 badge-pill">{{ $count}}</span>
                                    @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/emails/sent') }}">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                &nbsp; &nbsp; Sent
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8">
                <div class="whitebg1 mail_inbox_all">
                    <table class="table table-striped table-advance table-hover table-responsive" id="inbox-check">
                        <thead>
                        <tr>
                            <td colspan="6" class="bg-primary text-white">
                                <div class="col-md-8">
                                    <h4 class="mb-0">
                                        <strong>Inbox</strong>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6">
                                <div class="row ">
                                    <div class="col-md-8 col-lg-6 col-xs-12">
                                        <div class="btn-group float-left table-bordered paddingrightleft_10 paddingtopbottom_5px">
                                            <input type="checkbox" id="checkall" class="icheck select_all_mail">
                                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">

                                            </a>
                                            <ul class="dropdown-menu ul" aria-labelledby="dropdownMenuButton">
                                                <!-- dropdown menu links -->
                                                <li>
                                                    <a href="#" class="all dropdown-item">All</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_read dropdown-item">Read</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_unread dropdown-item">UnRead</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_star dropdown-item">Starred</a>
                                                </li>
                                                <li>
                                                    <a href="#"  class="mark_as_unstar dropdown-item">Unstarred</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group float-left table-bordered refresh_padding paddingrightleft_10 paddingtopbottom_5px margin_left">
                                            <i class="fa fa-redo" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6 col-xs-12">
                                        <div class="float-right">
                                            {{ $emails->links() }}
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="tr_read">
                        @foreach($emails as $email)
                            <tr data-messageid="{{ $email->id }}">
                                <td style="width:7%;" class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" name="inbox_checkbox" class="mail-checkbox" value="{{ $email->id }}">
                                        </span>
                                    </div>
                                </td>
                                <td class="read_td"><input type="hidden" value="{{ $email->status }}" @if($email->status == 0)class="read" @else class="unread"@endif ></td>
                                <td style="width:2%;" class="inbox-small-cells">
                                    <div class="rating">
                                        <i class="fa fa-star starred"></i>
                                    </div>
                                </td>
                                <td style="width:22%;" class="view-message hidden-xs">
                                    <a href="{{ URL::to('admin/emails/'.$email->id ) }}">
                                        @if($email->senderName->pic)
                                            <img src="{!! $email->senderName->pic !!}" alt="img" width="35"  height="35"
                                                 class="rounded-circle img-responsive img_height float-left"/>
                                            @elseif(Sentinel::getUser()->gender === "male")
                                                <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" height="35px" width="35px"
                                                     class="rounded-circle img-fluid float-left"/>

                                            @elseif(Sentinel::getUser()->gender === "female")
                                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" height="35px" width="35px"
                                                     class="rounded-circle img-fluid float-left"/>

                                            @else
                                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img" height="35px" width="35px"
                                                     class="rounded-circle img-fluid float-left"/>
                                            @endif
                                        {{ $email->senderName->first_name }} {{ $email->senderName->last_name }}</a>
                                </td>
                                <td style="width:40%;" class="view-message ">
                                    <a href="{{ URL::to('admin/emails/'.$email->id ) }}">{{ $email->subject }}</a>
                                </td>

                                <td style="width:23%;" class="view-message text-right">
                                    <a href="{{ URL::to('admin/emails/'.$email->id ) }}">{{ $email->created_at->diffForHumans() }}</a>
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
@stop
