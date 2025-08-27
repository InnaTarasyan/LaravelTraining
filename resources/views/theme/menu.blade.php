<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" >
                <span class="glyphicon glyphicon-home"></span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            @if(isset($menu))
                {!! $menu !!}
            @endif
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>