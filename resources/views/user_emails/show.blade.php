@extends('layouts/default')

{{-- Page title --}}
@section('title')
    View Mail
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts here-->
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />

@stop
{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                            </a>
                        </li>
                        <li class="d-none d-sm-block ">
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                            <a href="#"> Emails</a>
                        </li>
                    </ol>
                    <div class="float-right mt-1">
                        <i class="livicon icon3" data-name="pen" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> View Mail
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
{{-- Page content --}}
@section('content')
    <aside class="right-aside">
        <div class="container my-3">
            <h2 >View Mail</h2>
    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row web-mail">
            <div class="col-lg-3 col-xl-2 col-md-3 col-sm-4">
                <div class="whitebg">
                    <ul>
                        <li class="compose">
                            <a href="{{ URL::to('user_emails/compose') }}">
                                <i class="fa fa-fw fa-envelope"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ URL::to('user_emails/inbox') }}">
                                <i class="fa fa-inbox" aria-hidden="true"></i>
                                &nbsp; &nbsp;Inbox
                                @if($count>0)
                                    <span class="badge badge-success float-right badge-pill mt-1">{{ $count}}</span>
                                @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('user_emails/sent') }}">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                &nbsp; &nbsp; Sent
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-xl-10 col-md-9 col-sm-8">
                <div class="whitebg1">
                    <table class="table table-striped table-advance table-responsive">
                        <thead>
                        <tr>
                            <td colspan="4" class="bg-primary">
                                <div class="col-md-8">
                                    <h4 class="mb-0">
                                        <strong>Single Mail</strong>
                                    </h4>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <div class="row no-padding">
                                    <div class="col-md-7 col-lg-9 col-xs-12">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-secondary btn-toolbar" data-toggle="tooltip" data-placement="top" title="Delete Message" >
                                                <i class="fa fa-trash-o text-danger"></i>
                                            </a>
                                            <button type="button" class="btn btn-secondary btn-toolbar" data-toggle="tooltip" data-placement="top" title="Refresh">
                                                <i class="fa fa-redo"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-3 col-xs-12">
                                        <div class="float-right">
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="4">
                                <div class="row">
                                    <div class="col-md-2 col-xl-1 m-auto col-lg-2 col-sm-2 col-3">
                                        <a href="#" class="text-center">
                                            @if($email->senderName->pic)
                                                <img src="{!! $email->senderName->pic !!}" alt="img"
                                                     class="rounded-circle img-responsive img_height1"/>
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
                                        </a>
                                    </div>
                                    <div class="col-9 col-xl-11 col-md-10 col-lg-10">
                                        <a href="#" class="graytext">
                                            <strong>{{ $email->senderName->first_name }} {{  $email->senderName->last_name }}</strong>
                                            <br>&lt;{{ $email->senderName->email }}&gt;</a>
                                        <div>{{ $email->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="row">
                                    <div class="col-md-12 email_message">
                                        {!!  $email->email_message  !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row nopadmar">
                                    {{--<div class="nopadmar">--}}
                                    <div class="col-6 col-sm-4 no-padding col-md-3 mt-3 col-lg-3 col-xl-2">
                                        <a href="{{ URL::to('user_emails/'.$email->id.'/reply') }}" class="btn btn-sm btn-primary text-white">
                                            <span class="fa fa-reply"></span>
                                            &nbsp;&nbsp;Reply
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-4 no-padding col-md-3 mt-3 col-lg-3 col-xl-2">
                                        <a href="{{ URL::to('user_emails/'.$email->id.'/forward') }}" class="btn btn-sm btn-success  text-white">
                                            <span class="fa fa-share"></span>
                                            &nbsp;&nbsp;Forward
                                        </a>
                                    </div>
                                </div>
                                {{--</div>--}}
                            </td>
                            <td width="3%"></td>
                            <td width="13%" class="view-message text-right">&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
        </div>
    </aside>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
