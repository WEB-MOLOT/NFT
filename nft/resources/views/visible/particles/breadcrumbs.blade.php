<div class="page-top">
    <div class="wrapper">
        <div class="breadcrumbs">
            <ul>
                @foreach($navigation->getBreadcrumbs() as $crumb)
                    @if($loop->last)
                        <li>{{ $crumb->name }}</li>
                    @else
                        <li><a href="{{ $crumb->route }}">{{ $crumb->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
