$(document).ready(function () {
    $(document).on('click', '#add_bank, #back_btn', function () {
        swapTableAndCreation();
    });

    $('#submit_bank_creation').click(function (event) {
        event.preventDefault();

        let bankFormData = {

            bank_id: $('#bank_id').val(),
            bank_name: $('#bank_name').val(),
            branch: $('#branch').val(),
            account_type: $('#account_type').val(),
            account_No: $('#account_No').val(),
            account_holder: $('#account_holder').val(),
            ifsc_code: $('#ifsc_code').val(),
            ad_code: $('#ad_code').val(),
            swift_code: $('#swift_code').val(),
            bank_creation_id: $('#bank_creation_id').val()
        }

        var data = ['bank_name', 'branch', 'account_type', 'account_No', 'ifsc_code', 'ad_code', 'swift_code', 'account_holder']

        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });
        if (isValid) {
            $.ajax({
                type: 'POST',
                data: bankFormData,
                url: 'api/bank_creation_files/submit_bank_creation.php',
                dataType: 'json',
                success: function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Bank Creation Info Updated Successfully!');
                    }
                    else if (response == '3') {
                        swalSuccess('Success', 'Bank Creation Info Added Successfuly!');
                    } else {
                        swalError('Warning', 'Bank Creation Name Already Created!');
                    }
                    swapTableAndCreation();
                }
            })
        } else {
            swalError('Warning', 'Please fill out all mandatory fields.');
        }

    });

    $(document).on('click', '.bankActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/bank_creation_files/bank_creation_data.php', { id }, function (response) {
            $('#bank_creation_id').val(id);

            $('#bank_name').val(response[0].bank_name);
            $('#branch').val(response[0].branch);
            $('#account_type').val(response[0].account_type);
            $('#account_No').val(response[0].account_No);
            $('#account_holder').val(response[0].account_holder);
            $('#ifsc_code').val(response[0].ifsc_code);
            $('#ad_code').val(response[0].ad_code);
            $('#swift_code').val(response[0].swift_code);

            swapTableAndCreation();//to change to div to table content.
        }, 'json');

    });

    $(document).on('click', '.bankDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Bank Creation?', deleteBank, id);
        return;
    });

});

$(function () {
    getBankTable();
})


function swapTableAndCreation() {
    if ($('.bank_table_content').is(':visible')) {
        $('.bank_table_content').hide();
        $('#add_bank').hide();
        $('.bank_creation_content').show();
        $('#back_btn').show();

        getAutoGenBankId();
    }
    else {
        $('.bank_table_content').show();
        $('#add_bank').show(); // Show the Add staff button
        $('.bank_creation_content').hide();
        $('#back_btn').hide();
        whenCallBack();
        getBankTable();
    }
}

function getAutoGenBankId() {
    let id = $('#bank_creation_id').val();
    $.post('api/bank_creation_files/get_autoGen_bank_id.php', { id }, function (response) {
        $('#bank_id').val(response);
    }, 'json');
}

function getBankTable() {
    $.post('api/bank_creation_files/bank_creation_list.php', function (response) {
        var columnMapping = [
            'sno',
            'bank_name',
            'account_No',
            'account_holder',
            'branch',
            'swift_code',
            'ifsc_code',
            'ad_code',
            'action'
        ];
        appendDataToTable('#bank_creation_table', response, columnMapping);
        setdtable('#bank_creation_table');
    }, 'json')
}

function deleteBank(id) {
    $.post('api/bank_creation_files/delete_bank.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Bank Creation Deleted Successfully.');
            getBankTable();
        } else {
            swalError('Error', 'Bank Creation Delete Failed.');
        }
    }, 'json');
}

function whenCallBack(){

    $('#bank_creation').trigger('reset');
    $('#bank_creation_id').val('');

    $('#bank_creation input').css('border', '1px solid #cecece');
    $('#bank_creation select').css('border', '1px solid #cecece');
}


