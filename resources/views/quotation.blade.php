@extends('layouts.master')
@section('pageTitle'){{ $pageTitle }}@endsection
@section('content')
    <div class="container quotation">
        <h1 class="text-center">Bảng báo giá</h1>
        <div class="col-md-12 col-sm-12 col-12 margin-bottom-40">
            <div class="col-md-3 col-sm-3 col-3"></div>
            <div class="col-md-6 col-sm-6 col-6" style="display: flex;">
                <img src="{{ URL::to('images/printing-quotation.jpg') }}" alt="Printing Quotation">
            </div>
            <div class="col-md-3 col-sm-3 col-3"></div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
