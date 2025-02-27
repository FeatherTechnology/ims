$(document).ready(function () {
    $(document).on('click', '#add_staff, #back_btn', function () {
        swapTableAndCreation();
        getDepartmentDropdown(department_name_id);
    });

    $('#submit_staff_creation').click(function (event) {
        event.preventDefault();

        let staffFormData = {

            employee_id: $('#employee_id').val(),
            employee_name: $('#employee_name').val(),
            gender: $('#gender').val(),
            email: $('#email').val(),
            mobile_no: $('#mobile_no').val(),
            department: $('#department').val(),
            designation: $('#designation').val(),
            staff_creation_id: $('#staff_creation_id').val()
        }

        var data = ['employee_name', 'gender', 'mobile_no', 'department', 'designation']

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
                data: staffFormData,
                url: 'api/staff_creation_files/submit_staff_creation.php',

                dataType: 'json',
                success: function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Staff Creation Info Updated Successfully!');
                    }
                    else if (response == '3') {
                        swalSuccess('Success', 'Staff Creation Info Added Successfuly!');
                    } else {
                        swalError('Warning', 'Staff Creation Name Already Created!');
                    }
                    swapTableAndCreation();
                }
            })
        } else {
            swalError('Warning', 'Please fill out all mandatory fields.');
        }

    });

    $(document).on('click', '.staffActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/staff_creation_files/staff_creation_data.php', { id }, function (response) {
            $('#staff_creation_id').val(id);

            $('#employee_name').val(response[0].employee_name);
            $('#gender').val(response[0].gender);
            $('#email').val(response[0].email);
            $('#mobile_no').val(response[0].mobile_no);
            $('#department').val(response[0].department);
            $('#designation').val(response[0].designation);

            getDepartmentDropdown(response[0].department);

            swapTableAndCreation();//to change to div to table content.
        }, 'json');

    });

    $(document).on('click', '.staffDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Staff Creation?', deleteStaff, id);
        return;
    });

    $('#email').on('change', function () {
        validateEmail($(this).val(), $(this).attr('id'));
    });

    $('#mobile_no').change(function () {
        checkMobileNo($(this).val(), $(this).attr('id'));
    });

    ///////////////////////////////////////////////////////////////////////////// Department Modal Start ///////////////////////////////////////////////////////////////////////

    $('#submit_department').click(function (event) {
        event.preventDefault();
        let department = $('#add_department').val(); let id = $('#add_department_id').val();
        var data = ['add_department']
        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });
        if (department != '') {
            if (isValid) {
                $.post('api/staff_creation_files/submit_department.php', { department, id }, function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Department Updated Successfully!');
                    } else if (response == '2') {
                        swalSuccess('Success', 'Department Added Successfuly!');
                    } else {
                        swalError('Warning', 'Department Name Already Created!');
                    }

                    getDepartmentTable();
                }, 'json');
                cleardepartment(); //To Clear All Fields in Department creation.
            }
        }
    });

    $(document).on('click', '.departmentActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/staff_creation_files/get_department_data.php', { id }, function (response) {
            $('#add_department_id').val(id);
            $('#add_department').val(response[0].department);
        }, 'json');
    });

    $(document).on('click', '.departmentDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the Department?', deleteDepartment, id);
        return;
    });

    //////////////////////////////////////////////////////////////////// Department Modal END ////////////////////////////////////////////////////////////////////////////////

});

$(function () {
    getStaffTable();
})

function swapTableAndCreation() {
    if ($('.staff_table_content').is(':visible')) {
        $('.staff_table_content').hide();
        $('#add_staff').hide();
        $('.staff_creation_content').show();
        $('#back_btn').show();

        getAutoGenStaffId();
    }
    else {
        $('.staff_table_content').show();
        $('#add_staff').show(); // Show the Add staff button
        $('.staff_creation_content').hide();
        $('#back_btn').hide();
        whenCallBack();
        getStaffTable();
    }
}

function getAutoGenStaffId() {
    let id = $('#staff_creation_id').val();
    $.post('api/staff_creation_files/get_autoGen_staff_id.php', { id }, function (response) {
        $('#employee_id').val(response);
    }, 'json');
}

function getStaffTable() {
    $.post('api/staff_creation_files/staff_creation_list.php', function (response) {
        var columnMapping = [
            'sno',
            'employee_id',
            'employee_name',
            'gender',
            'email',
            'mobile_no',
            'department',
            'designation',
            'action'
        ];
        appendDataToTable('#staff_creation_table', response, columnMapping);
        setdtable('#staff_creation_table');
    }, 'json')
}

function cleardepartment() {
    $('#add_department').val('');
    $('#add_department_id').val('0');
    $('#add_department').css('border', '1px solid #cecece');
}

function getDepartmentTable() {
    $.post('api/staff_creation_files/get_department_list.php', function (response) {
        let departmentList = [
            "sno",
            "department",
            "action"];
        appendDataToTable('#department_modal_table', response, departmentList);
        setdtable('#department_modal_table');
    }, 'json');
}

function getDepartmentDropdown(department_name_id) {
    $.post('api/staff_creation_files/get_department_list.php', function (response) {
        let appendDepartmentOption = '';
        appendDepartmentOption += '<option value="">Select Department</option>';
        $.each(response, function (index, val) {
            let selected = '';
            if (val.id == department_name_id) {
                selected = 'selected';
            }
            appendDepartmentOption += '<option value="' + val.id + '" ' + selected + '>' + val.department + '</option>';
        });

        $('#department').empty().append(appendDepartmentOption);

        cleardepartment()
    }, 'json');
}

function deleteDepartment(id) {
    $.post('api/staff_creation_files/delete_department.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Department Deleted Successfully.');
            getDepartmentTable();
        } else {
            swalError('Error', 'Department Delete Failed.');
        }
        $('#add_department').val('');
        $('#add_department_id').val('');
    }, 'json');
}

function deleteStaff(id) {
    $.post('api/staff_creation_files/delete_staff.php', { id }, function (response) {
        if (response == '1') {
            swalSuccess('Success', 'Staff Creation Deleted Successfully.');
            getStaffTable();
        } else {
            swalError('Error', 'Staff Creation Delete Failed.');
        }
    }, 'json');
}

function whenCallBack(){

    $('#staff_creation').trigger('reset');
    $('#staff_creation_id').val('');

    $('#staff_creation input').css('border', '1px solid #cecece');
    $('#staff_creation select').css('border', '1px solid #cecece');
}




