$(document).ready(function () {
    $(document).on('click', '#add_pth, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_pth').click(function() {
        printForm('pthform') 
    });
})
function swapTableAndCreation() {
    if ($('.pth_table_content').is(':visible')) {
        $('.pth_creation_content').show();
        $('.pth_table_content').hide();
        $('#add_pth').hide();
        $('#back_btn').show();
    }
    else {
        $('.pth_creation_content').hide();
        $('.pth_table_content').show();
        $('#back_btn').hide();
        $('#add_pth').show();
    }
}