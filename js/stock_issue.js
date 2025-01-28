$('input[name=customer_data_type]').click(function () {
    let customerType = $(this).val();
    if (customerType == 'MTN') {
        $('.Show_mtn').show(); $('.hide_sales').hide(); $('.hideshow_lab').hide();

    } else if (customerType == 'sales') {
        $('.Show_mtn').hide(); $('.hide_sales').show(); $('.hideshow_lab').hide();
    }
    else if (customerType == 'lab') {
        $('.Show_mtn').hide(); $('.hide_sales').hide(); $('.hideshow_lab').show();
    }
});
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

    $(document).on('click', '#add_stock_issue_mtn, #back_btn_mtn', function () {
        toggleTableAndCreation('mtn');
    });
    $(document).on('click', '#add_stock_issue_sales, #back_btn_sales', function () {
        toggleTableAndCreation('sales');
    });
    $(document).on('click', '#add_stock_issue_lab, #back_btn_lab', function () {
        toggleTableAndCreation('lab');
    });

    $('#print_stock_issue').click(function () {
        printForm('stock_issue_form');
    });

    function toggleTableAndCreation(category) {
        const tableSelector = `.${category}_table`;
        const addBtnSelector = `#add_stock_issue_${category}`;
        const creationContentSelector = `#${category}_creation_content`;
        const backBtnSelector = `#back_btn_${category}`;

        if ($(tableSelector).is(':visible')) {
            $(tableSelector).hide();
            $(addBtnSelector).hide();
            $(creationContentSelector).show();
            $(backBtnSelector).show();
        } else {
            $(tableSelector).show();
            $(addBtnSelector).show();
            $(creationContentSelector).hide();
            $(backBtnSelector).hide();
        }
    }
});