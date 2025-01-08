$(document).ready(function () {
    $(document).on('click', '#add_staff, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.staff_table_content').is(':visible')) {
        $('.staff_table_content').hide();
        $('#add_staff').hide();
        $('.staff_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.staff_table_content').show();
        $('#add_staff').show(); // Show the Add staff button
        $('.staff_creation_content').hide();
        $('#back_btn').hide();
    }
}