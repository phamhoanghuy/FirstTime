<div class="tab-content row animated fadeInRightBig">
    <div id="tab1" class="tab-pane fade in active">
        <div class="col-md-6 col-sm-6 col-6">
            <img src="{{ asset('images/slider_01.png') }}" alt="">
        </div>
        <div class="tab-content-right col-md-6 col-sm-6 col-6">
            <h3 class="tab-content-title">Thiết kế Quảng Cáo</h3>
            <p class="tab-content-content">Logo, nhận diện thương hiệu, poster, catalogue brochure, leaflet, banner, bao bì,
                nhãn mác sản phẩm... giúp các doanh nghiệp xây dựng và phát triển thương hiệu, thúc đẩy và nâng cao doanh số bán hàng.</p>
            <a href="{{ route('post', ['type' => 'thiet-ke']) }}" class="btn tab-content-button">XEM CHI TIẾT</a>
        </div>
    </div>
    <div id="tab2" class="tab-pane fade">
        <div class="col-md-6 col-sm-6 col-6">
            <img src="{{ asset('images/slider_02.png') }}" alt="">
        </div>
        <div class="tab-content-right col-md-6 col-sm-6 col-6">
            <h3 class="tab-content-title">In ấn mọi chất liệu</h3>
            <p class="tab-content-content">In KTS khổ lớn với đầu phun Nhật Bản cho bản in sắc nét, chuẩn màu và lâu phai.
            Với công nghệ in hiện đại Lộc Mã đáp ứng được nhu cầu về TỐC ĐỘ và chi phí hợp lý.
                <br>In trên các chất liệu: hiflex, decal, pp, giấy ảnh...</p>
            <a href="{{ route('post', ['type' => 'in-an']) }}" class="btn tab-content-button">XEM CHI TIẾT</a>
        </div>
    </div>
    <div id="tab3" class="tab-pane fade">
        <div class="col-md-6 col-sm-6 col-6">
            <img src="{{ asset('images/slider_03.png') }}" alt="">
        </div>
        <div class="tab-content-right col-md-6 col-sm-6 col-6">
            <h3 class="tab-content-title">Thi công Quảng Cáo</h3>
            <p class="tab-content-content">Bảng hiệu, hộp đèn, đèn led, chữ nổi, mặt dựng Alu...
                <br>Trang trí thi công showroom, quán ăn, quán cafe...</p>
            <a href="{{ route('post', ['type' => 'thi-cong']) }}" class="btn tab-content-button">XEM CHI TIẾT</a>
        </div>
    </div>
    <div id="tab4" class="tab-pane fade">
        <div class="col-md-6 col-sm-6 col-6">
            <img src="{{ asset('images/slider_04.png') }}" alt="">
        </div>
        <div class="tab-content-right col-md-6 col-sm-6 col-6">
            <h3 class="tab-content-title">Thiết kế Website</h3>
            <p class="tab-content-content">Web doanh nghiệp, web bán hàng, web thương mại điện tử, web tin tức...
            với độ thẩm mỹ cao, mức chi phí hợp lý giúp đẩy mạnh thương hiệu, sản phẩm, dịch vụ của doanh nghiệp đến với khách hàng</p>
            <a href="{{ route('post', ['type' => 'thiet-ke']) }}" class="btn tab-content-button">XEM CHI TIẾT</a>
        </div>
    </div>
    <div id="tab5" class="tab-pane fade">
        <div class="col-md-6 col-sm-6 col-6">
            <img src="{{ asset('images/slider_05.png') }}" alt="">
        </div>
        <div class="tab-content-right col-md-6 col-sm-6 col-6">
            <h3 class="tab-content-title">Thiết kế nội thất</h3>
            <p class="tab-content-content">Thiết kế, trang trí, thi công nội thất chung cư, căn hộ, quán cafe...
            với phong cách hiện đại, tỉ mỉ trong từng chi tiết đem đến cho khách hàng sự trải nghiệm tuyệt vời.</p>
            <a href="{{ route('post', ['type' => 'thiet-ke']) }}" class="btn tab-content-button">XEM CHI TIẾT</a>
        </div>
    </div>
</div>

<ul class="nav nav-tabs row">
    <li class="active">
        <a data-toggle="tab" href="#tab1">
            <span class="tab-title">Thiết kế quảng cáo</span>
            <p class="tab-text">Thiết kế logo, nhận diện thương hiệu, brochure, leaflet, banner...</p>
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#tab2">
            <span class="tab-title">In ấn mọi chất liệu</span>
            <p class="tab-text">Hiflex, decal, pp, giấy, ảnh...</p>
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#tab3">
            <span class="tab-title">Thi công quảng cáo</span>
            <p class="tab-text">Bảng hiệu, hộp đèn, đèn led, chữ nổi, showroom, quán cafe...</p>
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#tab4">
            <span class="tab-title">Thiết kế Website</span>
            <p class="tab-text">Web công ty, web bán hàng, web thương mại điện tử...</p>
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#tab5">
            <span class="tab-title">Thiết kế nội thất</span>
            <p class="tab-text">Nhà ở, chung cư, quán cafe...</p>
        </a>
    </li>
</ul>
