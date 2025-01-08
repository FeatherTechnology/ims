$(document).ready(function () {
    $(document).on('click', '#add_product_category, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.product_category_table_content').is(':visible')) {
        $('.product_category_table_content').hide();
        $('#add_product_category').hide();
        $('.product_category_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.product_category_table_content').show();
        $('#add_product_category').show(); // Show the Add staff button
        $('.product_category_creation_content').hide();
        $('#back_btn').hide();
    }
}