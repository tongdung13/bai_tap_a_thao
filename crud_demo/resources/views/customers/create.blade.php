@extends('home')

@section('title', 'them khach hang')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                them moi khach hang--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label>name</label>--}}
{{--                        <input type="text" name="name" class="form-control" required>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>dob</label>--}}
{{--                        <input type="date" name="dob" class="form-control" required>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>email</label>--}}
{{--                        <input type="email" name="email" class="form-control" required>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlFile1">Image</label>--}}
{{--                        <input type="file" name="image" class="form-control-file">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cane</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Validator Signup Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('add/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- //css file -->
    <!-- web-fonts -->
    <link href="{{ asset('//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese') }}"
          rel="stylesheet">
    <!-- //web-fonts -->

</head>

<body>
<!-- title -->
<h1>
    <span>Thêm</span>
    <span>Khách</span>
    <span>Hàng</span>
</h1>
<!-- //title -->
<!-- content -->
<div class="sub-main-w3">
    <form validate="true" method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>dob</label>
            <input type="date" name="dob" class="form-control" required>
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Add New</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
    </form>
</div>
<!-- //content -->

<!-- copyright -->
<div class="footer">
    <p>&copy; 2018 Validator Signup Form. All rights reserved | Design by
        <a href="http://w3layouts.com">W3layouts</a>
    </p>
</div>
<!-- //copyright -->

<!-- Jquery -->
<script src="{{asset('add/js/jquery-2.2.3.min.js')}}"></script>
<!-- //Jquery -->
<!-- Jquery -->
<script src="{{ asset('add/js/jquery-simple-validator.min.js') }}"></script>
<!-- //Jquery -->

</body>

</html>
