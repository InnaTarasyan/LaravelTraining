@if($menu)
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="nav" class="navbar-nav" style="list-style: none;">
            @include('admin.customMenuItems', ['items' => $menu->roots()])
        </ul>
    </div>
@endif
