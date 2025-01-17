$(document).ready(function () {
    $(document).on('click', '#add_bank, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.bank_table_content').is(':visible')) {
        $('.bank_table_content').hide();
        $('#add_bank').hide();
        $('.bank_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.bank_table_content').show();
        $('#add_bank').show(); // Show the Add staff button
        $('.bank_creation_content').hide();
        $('#back_btn').hide();
    }
}