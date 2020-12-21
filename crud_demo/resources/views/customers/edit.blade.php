
@extends('home')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
{{--    <div class="col-12 col-md-12">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>--}}
{{--            <div class="col-12">--}}
{{--                <form method="post" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Tên khách hàng</label>--}}
{{--                        <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Email</label>--}}
{{--                        <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required></div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Ngày sinh</label>--}}
{{--                        <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>image</label>--}}
{{--                        <input type="file" name="image" class="form-control-file">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>--}}
{{--                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

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
    <span>Chỉnh </span>
    <span>Sữa</span>
    <span>Khách</span>
    <span>Hàng</span>
</h1>
<!-- //title -->
<!-- content -->
<div class="sub-main-w3">
    <form method="post" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required></div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
        </div>
        <div class="form-group">
            <label>image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
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
