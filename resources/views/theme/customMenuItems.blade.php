{{--@foreach($items as $item)--}}
    {{--@if($item->hasChildren())--}}
        {{--<li class="nav-item dropdown parent_elem">--}}
            {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ $item->url() }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--{{ $item->title }}--}}
            {{--</a>--}}
            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >--}}
                {{--<ul id="nav" class="navbar-nav ml-auto sub-menu" style="display: block; list-style: none" >--}}
                    {{--@include('theme.customMenuItems',['items'=>$item->children()])--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</li>--}}
    {{--@else--}}
        {{--<li class="nav-item ">--}}
            {{--<a href="{{ $item->url() }}" class="nav-link dropdown-item" > {{ $item->title }}</a>--}}
        {{--</li>--}}
    {{--@endif--}}
{{--@endforeach--}}

@foreach($items as $item)
    <li {{ (URL::current() == $item->url()) ? "class=active" : '' }} >
        <a href="{{ $item->url() }}">{{ $item->title }}</a>
        @if($item->hasChildren())
            <ul class="sub-menu">
                @include('theme.customMenuItems',['items'=>$item->children()])
            </ul>
        @endif
    </li>
@endforeach
