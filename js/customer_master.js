$(document).ready(function () {
    $(document).on('click', '#add_customer, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.customer_table_content').is(':visible')) {
        $('.customer_table_content').hide();
        $('#add_customer').hide();
        $('.customer_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.customer_table_content').show();
        $('#add_customer').show(); // Show the Add staff button
        $('.customer_creation_content').hide();
        $('#back_btn').hide();
    }
}