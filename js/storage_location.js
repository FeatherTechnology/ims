$(document).ready(function () {
    $(document).on('click', '#add_storage, #back_btn', function () {
        swapTableAndCreation();
        getStorageDropdown(storage_name_id);
        getRackDropdown(rack_name_id);
        getCompartmentDropdown(compartment_name_id);
    });

    ////////////////////////////////////////////////////////////////////////// Storage location Modal Start ////////////////////////////////////////////////////////////////////

    $('#submit_storage').click(function (event) {
        event.preventDefault();
        let storage = $('#add_storage_location').val(); let id = $('#add_storage_id').val();
        var data = ['add_storage_location']
        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });
        if (storage != '') {
            if (isValid) {
                $.post('api/storage_creation_files/submit_storage.php', { storage, id }, function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Storage Location Updated Successfully!');
                    } else if (response == '2') {
                        swalSuccess('Success', 'Storage Location Added Successfuly!');
                    } else {
                        swalError('Warning', 'Storage Location Name Already Created!');
                    }

                    getStorageTable();
                }, 'json');
                clearStorage();
            }
        }
    });

    $(document).on('click', '.storageActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/storage_creation_files/get_storage_data.php', { id }, function (response) {
            $('#add_storage_id').val(id);
            $('#add_storage_location').val(response[0].storage);
        }, 'json');
    });

    $(document).on('click', '.storageDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Storage Location?', deleteStorage, id);
        return;
    });

    //////////////////////////////////////////////////////////////////// Storage location Modal End //////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////// Rack Modal Start ////////////////////////////////////////////////////////////////////////////

    $('#submit_rack').click(function (event) {
        event.preventDefault();
        let rack = $('#add_rack').val(); let id = $('#add_rack_id').val();
        var data = ['add_rack']
        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });
        if (rack != '') {
            if (isValid) {
                $.post('api/storage_creation_files/submit_rack.php', { rack, id }, function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Rack Updated Successfully!');
                    } else if (response == '2') {
                        swalSuccess('Success', 'Rack Added Successfuly!');
                    } else {
                        swalError('Warning', 'Rack Name Already Created!');
                    }

                    getRackTable();
                }, 'json');
                clearRack();
            }
        }
    });

    $(document).on('click', '.rackActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/storage_creation_files/get_rack_data.php', { id }, function (response) {
            $('#add_rack_id').val(id);
            $('#add_rack').val(response[0].rack);
        }, 'json');
    });

    $(document).on('click', '.rackDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Rack?', deleteRack, id);
        return;
    });

    //////////////////////////////////////////////////////////////////// Rack Modal END //////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////// Compartment Modal Start ////////////////////////////////////////////////////////////////////////////

    $('#submit_compartment').click(function (event) {
        event.preventDefault();
        let compartment = $('#add_compartment').val(); let id = $('#add_compartment_id').val();
        var data = ['add_compartment']
        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });
        if (compartment != '') {
            if (isValid) {
                $.post('api/storage_creation_files/submit_compartment.php', { compartment, id }, function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Compartment Updated Successfully!');
                    } else if (response == '2') {
                        swalSuccess('Success', 'Compartment Added Successfuly!');
                    } else {
                        swalError('Warning', 'Compartment Name Already Created!');
                    }

                    getCompartmentTable();
                }, 'json');
                clearCompartment();
            }
        }
    });

    $(document).on('click', '.compartmentActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/storage_creation_files/get_compartment_data.php', { id }, function (response) {
            $('#add_compartment_id').val(id);
            $('#add_compartment').val(response[0].compartment);
        }, 'json');
    });

    $(document).on('click', '.compartmentDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Compartment?', deleteCompartment, id);
        return;
    });

    ///////////////////////////////////////////////////////////////// Compartment Modal END ////////////////////////////////////////////////////////////////////////////////////

    $('#submit_storage_creation').click(function (event) {
        event.preventDefault();

        let storageFormData = {

            storage_location: $('#storage_location').val(),
            rack: $('#rack').val(),
            compartment: $('#compartment').val(),
            palette: $('#palette').val(),
            pal_ette: $('#pal_ette').val(),
            storage_creation_id: $('#storage_creation_id').val()
        }

        var data = ['storage_location', 'rack', 'compartment', 'palette']

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
                data: storageFormData,
                url: 'api/storage_creation_files/submit_storage_creation.php',

                dataType: 'json',
                success: function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Storage Location Info Updated Successfully!');
                    }
                    else if (response == '3') {
                        swalSuccess('Success', 'Storage Location Info Added Successfuly!');
                    } else {
                        swalError('Warning', 'Storage Location Name Already Created!');
                    }
                    swapTableAndCreation();
                }
            })
        } else {
            swalError('Warning', 'Please fill out all mandatory fields.');
        }

    });

    $(document).on('click', '.storeActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/storage_creation_files/storage_creation_data.php', { id }, function (response) {
            $('#storage_creation_id').val(id);

            $('#storage_location').val(response[0].storage_location);
            $('#rack').val(response[0].rack);
            $('#compartment').val(response[0].compartment);
            $('#palette').val(response[0].palette);
            $('#pal_ette').val(response[0].pal_ette);

            getStorageDropdown(response[0].storage_location);
            getRackDropdown(response[0].rack);
            getCompartmentDropdown(response[0].compartment);

            swapTableAndCreation();//to change to div to table content.
        }, 'json');

    });

    $(document).on('click', '.storeDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Storage Location?', deleteStore, id);
        return;
    });

});



$(function () {
    getStorageLocationTable();
})

function swapTableAndCreation() {
    if ($('.storage_table_content').is(':visible')) {
        $('.storage_table_content').hide();
        $('#add_storage').hide();
        $('.storage_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.storage_table_content').show();
        $('#add_storage').show(); // Show the Add staff button
        $('.storage_creation_content').hide();
        $('#back_btn').hide();
        whenCallBack();
        getStorageLocationTable();
    }
}

function getStorageLocationTable() {
    $.post('api/storage_creation_files/storage_creation_list.php', function (response) {
        var columnMapping = [
            'sno',
            'storage',
            'rack',
            'compartment',
            'palette',
            'action'
        ];
        appendDataToTable('#storage_creation_table', response, columnMapping);
        setdtable('#storage_creation_table');
    }, 'json')
}

function deleteStore(id) {
    $.post('api/storage_creation_files/delete_storage_loc.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Storage Location Deleted Successfully.');
            getStorageLocationTable();
        } else {
            swalError('Error', 'Storage Location Delete Failed.');
        }
    }, 'json');
}

function updatePalette() {
    // Initialize an array to store selected values
    let selectedValues = [];

    // Get the values from selected options, excluding placeholders
    let storageLocation = $('#storage_location option:selected').text();
    let rack = $('#rack option:selected').text();
    let compartment = $('#compartment option:selected').text();
    let palette = $('#palette').val();

    // Check if the selected values are not placeholders (empty or specific value)
    if (storageLocation === "" || storageLocation === "Select Storage Location") {
        storageLocation = "";  // Exclude if it's a placeholder
    }
    if (rack === "" || rack === "Select Rack") {
        rack = "";  // Exclude if it's a placeholder
    }
    if (compartment === "" || compartment === "Select Compartment") {
        compartment = "";  // Exclude if it's a placeholder
    }

    // Add selected values to the array (if they are not empty)
    if (storageLocation) selectedValues.push(storageLocation);
    if (rack) selectedValues.push(rack);
    if (compartment) selectedValues.push(compartment);
    if (palette) selectedValues.push(palette);

    // Append the values step by step, joined with "_"
    $('#pal_ette').val(selectedValues.join('_'));
}

// Trigger update on change
$('#storage_location, #rack, #compartment, #palette').on('change', updatePalette);

function whenCallBack() {

    $('#storage_creation').trigger('reset');
    $('#storage_creation_id').val('');

    $('#storage_creation input').css('border', '1px solid #cecece');
    $('#storage_creation select').css('border', '1px solid #cecece');
}



//////////////////////////////////////////////////////////////////// Function Storage Location Modal Start /////////////////////////////////////////////////////////////////////

function clearStorage() {
    $('#add_storage_location').val('');
    $('#add_storage_id').val('0');
    $('#add_storage_location').css('border', '1px solid #cecece');
}

function getStorageTable() {
    $.post('api/storage_creation_files/get_storage_list.php', function (response) {
        let storageList = [
            "sno",
            "storage",
            "action"];
        appendDataToTable('#storage_modal_table', response, storageList);
        setdtable('#storage_modal_table');
    }, 'json');
}

function getStorageDropdown(storage_name_id) {
    $.post('api/storage_creation_files/get_storage_list.php', function (response) {
        let appendstorageOption = '';
        appendstorageOption += '<option value="">Select Storage Location</option>';
        $.each(response, function (index, val) {
            let selected = '';
            if (val.id == storage_name_id) {
                selected = 'selected';
            }
            appendstorageOption += '<option value="' + val.id + '" ' + selected + '>' + val.storage + '</option>';
        });

        $('#storage_location').empty().append(appendstorageOption);

        clearStorage();
    }, 'json');
}

function deleteStorage(id) {
    $.post('api/storage_creation_files/delete_storage.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Storage Location Deleted Successfully.');
            getStorageTable();
        } else {
            swalError('Error', 'Storage Location Delete Failed.');
        }
        $('#add_storage_location').val('');
        $('#add_storage_id').val('');
    }, 'json');
}

//////////////////////////////////////////////////////////////////// Function  Storage Location Modal END /////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////// Function Rack Modal Start /////////////////////////////////////////////////////////////////////////

function clearRack() {
    $('#add_rack').val('');
    $('#add_rack_id').val('0');
    $('#add_rack').css('border', '1px solid #cecece');
}

function getRackTable() {
    $.post('api/storage_creation_files/get_rack_list.php', function (response) {
        let rackList = [
            "sno",
            "rack",
            "action"];
        appendDataToTable('#rack_modal_table', response, rackList);
        setdtable('#rack_modal_table');
    }, 'json');
}

function getRackDropdown(rack_name_id) {
    $.post('api/storage_creation_files/get_rack_list.php', function (response) {
        let appendRackOption = '';
        appendRackOption += '<option value="">Select Rack</option>';
        $.each(response, function (index, val) {
            let selected = '';
            if (val.id == rack_name_id) {
                selected = 'selected';
            }
            appendRackOption += '<option value="' + val.id + '" ' + selected + '>' + val.rack + '</option>';
        });

        $('#rack').empty().append(appendRackOption);

        clearRack()
    }, 'json');
}

function deleteRack(id) {
    $.post('api/storage_creation_files/delete_rack.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Rack Deleted Successfully.');
            getRackTable();
        } else {
            swalError('Error', 'Rack Delete Failed.');
        }
        $('#add_rack_id').val('');
        $('#add_rack').val('');
    }, 'json');
}

////////////////////////////////////////////////////////////////////////// Function Rack Modal END ////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////// Function Compartment Modal Start ////////////////////////////////////////////////////////////////////////

function clearCompartment() {
    $('#add_compartment').val('');
    $('#add_compartment_id').val('0');
    $('#add_compartment').css('border', '1px solid #cecece');
}

function getCompartmentTable() {
    $.post('api/storage_creation_files/get_compartment_list.php', function (response) {
        let compartmentList = [
            "sno",
            "compartment",
            "action"];
        appendDataToTable('#compartment_moadl_table', response, compartmentList);
        setdtable('#compartment_moadl_table');
    }, 'json');
}

function getCompartmentDropdown(compartment_name_id) {
    $.post('api/storage_creation_files/get_compartment_list.php', function (response) {
        let appendCompartmentOption = '';
        appendCompartmentOption += '<option value="">Select Compartment</option>';
        $.each(response, function (index, val) {
            let selected = '';
            if (val.id == compartment_name_id) {
                selected = 'selected';
            }
            appendCompartmentOption += '<option value="' + val.id + '" ' + selected + '>' + val.compartment + '</option>';
        });

        $('#compartment').empty().append(appendCompartmentOption);

        clearCompartment()
    }, 'json');
}

function deleteCompartment(id) {
    $.post('api/storage_creation_files/delete_compartment.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Compartment Deleted Successfully.');
            getCompartmentTable();
        } else {
            swalError('Error', 'Compartment Delete Failed.');
        }
        $('#add_compartment_id').val('');
        $('#add_compartment').val('');
    }, 'json');
}

/////////////////////////////////////////////////////////////////////// Function Compartment Modal END //////////////////////////////////////////////////////////////////////////


