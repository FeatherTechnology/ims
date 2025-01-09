$(document).ready(function () {
    $(document).on('click', '#add_fg_lot, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.fg_lot_table_content').is(':visible')) {
        $('.lot_creation_content').show();
        $('.fg_lot_table_content').hide();
        $('#add_fg_lot').hide();
        $('#back_btn').show();
    }
    else {
        $('.lot_creation_content').hide();
        $('.fg_lot_table_content').show();
        $('#back_btn').hide();
        $('#add_fg_lot').show();
    }
}