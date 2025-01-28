$(document).ready(function () {
    $(document).on('click', '#add_ptn, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_ptn').click(function() {
        printForm('ptnform') 
    });
})
function swapTableAndCreation() {
    if ($('.ptn_table_content').is(':visible')) {
        $('.ptn_creation_content').show();
        $('.ptn_table_content').hide();
        $('#add_ptn').hide();
        $('#back_btn').show();
    }
    else {
        $('.ptn_creation_content').hide();
        $('.ptn_table_content').show();
        $('#back_btn').hide();
        $('#add_ptn').show();
    }
}