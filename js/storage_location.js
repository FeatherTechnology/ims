$(document).ready(function () {
    $(document).on('click', '#add_storage, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.storage_table_content').is(':visible')) {
        $('.storage_table_content').hide();
        $('#add_storage').hide();
        $('.storage_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.storage_table_content').show();
        $('#add_storage').show(); // Show the Add staff button
        $('.storage_creation_content').hide();
        $('#back_btn').hide();
    }
}