$(document).ready(function () {
    $(document).on('click', '#add_stock_inward, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.stock_inward_table_content').is(':visible')) {
        $('.stock_inward_table_content').hide();
        $('#add_stock_inward').hide();
        $('.stock_inward_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.stock_inward_table_content').show();
        $('#add_stock_inward').show(); // Show the Add Branch button
        $('.stock_inward_creation_content').hide();
        $('#back_btn').hide();
    }
}
$('#stock_details_title').click(function () {
    $('#stock_details_body').slideToggle();
    setTimeout(() => {
        if ($('#stock_details_body').is(':visible')) {
        }
    }, 500);
});