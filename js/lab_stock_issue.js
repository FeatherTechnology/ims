$(document).ready(function () {
    $(document).on('click', '#add_lab_stock_issue, #back_btn_lab', function () {
        swapTableAndCreation();
    });
    $('#Print_lab_stock_issue').click(function() {
        printForm('lab_creation_form') 
    });
})
function swapTableAndCreation() {
    if ($('.lab_stock_issue_table').is(':visible')) {
        $('.lab_stock_issue_table').hide();
        $('#add_lab_stock_issue').hide();
        $('.lab_stock_issue_creation_content').show();
        $('#back_btn_lab').show();
    }
    else {
        $('.lab_stock_issue_table').show();
        $('#add_lab_stock_issue').show(); 
        $('.lab_stock_issue_creation_content').hide();
        $('#back_btn_lab').hide();
    }
}
    