$('input[name=customer_data_type]').click(function () {
    let customerType = $(this).val();
    if (customerType == 'indent') {
        $('#stock_indent_creation_content').show(); $('#stock_sales_creation_content').hide(); $('#stock_lab_creation_content').hide();

    } else if (customerType == 'sales') {
        $('#stock_indent_creation_content').hide(); $('#stock_sales_creation_content').show();$('#stock_lab_creation_content').hide();

    }
    else if (customerType == 'lab') {
        $('#stock_indent_creation_content').hide(); $('#stock_sales_creation_content').hide(); $('#stock_lab_creation_content').show();

    }
})