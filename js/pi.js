
$(document).ready(function () {
    $(document).on('click', '#add_pi, #back_btn', function () {
        swapTableAndCreation();
    });
    $('#print_pi').click(function () {
        printForm('pi_form')
    })
})
function swapTableAndCreation() {
    if ($('.pi_table_content').is(':visible')) {
        $('.pi_table_content').hide();
        $('#add_pi').hide();
        $('.pi_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.pi_table_content').show();
        $('#add_pi').show();
        $('.pi_creation_content').hide();
        $('#back_btn').hide();
    }
}
const branch_name = new Choices('#size', {
    removeItemButton: true,
    noChoicesText: 'Select Size [PCS / LBS]',
    allowHTML: true
});
