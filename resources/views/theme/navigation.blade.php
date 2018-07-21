@if($menu)
    <ul class="nav navbar-nav">
        @include('theme.customMenuItems', ['items' => $menu->roots()])
    </ul>
@endif
