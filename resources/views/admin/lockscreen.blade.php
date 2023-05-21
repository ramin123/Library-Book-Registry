<!DOCTYPE html>
<html>

<head>
    <title>Lock Screen | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- global level css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('css/pages/lockscreen.css') }}" rel="stylesheet" />
    <!-- end of page level css -->
</head>

<body>
    <div class="top">
        <div class="colors"></div>
    </div>
    <div class="container">
        <div class="login-container">
            @include('notifications')
            <div id="output"></div>
            <div>
                @if($user->pic)
                <img src="{{ $user->pic }}" alt="img" class="img-circle img-responsive " />

                @elseif($user->gender === "male")
                <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" class="img-circle img-responsive " />

                @elseif($user->gender === "female")
                <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" class="img-circle img-responsive " />

                @else
                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img"
                    class="rounded-circle img-responsive" />
                @endif
            </div>

            <div class="form-box">
                <form method="POST" name="screen">
                    @csrf
                    <div class="form">
                        @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                        @endif
                        <p class="form-control-static user_name_max">{{$user->first_name}}</p>
                        <input type="password" name="password" id="password"
                            class="form-control {{ $errors->first('password', 'has-error') }}">
                        <button class="btn btn-info btn-block login" id="index" type="submit">GO</button>
                    </div>
                    <a href="{{ route('admin.logout') }}">Logout</a>
                </form>
            </div>
        </div>

    </div>
    <!-- global js -->
    <script src=" {{ asset('js/admin.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- beginning of page level js-->
    {{--<script src="{{ asset('js/pages/lockscreen.js') }}"></script>--}}
    <script>
        $(document).ready(function(){

        $('button[type="submit"]').click(function(e) {
            e.preventDefault();
            if ( $("#password").val() == "") {
                $("#output").addClass("alert alert-danger").text('Please enter password');
                setTimeout(function() {
                    $("#output").removeClass("alert alert-danger").text('');
                },3500)
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'lockscreen',
                    data: {password: $("#password").val(), _token: $('meta[name="_token"]').attr('content')},
                    success: function (result) {
                        if (result == 'error') {
                            $("#output").addClass("alert alert-danger").text('You have entered a Wrong Password');
                            setTimeout(function() {
                                $("#output").removeClass("alert alert-danger").text('');
                            },2500)
                        }
                        else {
                            $("#output").addClass("alert alert-success animated fadeInUp user_name_max2").text('Welcome ' + '{!! $user->first_name !!}');
                            setTimeout(function(){
                            window.location.href = '../../admin';
                            },1000)
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.responseText);
                    }
                });
            }
            //show avatar
            $(".avatar").css({
                "background-image":  "url('../../img/authors/avatar3.jpg')"
            });
        });
    });
    </script>
    <!-- end of page level js-->
</body>

</html>
