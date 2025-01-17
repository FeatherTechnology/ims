$(document).ready(function () {
    $(document).on('click', '#add_mtn, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_mtn').click(function() {
        printForm('myForm') 
    });
    
})
function swapTableAndCreation() {
    if ($('.production_indent_table_content').is(':visible')) {
        $('.production_indent_table_content').hide();
        $('#add_mtn').hide();
        $('.production_indent_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.production_indent_table_content').show();
        $('#add_mtn').show(); // Show the Add Branch button
        $('.production_indent_creation_content').hide();
        $('#back_btn').hide();
    }
}
    