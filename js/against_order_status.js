$(document).ready(function () {
    $(document).on('click', '#run', function () {
        $('#report_table_content').show();
    });
    $(document).on('click', '#add_against_order, #back_btn', function () {
        swapTableAndCreation();
    });

    $('#print_order').click(function () {
        printForm('order_form')
    })
});
function swapTableAndCreation() {
    if ($('.against_order_table_content').is(':visible')) {
        $('.against_order_table_content').hide();
        $('#add_against_order').hide();
        $('.against_order_creation').show();
        $('#back_btn').show();
    }
    else {
        $('.against_order_table_content').show();
        $('#add_against_order').show();
        $('.against_order_creation').hide();
        $('#back_btn').hide();
        $('#report_table_content').hide();
    }
}
