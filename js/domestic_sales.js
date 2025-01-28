$(document).ready(function () {
    $(document).on('click', '#add_domestic_sales, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_domestic_sales').click(function() {
        printForm('domestic_sales_form') 
    })
})
function swapTableAndCreation() {
    if ($('.domestic_sales_table_content').is(':visible')) {
        $('.domestic_sales_table_content').hide();
        $('#add_domestic_sales').hide();
        $('.domestic_sales_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.domestic_sales_table_content').show();
        $('#add_domestic_sales').show(); 
        $('.domestic_sales_creation_content').hide();
        $('#back_btn').hide();
    }
}