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
        "columns": [
            {data: 'name', name: 'name', "defaultContent" : 'Not Set'},
            {data: 'desc', name: 'desc', "defaultContent" : 'Not Set'},
            {data: 'img', name: 'img', "defaultContent" : 'Not Set'},
            {data: 'url', name: 'url', "defaultContent" : 'Not Set'},
            {data: 'download_count', name: 'download_count', "defaultContent" : 'Not Set'}
        ],
        "aaSorting": [[ 1, "asc" ]],
        "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");

            $(nRow.cells[2].firstChild).on("click", function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    });

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        },
    });



    this.tableWebApps = $('#web').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": $('#web_route').val(),
        "pageLength": 5,
        "columns": [
            {data: 'name', name: 'name', "defaultContent" : 'Not Set'},
            {data: 'desc', name: 'desc', "defaultContent" : 'Not Set'},
            {data: 'img', name: 'img', "defaultContent" : 'Not Set'},
            {data: 'url', name: 'url', "defaultContent" : 'Not Set'}
        ],
        "aaSorting": [[ 1, "asc" ]],
        "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");

            $(nRow.cells[2].firstChild).on("click", function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            });

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        },
    });


};

function myMap() {
    var myCenter = new google.maps.LatLng(40.177200, 44.503490);
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
});