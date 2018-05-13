@extends('layouts.master')
@section('header')
    <!-- Use for AJAX (Token) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::to('css/form.css') }}">
@endsection
@section('pageTitle'){{ $pageTitle }}@endsection
@section('content')
    <div class="container">
        <div id="form-main" class="row">
            <h1 class="text-center" class="col-md-12 col-sm-12 col-12">{{ $pageTitle }}</h1>
            <div class="col-md-4 col-sm-4 col-4"></div>
            <div id="form-div" class="col-md-4 col-sm-4 col-4">
                <form class="montform" id="reused_form" >
                    <p class="name">
                        <input name="name" type="text" class="feedback-input" required placeholder="Tên" id="name" maxlength="40"/>
                    </p>
                    <p class="phone">
                        <input name="phone" type="text" required class="feedback-input" id="phone" placeholder="Số điện thoại" />
                    </p>
                    <p class="email">
                        <input name="email" type="email" required class="feedback-input" id="email" placeholder="Địa chỉ email" />
                    </p>
                    <p class="text">
                        <textarea name="message" class="feedback-input" id="comment" placeholder="Ghi chú"></textarea>
                    </p>
                    <div class="submit">
                        <button type="submit" class="button-blue">GỬI</button>
                        <div class="ease"></div>
                    </div>
                </form>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h4>
                        Lỗi gửi liên hệ!
                    </h4>
                    Có một lỗi xảy ra trong quá trình gửi liên hệ. Vui lòng thử lại!
                </div>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h1 class="text-center">Thành công!</h1>
                    <p style="text-align: center;">Thông tin liên hệ của bạn đã được gửi đi.<br>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-4"></div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        var routerContactForm = '{{ route('contact.send') }}';
    </script>
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
@endsection