@extends('layouts.master')
@section('pageTitle'){{ $pageTitle }}@endsection
@section('content')
    <div class="container">
        <div class="post-detail col-md-12 col-sm-12 col-12">
            <h1 class="post-detail-title">{{ isset($post->title) ? $post->title : '' }}</h1>
            <div class="post-detail-img">
                <img src="{{ isset($post->img) ? URL::to($post->img) : '' }}" alt="Post detail image">
            </div>
            <div class="post-detail-content">
                <h6 class="text-center">{{ isset($post->caption) ? $post->caption : '' }}</h6>
                <p class="post-detail-content-text">
                    {!! isset($post->content) ? $post->content : '' !!}
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
