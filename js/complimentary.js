$(document).ready(function () {
    $(document).on('click', '#add_complimentary, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_sample').click(function() {
        printForm('sample_form') 
    })
})
function swapTableAndCreation() {
    if ($('.complimentary_table_content').is(':visible')) {
        $('.complimentary_table_content').hide();
        $('#add_complimentary').hide();
        $('.complimentary_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.complimentary_table_content').show();
        $('#add_complimentary').show(); 
        $('.complimentary_creation_content').hide();
        $('#back_btn').hide();
    }
}