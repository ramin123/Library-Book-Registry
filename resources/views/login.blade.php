<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/login.css') }}">
    <!--end of page level css-->
</head>

<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="box animation flipInX">
                <div class="box1">
                    <div class="text-center">
                        <img src="{{ asset('images/josh-new.png') }}" alt="logo" class="img-fluid mar"></div>
                    <h3 class="text-primary">Log In ( Авторизоваться )</h3>
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <label class="sr-only">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Электронная почта"
                                value="{!! old('email') !!}" required>
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Пароль" required>
                        </div>
                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember-me"> Запомнить пароль
                            </label>

                        </div>
                        <input type="submit" class="btn btn-block btn-primary" value="Log In (вход)">
                        У вас нет аккаунта? <a href="{{ route('register') }}"><strong> Зарегистрироваться</strong></a>
                    </form>
                    <br />
                    <div class="row">
                        <div class="col-lg-12 text-center social_login mb-3">
                            <a class="btn btn-block btn-social btn-facebook social" href="{{ url('/facebook') }}">
                                <i class="fab fa-facebook-f"></i> Авторизоваться с помощью Фэйсбука
                            </a>
                            <a class="btn btn-block btn-social btn-google social" href="{{ url('/google') }}">
                                <i class="fab fa-google-plus-g"></i> Войти через Google
                            </a>
                            <a class="btn btn-block btn-social btn-linkedin social" href="{{ url('/linkedin') }}">
                                <i class="fab fa-linkedin-in"></i> Войти с помощью LinkedIn
                            </a>
                        </div>
                    </div>
                    <div class="bg-transparent animation flipInX">
                        <a href="{{ route('forgot-password') }}">Забыли пароль?</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- //Content Section End -->
    </div>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/login_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
