<div class="site-title text-center ">
    <h3>Portfolio </h3>
</div>

<ul class="nav nav-tabs" style=" display: flex;justify-content: center;">
    <li class="active"><a data-toggle="tab" href="#portfolio">Android Applications</a></li>
    <li><a data-toggle="tab" href="#menu1">Web Applications</a></li>
</ul>

<div class="tab-content">
    <div id="portfolio" class="tab-pane fade in active">
        <h3 style="text-align: center">Android Applications</h3>
        <p>
        <div class="container">
            <h2>Android Apps Table</h2>
            <input type="hidden" id="apps_route" value="{{ route('datatable.get_android_apps', ['type' => 'apps']) }}">
            <br/>
            <div class="table-responsive">
                <table class="table table-striped" id="apps">
                    <thead>
                    <tr>
                        <th style="text-align: center"> Name </th>
                        <th style="text-align: center"> Desc </th>
                        <th style="text-align: center"> Image </th>
                        <th style="text-align: center"> Url </th>
                        <th style="text-align: center"> Download Count </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        </p>
    </div>
    <div id="menu1" class="tab-pane fade">
        <h3 style="text-align: center"> Web Applications</h3>
        <p>
        <div class="container">
            <h2>Web Apps Table</h2>
            <input type="hidden" id="web_route" value="{{ route('datatable.get_web_apps', ['type' => 'web']) }}">
            <br/>
            <div class="table-responsive">
                <table class="table table-striped" id="web" style="width: 100%">
                    <thead>
                    <tr>
                        <th style="text-align: center"> Name </th>
                        <th style="text-align: center"> Desc </th>
                        <th style="text-align: center"> Image </th>
                        <th style="text-align: center"> Url </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        </p>
    </div>
</div>