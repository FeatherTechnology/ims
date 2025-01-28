$(document).ready(function () {
    $(document).on('click', '#add_export_sales, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_export_sales').click(function() {
        printForm('export_sales_form') 
    })
})
function swapTableAndCreation() {
    if ($('.export_sales_table_content').is(':visible')) {
        $('.export_sales_table_content').hide();
        $('#add_export_sales').hide();
        $('.export_sales_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.export_sales_table_content').show();
        $('#add_export_sales').show(); 
        $('.export_sales_creation_content').hide();
        $('#back_btn').hide();
    }
}