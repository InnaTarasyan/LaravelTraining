"use strict";
function Home(){
    var tableAndroidApps;
    var tableWebApps;
}

/*
 Initializes the datatable
 */
Home.prototype.init = function () {
    this.tableAndroidApps = $('#apps').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": $('#apps_route').val(),
        "pageLength": 5,
        "lengthMenu": [5, 10, 25],
        stateSave: true,
        deferRender: true,
        order: [[0, 'asc']],
        dom: '<"row"<"col-sm-6"l><"col-sm-6 text-right"Bf>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
        buttons: [
            {
                text: 'Reset filters',
                className: 'btn btn-default',
                action: function (e, dt) {
                    dt.search('').columns().search('');
                    dt.order([[0,'asc']]);
                    dt.page('first').draw(false);
                }
            },
            {
                extend: 'csvHtml5',
                className: 'btn btn-primary',
                title: 'android_apps',
                exportOptions: { columns: [0,1,3,4] }
            },
            {
                extend: 'colvis',
                className: 'btn btn-default',
                text: 'Columns'
            },
            {
                text: 'Density',
                className: 'btn btn-default dt-density',
                action: function () {
                    $('#apps').toggleClass('table-compact');
                }
            }
        ],
        responsive: true,
        autoWidth: false,
        columnDefs: [
            { responsivePriority: 1, targets: 0 }, // name
            { responsivePriority: 2, targets: 2 }, // img
            { responsivePriority: 3, targets: 3 }, // url
            { responsivePriority: 4, targets: 1 }, // desc
            { responsivePriority: 5, targets: 4 }, // downloads
            { targets: 1, className: 'all phone-hide', responsivePriority: 50 },
            { targets: 1, render: function(data, type){
                if (type !== 'display') return data;
                var text = $('<div>').html(data || '').text();
                // Make copy friendly by removing verbose leading phrases
                text = text.replace(/^\s*(Wishing to|Do you want to|Are you|Want to)\b[^a-zA-Z0-9]*/i, '');
                text = text.replace(/\s+/g, ' ').trim();
                if (text.length === 0) return '';
                // Capitalize first letter
                text = text.charAt(0).toUpperCase() + text.slice(1);
                var isPhone = window.matchMedia && window.matchMedia('(max-width: 576px)').matches;
                var limit = isPhone ? 48 : 90;
                var short = text.length > limit ? (text.substr(0, limit).replace(/[,;:\s]+\S*$/, '') + '…') : text;
                return '<span title="'+ text +'">' + short + '</span>';
            }},
            { targets: 3, render: function(data, type){
                if (type !== 'display') return data;
                // data may already be an anchor; ensure it opens new tab
                var html = data || '';
                if (html.indexOf('<a') === 0) {
                    // inject target if missing
                    if (html.indexOf('target=') === -1) {
                        html = html.replace('<a ', '<a target="_blank" rel="noopener noreferrer" ');
                    }
                    return html.replace(/>(.*?)<\/a>/, '>Open<\/a>');
                }
                var url = $('<div>').text(html).text();
                return '<a href="'+ url +'" target="_blank" rel="noopener noreferrer">Open</a>';
            }}
        ],
        language: {
            search: "Filter:",
            lengthMenu: "Show _MENU_",
            info: "Showing _START_–_END_ of _TOTAL_",
            infoEmpty: "No entries",
            zeroRecords: "No matching apps",
            paginate: { previous: "Prev", next: "Next" }
        },
        "columns": [
            {data: 'name', name: 'name', "defaultContent" : 'Not Set'},
            {data: 'desc', name: 'desc', "defaultContent" : 'Not Set'},
            {data: 'img', name: 'img', "defaultContent" : 'Not Set'},
            {data: 'url', name: 'url', "defaultContent" : 'Not Set'},
            {data: 'download_count', name: 'download_count', "defaultContent" : 'Not Set'}
        ],
        "aaSorting": [[ 1, "asc" ]]
    });



    this.tableWebApps = $('#web').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": $('#web_route').val(),
        "pageLength": 5,
        "lengthMenu": [5, 10, 25],
        stateSave: true,
        deferRender: true,
        order: [[0, 'asc']],
        dom: '<"row"<"col-sm-6"l><"col-sm-6 text-right"Bf>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
        buttons: [
            {
                text: 'Reset filters',
                className: 'btn btn-default',
                action: function (e, dt) {
                    dt.search('').columns().search('');
                    dt.order([[0,'asc']]);
                    dt.page('first').draw(false);
                }
            },
            {
                extend: 'csvHtml5',
                className: 'btn btn-primary',
                title: 'web_apps',
                exportOptions: { columns: [0,1,3] }
            },
            {
                extend: 'colvis',
                className: 'btn btn-default',
                text: 'Columns'
            },
            {
                text: 'Density',
                className: 'btn btn-default dt-density',
                action: function () {
                    $('#web').toggleClass('table-compact');
                }
            }
        ],
        responsive: true,
        autoWidth: false,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: 2 },
            { responsivePriority: 3, targets: 3 },
            { responsivePriority: 4, targets: 1 },
            { targets: 1, render: function(data, type){
                if (type !== 'display') return data;
                var text = $('<div>').html(data || '').text();
                text = text.replace(/^\s*(Wishing to|Do you want to|Are you|Want to)\b[^a-zA-Z0-9]*/i, '');
                text = text.replace(/\s+/g, ' ').trim();
                if (!text) return '';
                text = text.charAt(0).toUpperCase() + text.slice(1);
                var isPhone = window.matchMedia && window.matchMedia('(max-width: 576px)').matches;
                var limit = isPhone ? 48 : 90;
                var short = text.length > limit ? (text.substr(0, limit).replace(/[,;:\s]+\S*$/, '') + '…') : text;
                return '<span title="'+ text +'">' + short + '</span>';
            }},
            { targets: 3, render: function(data, type){
                if (type !== 'display') return data;
                var html = data || '';
                if (html.indexOf('<a') === 0) {
                    if (html.indexOf('target=') === -1) {
                        html = html.replace('<a ', '<a target="_blank" rel="noopener noreferrer" ');
                    }
                    return html.replace(/>(.*?)<\/a>/, '>Open<\/a>');
                }
                var url = $('<div>').text(html).text();
                return '<a href="'+ url +'" target="_blank" rel="noopener noreferrer">Open</a>';
            }}
        ],
        language: {
            search: "Filter:",
            lengthMenu: "Show _MENU_",
            info: "Showing _START_–_END_ of _TOTAL_",
            infoEmpty: "No entries",
            zeroRecords: "No matching apps",
            paginate: { previous: "Prev", next: "Next" }
        },
        "columns": [
            {data: 'name', name: 'name', "defaultContent" : 'Not Set'},
            {data: 'desc', name: 'desc', "defaultContent" : 'Not Set'},
            {data: 'img', name: 'img', "defaultContent" : 'Not Set'},
            {data: 'url', name: 'url', "defaultContent" : 'Not Set'}
        ],
        "aaSorting": [[ 1, "asc" ]]
    });


};

function myMap() {
    var myCenter = new google.maps.LatLng(40.182344, 44.513337);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 6};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
}


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


$(document).ready(function() {
    var apps = new Home();
    apps.init();
    // Delegated image modal handler for both table cells and responsive card content
    $(document).on('click', '.myImg', function() {
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById('img01');
        var captionText = document.getElementById('caption');
        if (modal && modalImg && captionText) {
            modal.style.display = 'block';
            modalImg.src = this.src;
            captionText.innerHTML = this.alt || '';
            var span = document.getElementsByClassName('close')[0];
            if (span) {
                span.onclick = function() { modal.style.display = 'none'; };
            }
        }
    });
});