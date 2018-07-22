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

$(document).ready(function() {
    var apps = new Home();
    apps.init();
});