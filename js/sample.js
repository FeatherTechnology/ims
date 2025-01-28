$(document).ready(function () {
    $(document).on('click', '#add_sample, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_sample').click(function() {
        printForm('sample_form') 
    })
})
function swapTableAndCreation() {
    if ($('.sample_table_content').is(':visible')) {
        $('.sample_table_content').hide();
        $('#add_sample').hide();
        $('.sample_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.sample_table_content').show();
        $('#add_sample').show(); 
        $('.sample_creation_content').hide();
        $('#back_btn').hide();
    }
}