<div class="news-header">
    <p class="news-title">
        TIN TỨC - SỰ KIỆN
    </p>
    <div class="border-bottom-section-overlay"></div>
</div>
@for($i = 0; $i < 4; $i++)
    <div class="news-item col-md-12 col-lg-12 col-xs-12">
        <div class="news-img col-md-5 col-lg-5 col-xs-5">
            <img src="{{ URL::to('images/news-item.jpg') }}" alt="">
        </div>
        <div class="news-content col-md-7 col-lg-7 col-xs-7">
            <p class="news-content-title">
                Về pháp lý, nhà đầu tư Bitcoin cần chú ý những gì?
            </p>
            <p class="news-content-content">
                Bitcoin không được công nhận là phương tiện thanh toán của Việt Nam.
            </p>
            <a href="#" class="news-content-link">Xem thêm <i class="fa">&#xf101;</i></a>
        </div>
    </div>
@endfor
