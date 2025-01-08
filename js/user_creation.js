$(document).ready(function () {
    $(document).on('click', '#add_user, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.user_table_content').is(':visible')) {
        $('.user_table_content').hide();
        $('#add_user').hide();
        $('.user_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.user_table_content').show();
        $('#add_user').show(); // Show the Add user button
        $('.user_creation_content').hide();
        $('#back_btn').hide();
    }
}