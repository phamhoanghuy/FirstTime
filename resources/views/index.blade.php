@extends('layouts.master')
@section('pageTitle')
    Trang chủ
@endsection
@section('content')
    {{--<!-- Preloader Gif -->
    <table class="doc-loader">
        <tr>
            <td>
                <img src="{{ URL::to('images/ajax-document-loader.gif') }}" alt="Loading..." />
            </td>
        </tr>
    </table>--}}

    <!-- Slider -->
    <div id="slider" class="container">
        @include('partials.sliders.main-slider')
    </div>
    <!-- Intro -->
    <div id="intro">
        @include('partials.main-intro')
    </div>
    <!-- Service -->
    <div id="service" class="container">
        @include('partials.main-service')
    </div>
    <!-- Product -->
    <div id="product">
        @include('partials.lists.main-product')
    </div>
    <!-- Extra: News and Video -->
    <div id="extra">
        <!-- News -->
        <div id="news" class="col-md-6 col-lg-6 col-xs-6 col-sm-6 col-6">
            @include('partials.lists.main-news')
        </div>
        <!-- Video -->
        <div id="video" class="col-md-6 col-lg-6 col-xs-6 col-sm-6 col-6">
            @include('partials.lists.main-video')
        </div>
    </div>

    {{--<div id="services">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <span>01</span>
                </div>
                <h2 class="entry-title">Services</h2>
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <script>
                        var slider1_speed = "500";
                        var slider1_auto = "false";
                        var slider1_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative service slider1">
                        <a id="slider1_next" class="image_slider_next" href ="#"></a>

                        <ul id="slider1" class="image-slider slides">
                            <li>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_01.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">BRANDING</div>
                                        <div class="service-content">
                                            Donecos arem ipsum sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_02.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">MOBILE APPS</div>
                                        <div class="service-content">
                                            Disum lorem sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_03.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">WEB</div>
                                        <div class="service-content">
                                            Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_04.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">GRAPHIC</div>
                                        <div class="service-content">
                                            Cadipisicing elit sed eiusmod tempor incididunt ut labore lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet.<br />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_03.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">SERVICES</div>
                                        <div class="service-content">
                                            Donecos arem ipsum sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_04.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">PSD</div>
                                        <div class="service-content">
                                            Disum lorem sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut donecos dolore ipsum temporest.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_02.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">HTML</div>
                                        <div class="service-content">
                                            Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod.<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="service-holder ">
                                    <img src="{{ URL::to('demo-images/icon_01.png') }}" alt="">
                                    <div class="service-content-holder">
                                        <div class="service-title">PHP</div>
                                        <div class="service-content">
                                            Cadipisicing elit sed eiusmod tempor incididunt ut labore lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit amet.<br />
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class = "clear"></div>
                    </div>

                </div>
            </div>
            <div class='clear'></div>
        </div>
    </div>


    <!-- Portfolio -->
    <div id="portfolio">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <span>02</span>
                </div>
                <h2 class="entry-title">Portfolio</h2>
            </div>
            <div class="section-content-holder portfolio-holder left">
                <div class="grid" id="portfolio-grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item element-item p_one">
                        <a href="single-portfolio.html">
                            <img src="{{ URL::to('demo-images/portfolio_item_01.jpg') }}" alt="">
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-type">
                                        <img src="{{ URL::to('images/icon_post.svg') }}" alt="">
                                    </p>
                                    <p class="portfolio-text">PSD MOCKUP</p>
                                    <p class="portfolio-sec-text">Smart Watch</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item element-item p_one_half">
                        <a href="single-portfolio2.html">
                            <img src="{{ URL::to('demo-images/portfolio_item_02.jpg') }}" alt="">
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-type">
                                        <img src="{{ URL::to('images/icon_post.svg') }}" alt="">
                                    </p>
                                    <p class="portfolio-text">PSD MOCKUP</p>
                                    <p class="portfolio-sec-text">Smart Watch</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item element-item p_one_half">
                        <a data-rel="prettyPhoto[gallery1]" href="{{ URL::to('demo-images/portfolio_item_08.jpg') }}">
                            <img src="{{ URL::to('demo-images/portfolio_item_08.jpg') }}" alt="">
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-type">
                                        <img src="{{ URL::to('images/icon_post.svg') }}" alt="">
                                    </p>
                                    <p class="portfolio-text">PSD MOCKUP</p>
                                    <p class="portfolio-sec-text">Smart Watch</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item element-item p_one">
                        <a data-rel="prettyPhoto[gallery1]" href="{{ URL::to('demo-images/portfolio_item_05.jpg') }}">
                            <img src="{{ URL::to('demo-images/portfolio_item_05.jpg') }}" alt="">
                            <div class="portfolio-text-holder">
                                <div class="portfolio-text-wrapper">
                                    <p class="portfolio-type">
                                        <img src="{{ URL::to('images/icon_post.svg') }}" alt="">
                                    </p>
                                    <p class="portfolio-text">PSD MOCKUP</p>
                                    <p class="portfolio-sec-text">Smart Watch</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="clear"></div>
                <div class="block portfolio-load-more-holder">
                    <a target="_self" class="more-posts">LOAD MORE</a>
                    <img src="{{ URL::to('images/icon_infinity.svg') }}" alt="Load more">
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>


    <!-- About -->
    <div id="about">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                    <span>03</span>
                </div>
                <h2 class="entry-title">CRAFTERS</h2>
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <div class="content-title-holder">
                        <p class="content-title">About</p>
                    </div>
                    <div class="one_half ">
                        Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum <strong>dolor sit amet</strong> consectetur est adipisicing elit, sed do eiusmod tempor
                    </div>
                    <div class="one_half last ">
                        <span style="color: #e54b76;"><strong>2001-2003 ·</strong></span> <span style="color:#727190;"><em>Art Studio Lorem Donec</em></span><br>
                        <span style="color: #e54b76;"><strong>2003-2006 ·</strong></span> <span style="color:#727190;"><em>Per Set Web Site</em></span><br>
                        <span style="color: #e54b76;"><strong>2006-2010 ·</strong></span> <span style="color:#727190;"><em>Setera Donec EstNunc</em></span><br>
                        <span style="color: #e54b76;"><strong>2010-2013 ·</strong></span> <span style="color:#727190;"><em>Studio Labore Tempor</em></span><br>
                        <span style="color: #e54b76;"><strong>2013-2016 ·</strong></span> <span style="color:#727190;"><em>Magna Ipsum Amet</em></span><br>
                    </div><div class="clear"></div>
                    <br>
                    <br>
                </div>

                <div class="full-width ">
                    <script>
                        var aboutImage_speed = "500";
                        var aboutImage_auto = "false";
                        var aboutImage_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative img aboutImage">
                        <a id="aboutImage_next" class="image_slider_next" href="#"></a>
                        <div class="caroufredsel_wrapper">
                            <ul id="aboutImage" class="image-slider slides">
                                <li><img src="{{ URL::to('demo-images/about_img_04.jpg') }}" alt=""></li>
                                <li><img src="{{ URL::to('demo-images/about_img_05.jpg') }}" alt=""></li>
                                <li><img src="{{ URL::to('demo-images/about_img_06.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <script>
                        var team1_speed = "500";
                        var team1_auto = "false";
                        var team1_hover = "true";
                    </script>
                    <div class="image-slider-wrapper relative team team1">
                        <a id="team1_next" class="image_slider_next" href="#"></a>
                        <div class="caroufredsel_wrapper">
                            <ul id="team1" class="image-slider slides">
                                <li>
                                    <div class="member-content-holder">
                                        <h4 class="member-name">Robert Williams</h4>
                                        <p class="member-position">LEAD DESIGNER</p>
                                        <div class="member-content">
                                            Eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est lorem adipisicing elit, sed do eiusmod tempor polor sit amet consectetur.<br>
                                        </div>
                                    </div>
                                    <div class="member-image-holder">
                                        <img src="{{ URL::to('demo-images/about_img_01.jpg') }}" alt="">
                                    </div>
                                    <div class="clear"></div>
                                </li>

                                <li>
                                    <div class="member-content-holder">
                                        <h4 class="member-name">John Doe</h4>
                                        <p class="member-position">SEO MASTER</p>
                                        <div class="member-content">
                                            Eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est lorem adipisicing elit, sed do eiusmod tempor polor sit amet consectetur.<br>
                                        </div>
                                    </div>
                                    <div class="member-image-holder">
                                        <img src="{{ URL::to('demo-images/about_img_02.jpg') }}" alt="">
                                    </div>
                                    <div class="clear"></div>
                                </li>

                                <li>
                                    <div class="member-content-holder">
                                        <h4 class="member-name">John Doe</h4>
                                        <p class="member-position">PSD GURU</p>
                                        <div class="member-content">
                                            Eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est lorem adipisicing elit, sed do eiusmod tempor polor sit amet consectetur.<br>
                                        </div>
                                    </div>
                                    <div class="member-image-holder">
                                        <img src="{{ URL::to('demo-images/about_img_03.jpg') }}" alt="">
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>   <!-- end full-width div -->

            </div>
            <div class="clear"></div>
        </div>
    </div>


    <!-- News -->
    <div id="news">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                        <span>
                            04
                        </span>
                </div>
                <h2 class="entry-title">STORIES</h2>
            </div>
            <div class="section-content-holder left">
                <div class="content-wrapper">
                    <div class="blog-holder block center-relative">

                        <article class="relative blog-item-holder center-relative">
                            <div class="num">01</div>
                            <div class="info">
                                <div class="author vcard ">Robert Williams</div>
                                <div class="cat-links">
                                    <ul>
                                        <li><a href="#">BRANDING</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="entry-title">
                                <a href="#">Eiusmod tempor incididunt ut dolore magna labore eiusmod ipsum dolor</a>
                            </h3>
                            <div class="clear"></div>
                        </article>

                        <article class="relative blog-item-holder center-relative">
                            <div class="num">02</div>
                            <div class="info">
                                <div class="author vcard ">Jim Davis</div>
                                <div class="cat-links">
                                    <ul>
                                        <li><a href="#">TECH</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="entry-title">
                                <a href="#">Incididunt ut dolore magna labore eiusmod lorem ipsum dolor sit</a>
                            </h3>
                            <div class="clear"></div>
                        </article>

                        <article class="relative blog-item-holder center-relative">
                            <div class="num">03</div>
                            <div class="info">
                                <div class="author vcard ">Ann Peterson</div>
                                <div class="cat-links">
                                    <ul>
                                        <li><a href="#">CRAFTING</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="entry-title">
                                <a href="#">Labore eiusmod lorem ipsum dolor sit amet nunc labore incididunt ut dolore</a>
                            </h3>
                            <div class="clear"></div>
                        </article>

                        <article class="relative blog-item-holder center-relative">
                            <div class="num">04</div>
                            <div class="info">
                                <div class="author vcard ">Robert Williams</div>
                                <div class="cat-links">
                                    <ul>
                                        <li><a href="#">CRAFTING</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="entry-title">
                                <a href="#">Dolor sit amet nunc labore incididunt ut dolore magna labore eiusmod</a>
                            </h3>
                            <div class="clear"></div>
                        </article>

                        <div class="latest-post-bottom-text">
                            <a href="#">GO TO BLOG</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="block content-1170 center-relative">
            <div class="extra-content-left">
                <script> var text1_speed = "500";
                    var text1_auto = "false";
                    var text1_hover = "true";
                </script>
                <div class="text1 testimonial-slider-holder slider-holder">
                    <div class="caroufredsel_wrapper">
                        <ul id="text1" class="slides testimonial">
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">The difference between a Designer and Developer, when it comes to design skills, is the difference between shooting a bullet and throwing it.</p>
                                    <p class="testimonial-author">SCOTT HANSELMAN</p>
                                </div>
                                <div class="clear">
                                </div>
                            </li>
                            <li style="width: 500px;">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">To create anything–whether a short story or a magazine profile or a film or a sitcom–is to believe, if only momentarily, you are capable of magic.</p>
                                    <p class="testimonial-author">TOM BISSEL</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">As a profession, graphic designers have been shamefully remiss or ineffective about plying their craft for social or political betterment.</p>
                                    <p class="testimonial-author">STEVEN HELLER</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <a id="text1_next" class="carousel_text_next" href="#"></a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Video -->
    <div id="video">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                        <span>
                            05
                        </span>
                </div>
                <h2 class="entry-title">OFFER</h2>
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <div class="content-title-holder">
                        <p class="content-title">Video</p>
                    </div>
                    <div class="one_half ">
                        Polor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum <strong>dolor sit amet</strong> consectetur est adipisicing elit, sed do eiusmod tempor
                    </div>
                    <div class="one_half last ">
                        <span style="color: #FFBA42;"><strong>2001-2003 ·</strong></span> <span style="color: #727190;"><em>Art Studio Lorem Donec</em></span><br>
                        <span style="color: #FFBA42;"><strong>2003-2006 ·</strong></span> <span style="color: #727190;"><em>Per Set Web Site</em></span><br>
                        <span style="color: #FFBA42;"><strong>2006-2010 ·</strong></span> <span style="color: #727190;"><em>Setera Donec EstNunc</em></span><br>
                        <span style="color: #FFBA42;"><strong>2010-2013 ·</strong></span> <span style="color: #727190;"><em>Studio Labore Tempor</em></span><br>
                        <span style="color: #FFBA42;"><strong>2013-2016 ·</strong></span> <span style="color: #727190;"><em>Magna Ipsum Amet</em></span><br>
                    </div><div class="clear"></div>
                    <br>
                    <br>
                </div>
                <div class="full-width ">
                    <a class="video-popup-holder" href="https://vimeo.com/157276599" data-rel="prettyPhoto[gallery-video1]">
                        <img class="thumb" src="demo-images/video_img.jpg" alt="">
                        <img class="popup-play" src="images/icon_video.svg" alt="Play">
                    </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="extra-content-full-width">
            <script>
                var fwslider1_speed = "500";
                var fwslider1_auto = "false";
                var fwslider1_hover = "true";
                var fwslider1_start = "0";
                var fwslider1_width = "400";
                var fwslider1_num = "5";
            </script>
            <div class="fwslider1 fw-image-slider-holder list_carousel relative">
                <div class="caroufredsel_wrapper">
                    <ul id="fwslider1" class="fw-image-slider">
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_editing.png') }}" alt="">
                            <p class="fw-slide-text">Video Editing</p>
                        </li>
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_clear.png') }}" alt="">
                            <p class="fw-slide-text">Premium Cleer</p>
                        </li>
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_display.png') }}" alt="">
                            <p class="fw-slide-text">For All Displays</p>
                        </li>
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_time.png') }}" alt="">
                            <p class="fw-slide-text">Right On Time</p>
                        </li>
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_ideas.png') }}" alt="">
                            <p class="fw-slide-text">Innovative Ideas</p>
                        </li>
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_sound.png') }}" alt="">
                            <p class="fw-slide-text">Perfect Sound</p>
                        </li>
                        <li class="fw-slide">
                            <img src="{{ URL::to('demo-images/icon_solution.png') }}" alt="">
                            <p class="fw-slide-text">3D Solution</p>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div id="fwslider1_fw_image_slide_pager" class="fw_carousel_pagination"></div>
            </div>
            <a id="fwslider1_fw_next" class="carousel_fw_next" href="#"></a>
            <div class="clear"></div>
        </div>
    </div>


    <!-- Skills -->

    <div id="skills">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder right">
                <div class="section-num">
                    <span>06</span>
                </div>
                <h2 class="entry-title">EXPERTISE</h2>
            </div>
            <div class="section-content-holder left">
                <div class="content-wrapper">
                    <div class="content-title-holder">
                        <p class="content-title">Skills</p>
                    </div>
                    <p>Fusce suscipit, orci eget lobortis sodales, velit nunc tristique metus, in tristique odio ante id sem. Etiam in quam et sapien bibendum mollis. Morbi eget velit eros, quis imperdiet arcusere perdan. Nunc lorem justo, pellentesque ac egestas quis.</p>
                    <br>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:81%;">
                            <div class="progress_bar_title" style="color: #55B286">HTML</div>
                            <div class="progress_bar_percent_text" style="color: #55B286">81%</div>
                            <div class="progress_bar_field_perecent" style="background-color:#32DB8A;"></div>
                        </div>
                    </div>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:93%;">
                            <div class="progress_bar_title" style="color: #E3A536">CSS</div>
                            <div class="progress_bar_percent_text" style="color: #E3A536">93%</div>
                            <div class="progress_bar_field_perecent" style="background-color:#FFBB42;"></div>
                        </div>
                    </div>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:72%;">
                            <div class="progress_bar_title" style="color: #B24564">PSD</div>
                            <div class="progress_bar_percent_text" style="color: #B24564">72%</div>
                            <div class="progress_bar_field_perecent" style="background-color:#E74C78;"></div>
                        </div>
                    </div>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:99%;">
                            <div class="progress_bar_title" style="color: #468ac7">DESIGN</div>
                            <div class="progress_bar_percent_text" style="color: #468ac7">99%</div>
                            <div class="progress_bar_field_perecent" style="background-color:#4C9EE7;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact">
        <div class="block content-1170 center-relative">
            <div class="section-title-holder left">
                <div class="section-num">
                        <span>
                            07
                        </span>
                </div>
                <h2 class="entry-title">Contact</h2>
            </div>
            <div class="section-content-holder right">
                <div class="content-wrapper">
                    <div class="one_half ">
                        <p>Consectetur adipisicing elit sed eiusmod tempor incididunt ut dolore magna labore eiusmod. Lorem ipsum dolor sit amet consectetur est adipisicing elit, sed do eiusmod tempor.</p>
                        <br>
                        <p><strong><span style="color: #e64b77;">Incididunt ut dolore</span></strong> magna labore eiusmod. Dolor sit amet consectetur est adipisicing elit, sed do eiusmod.</p>
                    </div>
                    <div class="one_half last">
                        <div class="contact-form">
                            <p><input id="name" type="text" name="your-name" placeholder="Name"></p>
                            <p><input id="contact-email" type="email" name="your-email" placeholder="Email"></p>
                            <p><input id="subject" type="text" name="your-subject" placeholder="Subject"></p>
                            <p><textarea id="message" name="your-message" placeholder="Message"></textarea></p>
                            <p><input type="submit" onClick="SendMail()" value="SEND"></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="full-width">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4274.290564544589!2d-75.2952832049782!3d40.753669641460846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1444506658649" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>--}}

@endsection

@section('footer')

    <script>
        $(document).ready(function(){
            var sourceSwap = function () {
                var $this = $(this);
                var newSource = $this.data('alt-src');
                $this.data('alt-src', $this.attr('src'));
                $this.attr('src', newSource);
            };

            $('.service-item-icon').hover(sourceSwap, sourceSwap);
        });
    </script>
@endsection
