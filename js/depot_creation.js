$(document).ready(function () {
    $(document).on('click', '#add_depot, #back_btn', function () {
        swapTableAndCreation();
    });

    $('#submit_depot_creation').click(function (event) {
        event.preventDefault();

        let depotFormData = {

            depot_id: $('#depot_id').val(),
            depot_name: $('#depot_name').val(),
            address: $('#address').val(),
            address_1: $('#address_1').val(),
            place: $('#place').val(),
            pin_code: $('#pin_code').val(),
            state: $('#state').val(),
            contact_number: $('#contact_number').val(),
            email: $('#email').val(),
            gst_no: $('#gst_no').val(),
            depot_creation_id: $('#depot_creation_id').val()
        }

        var data = ['depot_name', 'address', 'place', 'pin_code', 'pin_code', 'state', 'contact_number']

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
                data: depotFormData,
                url: 'api/depot_creation_files/submit_depot_creation.php',

                dataType: 'json',
                success: function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Depot Creation Info Updated Successfully!');
                    }
                    else if (response == '3') {
                        swalSuccess('Success', 'Depot Creation Info Added Successfuly!');
                    } else {
                        swalError('Warning', 'Depot Creation Name Already Created!');
                    }
                    swapTableAndCreation();
                }
            })
        } else {
            swalError('Warning', 'Please fill out all mandatory fields.');
        }

    });

    $(document).on('click', '.depotActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/depot_creation_files/depot_creation_data.php', { id }, function (response) {
            $('#depot_creation_id').val(id);

            $('#depot_name').val(response[0].depot_name);
            $('#address').val(response[0].address);
            $('#address_1').val(response[0].address_1);
            $('#place').val(response[0].place);
            $('#pin_code').val(response[0].pin_code);
            $('#state').val(response[0].state);
            $('#contact_number').val(response[0].contact_number);
            $('#email').val(response[0].email);
            $('#gst_no').val(response[0].gst_no);

            swapTableAndCreation();//to change to div to table content.
        }, 'json');

    });

    $(document).on('click', '.depotDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Depot Creation?', deleteDepot, id);
        return;
    });

    $('#email').on('change', function () {
        validateEmail($(this).val(), $(this).attr('id'));
    });

    $('#contact_number').change(function () {
        checkMobileNo($(this).val(), $(this).attr('id'));
    });

})

$(function () {
    getDepotTable();
    getStateList();
})

function swapTableAndCreation() {
    if ($('.depot_table_content').is(':visible')) {
        $('.depot_table_content').hide();
        $('#add_depot').hide();
        $('.depot_creation_content').show();
        $('#back_btn').show();

        getAutoGenDepotId();
    }
    else {
        $('.depot_table_content').show();
        $('#add_depot').show();
        $('.depot_creation_content').hide();
        $('#back_btn').hide();
        whenCallBack();
        getDepotTable();
    }
}

function getAutoGenDepotId() {
    let id = $('#depot_creation_id').val();
    $.post('api/depot_creation_files/get_autoGen_depot_id.php', { id }, function (response) {
        $('#depot_id').val(response);
    }, 'json');
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

function getDepotTable() {
    $.post('api/depot_creation_files/depot_creation_list.php', function (response) {
        var columnMapping = [
            'sno',
            'depot_id',
            'depot_name',
            'address',
            'address_1',
            'place',
            'pin_code',
            'state_name',
            'contact_number',
            'email',
            'gst_no',
            'action'
        ];
        appendDataToTable('#depot_creation_table', response, columnMapping);
        setdtable('#depot_creation_table');
    }, 'json')
}

function deleteDepot(id) {
    $.post('api/depot_creation_files/delete_depot.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Depot Creation Deleted Successfully.');
            getDepotTable();
        } else {
            swalError('Error', 'Depot Creation Delete Failed.');
        }
    }, 'json');
}

function whenCallBack(){

    $('#depot_creation').trigger('reset');
    $('#depot_creation_id').val('');

    $('#depot_creation input').css('border', '1px solid #cecece');
    $('#depot_creation select').css('border', '1px solid #cecece');
}
