@if($menu)
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="nav" class="navbar-nav">
            @include('customMenuItems', ['items' => $menu->roots()])
        </ul>
    </div>
@endif
