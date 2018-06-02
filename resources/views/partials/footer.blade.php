<!-- Slider partners -->
@include('partials.sliders.main-partner')
<footer id="footer">
    {{--<small id="copyright">@Copy right 2018</small>--}}
    <div class="container">
        <div class="info col-md-4 col-sm-8 col-12">
            <h1 class="company"><b>CÔNG TY TNHH TMDV QUẢNG CÁO LỘC MÃ</b></h1>
            <ul>
                <li><i>Địa chỉ: 140C Tân Hòa Đông, Phường 14, Quận 6, TP.HCM</i></li>
                <li><i>Điện thoại: 090.6789.504</i></li>
                <li><i>Email: locma140ctanhoadong@gmail.com</i></li>
            </ul>
        </div>
        <div class="menu col-md-2 col-sm-4 col-4">
            <br>
            <p><b>THÔNG TIN</b></p>
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li><a href="{{ route('home') . '#service' }}">Dịch vụ</a></li>
                <li><a href="{{ route('quotation') }}">Báo giá</a></li>
                <li><a href="{{ route('upload_files') }}">Gửi file</a></li>
                <li><a href="#recruit">Tuyển dụng</a></li>
                <li><a href="#contact" onclick="scrollToBottom();">Liên hệ</a></li>
            </ul>
        </div>
        <div class="extra col-md-3 col-sm-6 col-6">
            {{--<p><b>ĐĂNG KÝ NHẬN TIN</b></p>
            <br>
            <span>Đăng ký để nhận tin từ công ty chúng tôi</span>
            <form class="input-group col-md-12 col-sm-12 col-12" action="#" type="POST" style="margin: 0 auto;">
                <input type="text" placeholder="Nhập email của bạn .">
                <button type="submit" class="btn btn-default">GỬI</button>
                {{ csrf_field() }}
            </form>--}}
            <br>
        </div>
        <div class="social col-md-3 col-sm-6 col-6">
            <div style="max-width: 100%; max-height: 100%;" class="fb-page" data-href="https://www.facebook.com/Carots-House-443877102398650/" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Carots-House-443877102398650/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Carots-House-443877102398650/">Carot&#039;s House</a></blockquote></div>
        </div>
    </div>
</footer>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>