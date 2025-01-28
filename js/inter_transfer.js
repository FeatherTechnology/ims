$(document).ready(function () {
   
    // $(document).on('click', '#add_inter_transfer, #back_btn', function () {
    //     swapTableAndCreation();
    // });

    $('#print_inter_transfer').click(function () {
        printForm('inter_transfer_form')
    })
});
// function swapTableAndCreation() {
//     if ($('.inter_transfer_table_content').is(':visible')) {
//         $('.inter_transfer_table_content').hide();
//         $('#add_inter_transfer').hide();
//         $('#inter_transfer_form').show();
//         $('#back_btn').show();
//     }
//     else {
//         $('.inter_transfer_table_content').show();
//         $('#add_inter_transfer').show();
//         $('#inter_transfer_form').hide();
//         $('#back_btn').hide();
        
//     }
// }