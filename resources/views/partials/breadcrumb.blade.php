@if (isset($breadcrumbs))
    <div class="container">
        <ul id="breadcrumb" class="clearfix">
            <i class="fa fa-home"></i>
            @foreach ($breadcrumbs as $breadcrumb)
                <li>
                    @if($breadcrumb->url != '')
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    @else
                        {{ $breadcrumb->title }}
                    @endif
                </li>
                @if(!$loop->last)
                    <li></li>
                    <i class="fa fa-angle-right"></i>
                    <li></li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
