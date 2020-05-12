"use strict";
$(document).ready(function () {
    /* -----  Table - Datatable  ----- */
    $("#datatable").DataTable();

    $("#xp-default-datatable").DataTable({
        order: [[3, "desc"]],
        pageLength: 30,
        lengthMenu: [10, 25, 30, 50],
    });

    var table = $("#datatable-buttons").DataTable({
        lengthChange: false,
        buttons: ["copy", "csv", "excel", "pdf", "print"],
    });

    table
        .buttons()
        .container()
        .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
});
