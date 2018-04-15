<div>
    @for($i = 0; $i < 8; $i++)
        <div class="product-item col-md-3 col-lg-3 col-xs-3">
            <div class="col-md-12 col-lg-12 col-xs-12">
                <img class="product-img" src="{{ URL::to('images/product.jpg') }}" alt="">
            </div>
            <div class="col-md-12 col-lg-12 col-xs-12">
                <p class="product-description">THẢM EH-M0002</p>
            </div>
        </div>
    @endfor
</div>