@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Validation
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="{{ asset('css/pages/form2.css') }}" rel="stylesheet" />
<link href="{{ asset('css/pages/form3.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css" />

<style>
    .iti-flag {
        background-image: url({{ asset('vendors/intl-tel-input/flags.png') }});
    }

    @media (max-width: 992px) {
        .form-horizontal .control-label {
            text-align: left;
        }
    }
</style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Form Validations</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
        <li class="active">Form Validations</li>
    </ol>
</section>
<!--section ends-->
<section class="content pl-3 pr-3">
    <!--main content-->
    <div class="row">
        <div class="col-md-12 col-lg-6 col-12">
            <div class="card ">
                <div class="card-header bg-primary text-white ">
                    <span>
                        <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Registration Validation
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form method="post" id="example-form">
                        <div class="form-group">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                Press tab for validation after entering input.
                            </div>
                            <label for="validate-text">Validate Text</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="validateText" id="validate-text"
                                    placeholder="Enter Validate Text" required>
                                <span class="input-group-append ">
                                    <span class="input-group-text danger">
                                        <span class="fa fa-times"></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-optional">Optional</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="validate-optional" id="validate-optional"
                                    placeholder="Optional">
                                <span class="input-group-append ">
                                    <span class="input-group-text info"><span class="fa fa-asterisk"></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-email">Validate Email</label>
                            <div class="input-group" data-validate="email">
                                <input type="text" class="form-control" name="validateEmail" id="validate-email"
                                    placeholder="Enter Validate Email" required>
                                <span class="input-group-append">
                                    <span class="input-group-text danger"><span class="fa fa-times"></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-length"> Minimum length 5 characters </label>
                            <div class="input-group input-group-append" data-validate="length" data-length="5">
                                <textarea class="form-control resize_vertical" name="validate-length"
                                    id="validate-length" placeholder="Minimum length 5 characters"
                                    required=""></textarea>
                                <span class="input-group-text danger">
                                    <span class="fa fa-times"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-phone">Validate Phone Number</label>
                            <div class="input-group" data-validate="phone">
                                <input type="text" class="form-control" name="validatePhone" id="validate-phone"
                                    placeholder="(814) 555-1234" required>
                                <span class="input-group-append">
                                    <span class="input-group-text danger"><span class="fa fa-times"></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-length1">Maximum Length</label>
                            <div class="input-group" data-validate="length" data-length="5">
                                <input type="text" class="form-control" name="validateLength" id="validate-length1"
                                    maxlength="5" placeholder="Maximum length 5 characters" required>
                                <span class="input-group-append ">
                                    <span class="input-group-text danger"><span class="fa fa-times"></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-select">Validate Select</label>
                            <div class="input-group">
                                <select class="form-control" name="validate-select" id="validate-select" required>
                                    <option value="">Select an item</option>
                                    <option value="item_1">Item 1</option>
                                    <option value="item_2">Item 2</option>
                                    <option value="item_3">Item 3</option>
                                </select>
                                <span class="input-group-append ">
                                    <span class="input-group-text danger"><span class="fa fa-times"></span></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validate-number">Validate Number</label>
                            <div class="input-group" data-validate="phone">
                                <input type="text" class="form-control" name="validate-number" id="validate-number"
                                    placeholder="Validate Number" required>
                                <span class="input-group-append ">
                                    <span class="input-group-text danger"><span class="fa fa-times"></span></span>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header bg-info text-white">
                    <span>
                        <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Form Validation
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form method="get" name="frmOnline" id='form_validation' enctype="multipart/form-data" action="#">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" id="txtName" class="form-control input-md"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="txtlastname" class="form-control input-md"
                                        placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="txtEmail" id="txtEmail" class="form-control input-md"
                                        placeholder=" Email Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="display_name" id="txtAddress1"
                                        class="form-control input-md" placeholder="Address line1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="display_name1" id="txtAddress2"
                                        class="form-control input-md" placeholder="Address line2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="e1" class="control-label">Select Your State</label>
                                    <select id="e1" class="form-control select2" name="select_state">
                                        <option value="">Select a State</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control input-md"
                                        placeholder="Your phone number (10 digits)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label class="padding7" for="activate">
                                    <input class="custom_icheck custom-checkbox pos-rel p-l-30" type="checkbox"
                                        id="activate" name="activate">&nbsp;I agree</label>
                                <br>
                            </div>
                        </div>
                        <div class="row mar-10">
                            <div class="col-6 col-md-6">
                                <input type="submit" name="btnSubmit" id="btnSubmit" value="Register"
                                    class="btn btn-primary btn-block btn-md ">
                            </div>
                            <div class="col-6 col-md-6">
                                <input type="button" value="Reset" id="reset"
                                    class=" btn btn-success btn-block btn-md ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>
                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Password Validation
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form method="post" id="passwordForm">
                        <input type="password" class="input-md form-control" name="password1" id="password1"
                            placeholder="New Password" autocomplete="off">
                        <div class="row my-3">
                            <div class="col-sm-6 col-lg-6 col-12">
                                <span id="8char" class="fa fa-times color-pwd"></span><span class="fnt-14"> 8 Characters
                                    Long</span>
                                <br>
                                <span id="ucase" class="fa fa-times color-pwd"></span><span class="fnt-14"> One
                                    Uppercase Letter</span>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-12">
                                <span id="lcase" class="fa fa-times color-pwd"></span> <span class="fnt-14"> One
                                    Lowercase Letter</span>
                                <br>
                                <span id="num" class="fa fa-times color-pwd"></span><span class="fnt-14"> One
                                    Number</span>
                            </div>
                        </div>
                        <input type="password" class="input-md form-control" name="password2" id="password2"
                            placeholder="Repeat Password" autocomplete="off">
                        <div class="row my-2">
                            <div class="col-sm-12 col-lg-12 col-12">
                                <span id="pwmatch" class="fa fa-times color-pwd"></span> <span class="fnt-14">Passwords
                                    Match</span>
                            </div>
                        </div>
                        <div class="col-sm-12 mar-25">
                            <a href="#" class="col-12 btn btn-primary btn-load btn-md" role="button">Change Password
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header bg-warning text-white">
                    <span>
                        <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Form Validation in Modal
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <button type="button" class="btn btn-primary btn-lg mx-auto" data-toggle="modal"
                            data-target="#myModal">
                            Click to open form in modal
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title" id="myModalLabel">Form Modal</h4>
                                        <button type="button" class="close resetModal" data-dismiss="modal"
                                            aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" id="form-validation3">

                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="first_name" id="first_name"
                                                            class="form-control input-md" placeholder="First Name"
                                                            tabindex="1" data-error="First name must be entered"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="last_name" id="last_name"
                                                            class="form-control input-md" placeholder="Last Name"
                                                            tabindex="2" data-error="Last name must be entered"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="display_name" id="display_name"
                                                            class="form-control input-md" placeholder="Display Name"
                                                            tabindex="3" data-error="Username must be enetered"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control input-md"
                                                            placeholder="Email Address" tabindex="4"
                                                            data-error="that email address is invalid" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password"
                                                            class="form-control input-md" placeholder="Password"
                                                            tabindex="5" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="password" name="confirmpassword"
                                                            class="form-control input-md" placeholder="Confirm Password"
                                                            data-match="#password"
                                                            data-match-error="conform passwork should be same as password"
                                                            tabindex="6" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label for="terms">
                                                                <input type="checkbox" name="terms" id="terms"
                                                                    class="custom-checkbox"> I Agree
                                                            </label>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="margin-top">
                                                        By clicking on the
                                                        <strong class="label label-primary">Register</strong> , you
                                                        agree the following
                                                        <a href="#">Terms and Conditions</a>
                                                        liability as set out in this site, including our Cookie Use.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row marginTop">
                                                <div class="col-6 col-md-6">
                                                    <input type="submit" id="btncheck" value="Register"
                                                        class="btn btn-primary btn-block btn-md " tabindex="7">
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <a class="btn btn-danger btn-block btn-md resetModal">Reset</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                </div>
            </div>
            <!--image upload -->
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <span>
                        <i class="livicon" data-name="pacman" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="white"></i> Validation
                    </span>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <!--<div class="row">-->
                    <form id="tryitForm" class="form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  col-sm-12 col-md-3 col-lg-3 text-md-right">
                                    <label class="control-label ">Full name</label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                    <input type="text" class="form-control" name="firstName"
                                        placeholder="Enter First Name" />
                                </div>
                                <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                    <input type="text" class="form-control" name="lastName"
                                        placeholder="Enter Last Name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 text-md-right">
                                    <label class="control-label">Email Address</label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter Email Address" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-3 col-md-3 col-lg-3 text-md-right">
                                    <label class="control-label">Gender</label>
                                </div>
                                <div class="col-9 col-md-9 col-lg-9 pl-lg-5">
                                    <div class="radio" style="padding-left:0;">
                                        <label>
                                            <input type="radio" class="custom-radio" name="gender"
                                                value="other" />&nbsp;
                                            Other
                                        </label>
                                    </div>
                                    <div class="radio " style="padding-left:0;">
                                        <label>
                                            <input type="radio" class="custom-radio" name="gender" value="male" />&nbsp;
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio" style="padding-left:0;">
                                        <label>
                                            <input type="radio" class="custom-radio" name="gender"
                                                value="female" />&nbsp;
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="offset-md-3 col-md-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!--</div>-->
                </div>

            </div>
        </div>
    </div>
    <!--row ends-->
</section>
<!-- content -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')

<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('js/pages/validation.js') }}" type="text/javascript"></script>

@stop
