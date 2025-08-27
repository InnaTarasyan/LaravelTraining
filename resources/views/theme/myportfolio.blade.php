<div class="site-title text-center">
    <h2 id="portfolio-heading" class="fw-bold">📂 Portfolio</h2>
</div>
<br/><br/>

<ul class="nav nav-tabs" style=" display: flex;justify-content: center;flex-wrap: wrap;">
    <li class="active"><a data-toggle="tab" href="#portfolio">Android Applications</a></li>
    <li><a data-toggle="tab" href="#menu1">Web Applications</a></li>
</ul>

<div class="tab-content">
    <div id="portfolio" class="tab-pane fade in active">
        <h2 id="apps-heading" class="fw-bold text-center">📱 Android Apps Table</h2>
        <p>
        <div class="container">

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
        <h2 id="webapps-heading" class="fw-bold text-center">🌐 Web Applications</h2>
        <p>
        <div class="container">
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