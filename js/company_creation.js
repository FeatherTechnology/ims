$(document).ready(function () {
    $(document).on('click', '#add_company, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.company_table_content').is(':visible')) {
        $('.company_table_content').hide();
        $('#add_company').hide();
        $('.company_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.company_table_content').show();
        $('#add_company').show(); // Show the Add Branch button
        $('.company_creation_content').hide();
        $('#back_btn').hide();
    }
}
    