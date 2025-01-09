$(document).ready(function () {
    $(document).on('click', '#add_production_indent, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.production_indent_table_content').is(':visible')) {
        $('.production_indent_table_content').hide();
        $('#add_production_indent').hide();
        $('.production_indent_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.production_indent_table_content').show();
        $('#add_production_indent').show(); // Show the Add Branch button
        $('.production_indent_creation_content').hide();
        $('#back_btn').hide();
    }
}
    