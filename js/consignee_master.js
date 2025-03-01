$(document).ready(function () {
    $(document).on('click', '#add_consignee, #back_btn', function () {
        swapTableAndCreation();
    });

    $('#submit_consignee_creation').click(function (event) {
        event.preventDefault();
        let consigneeFormData = {

            consignee_code: $('#consignee_code').val(),
            consignee_name: $('#consignee_name').val(),
            address: $('#address').val(),
            address_1: $('#address_1').val(),
            place: $('#place').val(),
            pin_code: $('#pin_code').val(),
            state: $('#state').val(),
            country: $('#country').val(),
            email: $('#email').val(),
            mobile_number: $('#mobile_number').val(),
            agent_name: $('#agent_name').val(),
            email_agent: $('#email_agent').val(),
            mobile_number_agent: $('#mobile_number_agent').val(),
            bank_name: $('#bank_name').val(),
            account_no: $('#account_no').val(),
            account_holder: $('#account_holder').val(),
            branch: $('#branch').val(),
            swift_code: $('#swift_code').val(),
            ifsc_code: $('#ifsc_code').val(),
            gst_no: $('#gst_no').val(),
            consignee_creation_id: $('#consignee_creation_id').val()
        }

        var data = ['consignee_name', 'address', 'address_1', 'place', 'pin_code', 'mobile_number_agent', 'bank_name', 'account_holder']

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
                data: consigneeFormData,
                url: 'api/consignee_creation_files/submit_consignee_creation.php',
                dataType: 'json',
                success: function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'consignee Master Info Updated Successfully!');
                    }
                    else if (response == '3') {
                        swalSuccess('Success', 'consignee Master Info Added Successfuly!');
                    } else {
                        swalError('Warning', 'consignee Master Name Already Created!');
                    }
                    swapTableAndCreation();
                }
            })
        } else {
            swalError('Warning', 'Please fill out all mandatory fields.');
        }
    });

    $(document).on('click', '.consigneeActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/consignee_creation_files/consignee_creation_data.php', { id }, function (response) {
            $('#consignee_creation_id').val(id);

            $('#consignee_name').val(response[0].consignee_name);
            $('#address').val(response[0].address);
            $('#address_1').val(response[0].address_1);
            $('#place').val(response[0].place);
            $('#pin_code').val(response[0].pin_code);
            $('#state').val(response[0].state);
            $('#country').val(response[0].country);
            $('#email').val(response[0].email);
            $('#mobile_number').val(response[0].mobile_number);
            $('#agent_name').val(response[0].agent_name);
            $('#email_agent').val(response[0].email_agent);
            $('#mobile_number_agent').val(response[0].mobile_number_agent);
            $('#bank_name_edit').val(response[0].bank_name);
            $('#account_no').val(response[0].account_no);
            $('#account_holder').val(response[0].account_holder);
            $('#branch').val(response[0].branch);
            $('#swift_code').val(response[0].swift_code);
            $('#ifsc_code').val(response[0].ifsc_code);
            $('#gst_no').val(response[0].gst_no);

            swapTableAndCreation();//to change to div to table content.
        }, 'json');

    });

    $(document).on('click', '.consigneeDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the consignee Master?', deleteconsignee, id);
        return;
    });

    $('#email').on('change', function () {
        validateEmail($(this).val(), $(this).attr('id'));
    });

    $('#mobile_number_agent,#mobile_number').change(function () {
        checkMobileNo($(this).val(), $(this).attr('id'));
    });

});
function swapTableAndCreation() {
    if ($('.consignee_table_content').is(':visible')) {
        $('.consignee_table_content').hide();
        $('#add_consignee').hide();
        $('.consignee_creation_content').show();
        $('#back_btn').show();

        getAutoGenconsigneeCode();
        getBankName();
    }
    else {
        $('.consignee_table_content').show();
        $('#add_consignee').show(); // Show the Add staff button
        $('.consignee_creation_content').hide();
        $('#back_btn').hide();
        whenCallBack();
        getconsigneeTable();
    }
}

$(function () {
    getconsigneeTable();
    getStateList();
})

function getAutoGenconsigneeCode() {
    let id = $('#consignee_creation_id').val();
    $.post('api/consignee_creation_files/get_autoGen_consignee_code.php', { id }, function (response) {
        $('#consignee_code').val(response);
    }, 'json');
}

function getBankName() {
    $.post('api/consignee_creation_files/bank_name.php', function (response) {
        let appendBankOption = '';
        appendBankOption += "<option value=''>Select Bank Name</option>";
        if (response.length > 0) {

            $.each(response, function (index, value) {
                let selected = '';
                let editGId = $('#bank_name_edit').val();

                // Corrected comparison using value.id instead of val.id
                if (value.id == editGId) {
                    selected = 'selected';
                }

                // Dynamically append options
                appendBankOption += "<option value='" + value.id + "' " + selected + ">" + value.bank_name + "</option>";
            });
        }
        // Empty the dropdown and append new options
        $('#bank_name').empty().append(appendBankOption);
    }, 'json');
}

function getconsigneeTable() {
    $.post('api/consignee_creation_files/consignee_creation_list.php', function (response) {
        var columnMapping = [
            'sno',
            'consignee_name',
            'address',
            'address_1',
            'place',
            'pin_code',
            'state_name',
            'country',
            'email',
            'mobile_number',
            'agent_name',
            'mobile_number_agent',
            'email_agent',
            'bank_name',
            'account_no',
            'account_holder',
            'branch',
            'swift_code',
            'ifsc_code',
            'gst_no',
            'action'
        ];
        appendDataToTable('#consignee_creation_table', response, columnMapping);
        setdtable('#consignee_creation_table');
    }, 'json')
}

function getStateList() {
    $.post('api/common_files/get_state_list.php', function (response) {
        let appendStateOption = '';
        appendStateOption += "<option value=''>Select State</option>";
        $.each(response, function (index, val) {
            appendStateOption += "<option value='" + val.id + "'>" + val.state_name + "</option>";
        });
        $('#state').empty().append(appendStateOption);
    }, 'json');
}

function deleteconsignee(id) {
    $.post('api/consignee_creation_files/delete_consignee.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'consignee Master Deleted Successfully.');
            getconsigneeTable();
        } else {
            swalError('Error', 'consignee Master Delete Failed.');
        }
    }, 'json');
}

function whenCallBack() {

    $('#consignee_creation').trigger('reset');
    $('#consignee_creation_id').val('');

    $('#consignee_creation input').css('border', '1px solid #cecece');
    $('#consignee_creation select').css('border', '1px solid #cecece');
}
