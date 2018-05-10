@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="post-detail col-md-12 col-sm-12 col-12">
            <h1 class="post-detail-title">Thiết Kế</h1>
            <div class="post-detail-img">
                <img src="{{ URL::to('images/post-detail-img.jpg') }}" alt="Post detail image">
            </div>
            <div class="post-detail-content">
                <h6 class="text-center">Thiết kế quan trọng chủ yếu nhắm đến sự hài lòng của khách hàng là tiêu chí chính của chúng tôi</h6>
                <p class="post-detail-content-text">
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
