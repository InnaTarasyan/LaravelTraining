<div class="site-title text-center mb-4">
    <h2 id="portfolio-heading" class="fw-bold">📂 Portfolio</h2>
</div>

<!-- Tabs -->
<div class="tabs-wrap">
    <ul class="nav nav-tabs justify-content-center" role="tablist">
        <li class="active" role="presentation">
            <a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab">
                📱 Android Applications
            </a>
        </li>
        <li role="presentation">
            <a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab">
                🌐 Web Applications
            </a>
        </li>
    </ul>
</div>

<div class="tab-content pt-3">
    <!-- Android -->
    <div id="portfolio" class="tab-pane fade in active" role="tabpanel">
        <h3 id="apps-heading" class="text-center mb-3">📱 Android Apps</h3>
        <br/>
        <div class="container">
            <input type="hidden" id="apps_route" value="{{ route('datatable.get_android_apps', ['type' => 'apps']) }}">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-stack" id="apps">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Desc</th>
                        <th>Image</th>
                        <th>Url</th>
                        <th>Download Count</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Web -->
    <div id="menu1" class="tab-pane fade" role="tabpanel">
        <h3 id="webapps-heading" class="text-center mb-3">🌐 Web Applications</h3>
        <br/>
        <div class="container">
            <input type="hidden" id="web_route" value="{{ route('datatable.get_web_apps', ['type' => 'web']) }}">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-stack" id="web">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Desc</th>
                        <th>Image</th>
                        <th>Url</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    (function () {
        function applyDataLabels(tableEl) {
            if (!tableEl) return;
            var headers = Array.from(tableEl.querySelectorAll('thead th'))
                    .map(th => (th.textContent || '').trim());
            tableEl.querySelectorAll('tbody tr').forEach(tr => {
                tr.querySelectorAll('td').forEach((td, i) => {
                td.setAttribute('data-label', headers[i] || '');
        });
        });
        }
        function initTable(id) {
            var el = document.getElementById(id);
            if (el) applyDataLabels(el);
        }
        document.addEventListener('DOMContentLoaded', () => {
            initTable('apps');
        initTable('web');
    });
        if (window.jQuery && jQuery.fn.dataTable) {
            jQuery(document).on('draw.dt', (e, settings) => {
                initTable(jQuery(settings.nTable).attr('id'));
        });
        }
    })();
</script>
