$(document).ready(function () {
    $(document).on('click', '#add_vendor_master, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.vendor_table_content').is(':visible')) {
        $('.vendor_table_content').hide();
        $('#add_vendor_master').hide();
        $('.vendor_master_content').show();
        $('#back_btn').show();
    }
    else {
        $('.vendor_table_content').show();
        $('#add_vendor_master').show(); // Show the Add staff button
        $('.vendor_master_content').hide();
        $('#back_btn').hide();
    }
}