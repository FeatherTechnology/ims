$(document).ready(function () {
    $(document).on('click', '#add_mtn_stock_issue, #back_btn_mtn', function () {
        swapTableAndCreation();
    });
    $('#Print_mtn_stock_issue').click(function() {
        printForm('mtn_creation_form') 
    });
})
function swapTableAndCreation() {
    if ($('.mtn_stock_issue_table').is(':visible')) {
        $('.mtn_stock_issue_table').hide();
        $('#add_mtn_stock_issue').hide();
        $('.mtn_stock_issue_creation_content').show();
        $('#back_btn_mtn').show();
    }
    else {
        $('.mtn_stock_issue_table').show();
        $('#add_mtn_stock_issue').show(); 
        $('.mtn_stock_issue_creation_content').hide();
        $('#back_btn_mtn').hide();
    }
}
    