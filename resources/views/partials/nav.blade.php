<!-- Menu -->
<nav id="header-main-menu">
    <div class="mob-menu">MENU</div>

    <ul class="main-menu sm sm-clean">
        <li class="logo"><a href="{{ route('home') }}"><img src="{{ URL::to('images/logo.png') }}" alt=""></a></li>
        <li><a href="{{ route('home') }}">Trang chủ</a></li>
        <li><a href="{{ route('post', ['type' => 'thiet-ke']) }}">Thiết kế</a></li>
        <li><a href="{{ route('post', ['type' => 'in-an']) }}">In ấn</a></li>
        <li><a href="{{ route('post', ['type' => 'thi-cong']) }}">Thi công</a></li>
        <li><a href="{{ route('quotation') }}">Báo giá</a></li>
        <li><a href="{{ route('upload_files') }}">Gửi file</a></li>
        <li><a href="#skills">Tuyển dụng</a></li>
        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
        <li class="hotline"><a href="{{ route('home') }}"><img src="{{ URL::to('images/hotline.png') }}" alt=""></a></li>
    </ul>

</nav>