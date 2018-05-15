@extends('layouts.master')
@section('header')
    <!-- Use for AJAX (Token) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- styles -->
    <link href="{{ URL::to('css/form.css') }}" rel="stylesheet">
    <!-- js -->
    <script src="{{ URL::to('js/jquery.fileuploader.min.js') }}" type="text/javascript"></script>
@endsection
@section('pageTitle'){{ $pageTitle }}@endsection
@section('content')
    <div id="upload" class="container">
        <div class="col-md-12 col-sm-12 col-12">
            <h6 class="col-md-6 col-sm-6 col-6">Bước 1: Tải lên file cần in</h6>
            <h6 class="col-md-6 col-sm-6 col-6">Bước 2: Nhập thông tin khách hàng</h6>
        </div>
        <div class="col-md-12 col-sm-12 col-12">
            <form id="uploadFilesForm" class="col-md-6 col-sm-6 col-6" action=" " method="post" enctype="multipart/form-data">
                <input type="file" name="test">
                {{--<button id="btnSubmit" type="button" class="btn btn-primary">Gửi</button>--}}
            </form>
            <div class="col-md-6 col-sm-6 col-6">
                <div id="form-main">
                    {{--<h1 class="text-center" class="col-md-12 col-sm-12 col-12">Thông tin khách hàng</h1>--}}
                    <div id="form-div" class="col-md-12 col-sm-12 col-12">
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        var routerContactForm = '{{ route('contact.send') }}';

        $(document).ready(function() {
            var input = $('input[name="test"]');    // name of "input" field here!
            var btnSubmit = $('.submit button');    // button Submit form

            uploadfiles(input);
            btnSubmit.click(function () {
                // catch all "start upload" elements ( > )
                $(".fileuploader-action-start").trigger("click");
            });

            function uploadfiles(input){
                // enable fileuploader plugin
                input.fileuploader({
                    changeInput: '<div class="fileuploader-input">' +
                    '<div class="fileuploader-input-inner">' +
                    '<img src="images/fileuploader-dragdrop-icon.png">' +
                    '<h3 class="fileuploader-input-caption"><span>Kéo và thả file vào đây</span></h3>' +
                    '<p>hoặc</p>' +
                    '<div class="fileuploader-input-button"><span>Chọn từ máy tính</span></div>' +
                    '</div>' +
                    '</div>',
                    theme: 'dragdrop',
                    thumbnails: {
                        box: '<div class="fileuploader-items">' +
                        '<ul class="fileuploader-items-list"></ul>' +
                        '</div>',
                        boxAppendTo: null,
                        item: '<li class="fileuploader-item">' +
                        '<div class="columns">' +
                        '<div class="column-thumbnail">${image}</div>' +
                        '<div class="column-title">' +
                        '<div title="${name}">${name}</div>' +
                        '<span>${size2}</span>' +
                        '</div>' +
                        '<div class="column-actions">' +
                        '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
                        '</div>' +
                        '</div>' +
                        '<div class="progress-bar2">${progressBar}<span></span></div>' +
                        '</li>',
                        item2: '<li class="fileuploader-item">' +
                        '<div class="columns">' +
                        '<a href="${data.url}" target="_blank">' +
                        '<div class="column-thumbnail">${image}</div>' +
                        '<div class="column-title">' +
                        '<div title="${name}">${name}</div>' +
                        '<span>${size2}</span>' +
                        '</div>' +
                        '</a>' +
                        '<div class="column-actions">' +
                        '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="Download" download><i></i></a>' +
                        '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
                        '</div>' +
                        '</div>' +
                        '</li>',
                        itemPrepend: false,
                        removeConfirmation: true,
                        startImageRenderer: true,
                        synchronImages: true,
                        canvasImage: {
                            width: null,
                            height: null
                        },
                        _selectors: {
                            list: '.fileuploader-items-list',
                            item: '.fileuploader-item',
                            start: '.fileuploader-action-start',
                            retry: '.fileuploader-action-retry',
                            remove: '.fileuploader-action-remove'
                        },
                        beforeShow: function(parentEl, newInputEl, inputEl) {
                            // your callback here
                        },
                        onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
                            if(item.choosed)
                                item.html.find('.column-actions').prepend(
                                    '<a class="fileuploader-action fileuploader-action-start" title="Start upload"><i></i></a>'
                                );
                        },
                        onItemRemove: function(itemEl, listEl, parentEl, newInputEl, inputEl) {
                            itemEl.children().animate({'opacity': 0}, 200, function() {
                                setTimeout(function() {
                                    itemEl.slideUp(200, function() {
                                        itemEl.remove();
                                    });
                                }, 100);
                            });
                        },
                        onImageLoaded: function(itemEl, listEl, parentEl, newInputEl, inputEl) {
                            // your callback here
                        },
                    },
                    upload: {
                        url: '{{ route('upload') }}',
                        data: {
                            isTest: 'yes'
                        },
                        type: 'POST',
                        enctype: 'multipart/form-data',
                        start: false,
                        synchron: false,
                        beforeSend: function(item, listEl, parentEl, newInputEl, inputEl) {
                            item.upload.data.isTest = 'no';

                            return true;
                        },
                        onSuccess: function(result, item) {
                            var data = JSON.parse(result);

                            // if success
                            if (data.isSuccess && data.files[0]) {
                                item.name = data.files[0].name;
                                item.html.find('.column-title > div:first-child').text(data.files[0].name).attr('title', data.files[0].name);
                            }

                            // if warnings
                            if (data.hasWarnings) {
                                for (var warning in data.warnings) {
                                    alert(data.warnings);
                                }

                                item.html.removeClass('upload-successful').addClass('upload-failed');
                                // go out from success function by calling onError function
                                // in this case we have a animation there
                                // you can also response in PHP with 404
                                return this.onError ? this.onError(item) : null;
                            }

                            item.html.find('.column-actions').append('<a class="fileuploader-action fileuploader-action-remove fileuploader-action-success" title="Remove"><i></i></a>');
                            setTimeout(function() {
                                item.html.find('.progress-bar2').fadeOut(400);
                            }, 400);
                        },
                        onError: function(item) {
                            console.log('on-error');
                            var progressBar = item.html.find('.progress-bar2');

                            if(progressBar.length > 0) {
                                progressBar.find('span').html(0 + "%");
                                progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
                                item.html.find('.progress-bar2').fadeOut(400);
                            }

                            item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length == 0 ? item.html.find('.column-actions').prepend(
                                    '<a class="fileuploader-action fileuploader-action-retry" title="Retry"><i></i></a>'
                                ) : null;
                        },
                        onProgress: function(data, item) {
                            var progressBar = item.html.find('.progress-bar2');

                            if(progressBar.length > 0) {
                                progressBar.show();
                                progressBar.find('span').html(data.percentage + "%");
                                progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                            }
                        },
                        onComplete: null,
                    },
                    onRemove: function(item) {
                        $.post('{{ route('remove') }}', {
                            file: item.name
                        });
                    },
                    captions: {
                        feedback: 'Kéo và thả file vào đây',
                        feedback2: 'Kéo và thả file vào đây',
                        drop: 'Kéo và thả file vào đây'
                    }
                });
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
@endsection