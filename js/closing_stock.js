$(document).ready(function () {
    $(document).on('click', '#run', function () {
        $('#report_table_content').show();
    });

    $(document).on('click', '#add_closing_stock, #back_btn', function () {
        swapTableAndCreation();
    });

    $('#print_order').click(function() {
        printForm('order_form') 
    })
})
function swapTableAndCreation() {
    if ($('.closing_stock_table_content').is(':visible')) {
        $('.closing_stock_table_content').hide();
        $('#add_closing_stock').hide();
        $('.closing_stock_report_content').show();
        $('#back_btn').show();
    }
    else {
        $('.closing_stock_table_content').show();
        $('#add_closing_stock').show(); 
        $('.closing_stock_report_content').hide();
        $('#back_btn').hide();
        $('#report_table_content').hide();
    }
}