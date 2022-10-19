$(document).ready(function(){
    $("#datatable").DataTable({
        lengthChange:!1,
        buttons:["copy","excel","pdf","colvis"],
        bInfo : false,
    })});