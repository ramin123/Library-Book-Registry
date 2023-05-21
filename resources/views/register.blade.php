<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/register.css') }}">
    <!--end of page level css-->
</head>

<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="box animation flipInX">
                <img src="{{ asset('images/josh-new.png') }}" alt="logo" class="img-responsive mar">
                <h3 class="text-primary">Зарегистрироваться</h3>
                <!-- Notifications -->
                <div id="notific">
                    @include('notifications')
                </div>
                <form action="{{ route('register') }}" method="POST" id="reg_form">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                        <label class="sr-only"> Имя</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="Имя" value="{!! old('first_name') !!}">
                        {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                        <label class="sr-only"> Фамилия</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Фамилия"
                            value="{!! old('last_name') !!}">
                        {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                        <label class="sr-only"> Электронная почта</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Электронная почта"
                            value="{!! old('Email') !!}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                        <label class="sr-only"> Пароль</label>
                        <input type="password" class="form-control" id="Password1" name="password"
                            placeholder="Пароль">
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                        <label class="sr-only"> Подтвердите пароль</label>
                        <input type="password" class="form-control" id="Password2" name="password_confirm"
                            placeholder="Подтвердите пароль">
                        {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group {{ $errors->first('gender', 'has-error') }}">
                        <label class="sr-only">Пол</label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="inlineRadio1" value="male"> Мужской
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="inlineRadio2" value="female"> Женский
                        </label>
                        {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="subscribed"> Я принимаю <a href="#"> Условия и положения</a>
                        </label>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                    <button type="submit" class="btn btn-block br-0 btn-primary my-2">Зарегистрироваться</button>
                    У вас уже есть аккаунт? Пожалуйста <a href="{{ route('login') }}"> Log In ( Авторизоваться )</a>
                </form>
            </div>
        </div>

        <!-- //Content Section End -->
    </div>
    <!--global js starts-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/register_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
