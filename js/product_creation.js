$(document).ready(function () {
    $(document).on('click', '#add_product, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.product_table_content').is(':visible')) {
        $('.product_table_content').hide();
        $('#add_product').hide();
        $('.product_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.product_table_content').show();
        $('#add_product').show(); // Show the Add staff button
        $('.product_creation_content').hide();
        $('#back_btn').hide();
    }
}