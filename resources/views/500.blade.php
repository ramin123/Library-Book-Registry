<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>500 Internal Error | Welcome to Josh Frontend</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level js -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <!-- end of global js-->
    <!-- page level styles-->
    <link href="{{ asset('css/frontend/500.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .btn-primary {
            color: #fff;
            background-color: #337ab7 !important;
            border-color: #2e6da4 !important;
            font-size:14px !important;
        }
    </style>
    <!-- end of page level styles-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class=" col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-offset-1 col-10 middle mx-auto">
            <div class="error-container">
                <div class="error-main">
                    <h1> <i class="livicon" data-name="warning" data-s="100" data-c="#ffbc60" data-hc="#ffbc60" data-eventtype="click" data-iteration="15" data-duration="2000"></i>
                        500
                    </h1>
                    <h3>
                        Thats an error.
                        <br>There was an error. Please Try again later. Thats all we know
                    </h3>
                    <a href="{{ route('home') }}" class="btn btn-primary text-white">
                        Home
                    </a>
                    <br>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('js/frontend/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/livicons-1.4.min.js') }}"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script>
    $("document").ready(function() {
        setTimeout(function() {
            $(".livicon").trigger('click');
        }, 10);
    });
    // code for aligning center
    $(document).ready(function() {
        var x = $(window).height();
        var y = $(".middle").height();
        //alert(x);
        x = x - y;
        x = x / 2;
        $(".middle").css("padding-top", x);
    });
    </script>
    <!-- end of page level js-->
</body>
</html>
