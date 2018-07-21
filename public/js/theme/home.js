"use strict";
function Home(){
    var oTable;
}

/*
 Initializes the datatable
 */
Home.prototype.init = function () {
    this.oTable = $('#apps').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": $('#apps_route').val(),
        "pageLength": 5,
        "columns": [
            {data: 'name', name: 'name', "defaultContent" : 'Not Set'},
            {data: 'desc', name: 'desc', "defaultContent" : 'Not Set'},
            {data: 'img', name: 'img', "defaultContent" : 'Not Set'},
            {data: 'url', name: 'url', "defaultContent" : 'Not Set'}
        ],
        "aaSorting": [[ 1, "asc" ]]
    });
};

$(document).ready(function() {
    var coins = new Home();
    coins.init();

});