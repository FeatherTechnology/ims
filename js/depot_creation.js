$(document).ready(function () {
    $(document).on('click', '#add_depot, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.depot_table_content').is(':visible')) {
        $('.depot_table_content').hide();
        $('#add_depot').hide();
        $('.depot_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.depot_table_content').show();
        $('#add_depot').show(); 
        $('.depot_creation_content').hide();
        $('#back_btn').hide();
    }
}