$(document).ready(function () {
    $(document).on('click', '#add_order, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_order').click(function() {
        printForm('order_form') 
    })
})
function swapTableAndCreation() {
    if ($('.order_table_content').is(':visible')) {
        $('.order_table_content').hide();
        $('#add_order').hide();
        $('.order_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.order_table_content').show();
        $('#add_order').show(); 
        $('.order_creation_content').hide();
        $('#back_btn').hide();
    }
}