$('input[name=customer_data_type]').click(function () {
    let customerType = $(this).val();
    let showId = '';
    if (customerType == 'MTN') {
        $('#stock_indent_creation_content').show(); $('#stock_sales_creation_content').hide(); $('#stock_lab_creation_content').hide();
        showId = 'stock_indent_creation_content';

    } else if (customerType == 'sales') {
        $('#stock_indent_creation_content').hide(); $('#stock_sales_creation_content').show();$('#stock_lab_creation_content').hide();
        showId = 'stock_sales_creation_content';
    }
    else if (customerType == 'lab') {
        $('#stock_indent_creation_content').hide(); $('#stock_sales_creation_content').hide(); $('#stock_lab_creation_content').show();
        showId = 'stock_lab_creation_content';
    }
})
$(document).ready(function () {
    $('#Print_stock_issue_creation').click(function () {
        let customerType = $('input[name=customer_data_type]:checked').val();
        if (customerType === 'MTN') {
            printForm('stock_indent_creation_form');
        } else if (customerType === 'sales') {
            printForm('stock_sales_creation_form');

        } else if (customerType === 'lab') {
            printForm('stock_lab_creation_form');

        } else {
            console.log('Invalid customer type selected.');
        }
    });
});