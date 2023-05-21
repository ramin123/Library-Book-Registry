<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('vendors/iCheck/css/minimal/blue.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/pages/login2.css') }}" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>

<body>
<div class="container ">
    <div class="row vertical-offset-100">
        <div class=" col-10 col-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4 mx-auto">
            <div class="card ">
                <div class="card-header bg-default ">
                    <h3 class="text-center">Sign In</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('signin') }}" id="authentication" autocomplete="on" method="post" role="form">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <input class="form-control" placeholder="E-mail" name="email" type="text"
                                   value="{!! old('email') !!}"/>
                            <div class="help-block">
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <input class="form-control" placeholder="Password" name="password" type="password"/>
                            <div class="help-block">
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input name="remember-me" type="checkbox" value="Remember Me" class="minimal-blue"/>
                                Remember Me
                            </label>
                        </div>

                        <input type="submit" value="Sign In" class="btn btn-primary text-white btn-block btn-lg" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js-->
<script src="{{ asset('js/TweenLite.min.js') }}"></script>
<script src="{{ asset('vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/login2.js') }}" type="text/javascript"></script>
<!-- end of page level js-->
</body>
</html>
