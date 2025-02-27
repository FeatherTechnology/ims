$(document).ready(function () {
    $(document).on('click', '#add_user, #back_btn', function () {
        swapTableAndCreation();
    });

    // Handle menu checkbox events
    $(document).on('change', '.main-menu input[type="checkbox"]', function () {
        const menuId = $(this).attr('id');
        const submenus = $(`#${menuId}-submenus input[type="checkbox"]`);
        submenus.prop('disabled', !this.checked);
        if (!this.checked) {
            submenus.prop('checked', false);
        }
    });

    $('#submit_user_creation').click(function (event) {
        event.preventDefault();

        // Collect selected submenu IDs
        let selectedSubmenuIds = [];
        $('input[type="checkbox"]:checked').each(function () {
            if ($(this).hasClass('submenu-checkbox')) {
                selectedSubmenuIds.push($(this).val());
            }
        });

        let userFormData = {
            name: $('#employee_name option:selected').text(),
            role: $('#role').val(),
            email: $('#email').val(),
            employee_name: $('#employee_name').val(),
            user_name: $('#user_name').val(),
            password: $('#password').val(),
            confirm_password: $('#confirm_password').val(),
            submenus: selectedSubmenuIds,
            id: $('#user_creation_id').val()
        }

        var data = ['role', 'email', 'employee_name', 'user_name', 'password', 'confirm_password']

        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });

        if (isValid && selectedSubmenuIds.length > 0) {
            $.post('api/user_creation_files/submit_user_creation.php', userFormData, function (response) {
                if (response.status == '') {
                    swalError('Error', 'Creation Failed.');
                } else if (response.status == '1') {
                    swalSuccess('Success', 'User Updated Successfully!');
                } else if (response.status == '2') {
                    swalSuccess('Success', 'User Added Successfully!');
                } else if (response.status == '3') {
                    swalError('Warning', 'User Name Already Created.');
                }

                if (response.status != '' && response.status != '3') {
                    swapTableAndCreation();
                }

                let sessionId = $('#session_user_id').val();
                if (response.last_id == sessionId) {
                    getLeftbarMenuList(); // Refresh leftbar menu after submit
                }
            }, 'json');
        } else {
            // If validation fails, check why
            if (isValid == false) {
                swalError('Warning', 'Please fill out all mandatory fields.');
            } else {
                swalError('Warning', 'Please select at least one submenu.');
            }
        }
    })

    $(document).on('click', '.userActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/user_creation_files/user_creation_data.php', { id }, function (response) {
            $('#user_creation_id').val(id);

            $('#role').val(response[0].role);
            $('#email').val(response[0].email);
            $('#employee_name_edit').val(response[0].employee_name);
            $('#user_name').val(response[0].user_name);
            $('#password').val(response[0].password);
            $('#confirm_password').val(response[0].confirm_password);

            swapTableAndCreation();//to change to div to table content.

        }, 'json');

    });

    $(document).on('click', '.userDeleteBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        swalConfirm('Delete', 'Do you want to Delete the User?', deleteUser, id);
        return;
    });

    $('#email').on('change', function () {
        validateEmail($(this).val(), $(this).attr('id'));
    });

    $('#password, #confirm_password').keyup(function () {
        const password = $('#password').val();
        const confirmPassword = $('#confirm_password').val();
        if (password != '' && confirmPassword != '') {
            if (password != confirmPassword) {
                $('#confirm_password').css("border", "1px solid red");
            } else {
                $('#confirm_password').css("border", "");

            }
        }
    });

    $('#password, #confirm_password').change(function () {
        const password = $('#password').val();
        const confirmPassword = $('#confirm_password').val();
        if (password != '' && confirmPassword != '') {
            if (password != confirmPassword) {
                $('#confirm_password').val('');
            }
        }
    });

});

$(function () {
    getUserCreationTable();
    getSessionValue();
});

function swapTableAndCreation() {
    if ($('.user_table_content').is(':visible')) {
        $('.user_table_content').hide();
        $('#add_user').hide();
        $('.user_creation_content').show();
        $('#back_btn').show();

        let userid = $('#user_creation_id').val();
        getMenuSubMenuList(userid);
        getEmployeeName();

    }
    else {
        $('.user_table_content').show();
        $('#add_user').show(); // Show the Add user button
        $('.user_creation_content').hide();
        $('#back_btn').hide();
        callWhenBack();
        getUserCreationTable();
        $('#user_creation_id').val('0');
    }
}

function getSessionValue() {
    $.post('api/base_api/getSessionData.php', function (response) {
        $('#session_user_id').val(response);
    }, 'json');
}

function getUserCreationTable() {
    $.post('api/user_creation_files/user_creation_list.php', function (response) {
        let userColumn = [
            'sno',
            'role',
            'email',
            'employee_name',
            'user_name',
            'password',
            'confirm_password',
            'action'
        ];
        appendDataToTable('#user_creation_table', response, userColumn);
        setdtable('#user_creation_table');
    }, 'json');
}

function getEmployeeName() {
    $.post('api/user_creation_files/employee_name.php', function (response) {
        let appendEmployeeOption = '';
        appendEmployeeOption += "<option value=''>Select Employee Name</option>";
        if (response.length > 0) {

            $.each(response, function (index, value) {
                let selected = '';
                let editGId = $('#employee_name_edit').val();

                // Corrected comparison using value.id instead of val.id
                if (value.id == editGId) {
                    selected = 'selected';
                }

                // Dynamically append options
                appendEmployeeOption += "<option value='" + value.id + "' " + selected + ">" + value.employee_name + "</option>";
            });
        }
        // Empty the dropdown and append new options
        $('#employee_name').empty().append(appendEmployeeOption);
    }, 'json');
}

function deleteUser(id) {
    $.post('api/user_creation_files/delete_user.php', { id }, function (response) {
        if (response == '0') {
            swalSuccess('Success', 'User Deleted Successfully.');
            getUserCreationTable();
            setTimeout(() => {
                let userSessionId = $('#session_user_id').val();
                if (userSessionId == id) {
                    location.href = 'logout.php';
                }
            }, 2500);
        } else if (response == '1') {
            swalError('Error', 'User Delete Failed.');
        }
    }, 'json');
}

function callWhenBack() {
    // Reset all form fields inside #user_creation_form
    $('#user_creation')[0].reset();

    // Reset all select dropdowns to their first option
    $('#user_creation select').each(function () {
        $(this).val($(this).find('option:first').val()).trigger('change'); // Ensures change event triggers if needed
    });

    // Clear hidden input fields related to dropdowns
    $('#employee_name_edit').val('');

    // Uncheck all checkboxes and radio buttons
    $('#user_creation input[type="checkbox"]').prop('checked', false);

    $('#user_creation input').css('border', '1px solid #cecece');
    $('#user_creation select').css('border', '1px solid #cecece');
}

function getMenuSubMenuList(userId) {
    $.post('api/user_creation_files/get_menu_submenu_list.php', function (response) {
        $('#dynamic-menus').empty();
        // Group submenus by main menu
        var grouped = {};
        response.forEach(function (item) {
            if (!grouped[item.main_menu_link]) {
                grouped[item.main_menu_link] = {
                    main_menu: item.main_menu,
                    submenus: []
                };
            }
            if (item.sub_menu) {
                grouped[item.main_menu_link].submenus.push({
                    sub_menu: item.sub_menu,
                    sub_menu_link: item.sub_menu_link,
                    sub_menu_id: item.sub_menu_id
                });
            }
        });

        // Iterate over grouped data to generate HTML
        var tabindex = 7;
        for (var mainMenuLink in grouped) {
            var menu = grouped[mainMenuLink];
            const menuHtml = `
                <div class="custom-control custom-checkbox main-menu">
                    <input type="checkbox" value="Yes" name="${mainMenuLink}-mainmenu" id="${mainMenuLink}-mainmenu" tabindex="${tabindex}">&nbsp;&nbsp;
                    <label class="custom-control-label" for="${mainMenuLink}-mainmenu">
                        <h5>${menu.main_menu}</h5>
                    </label>
                </div> 
                </br>
                <div class="row" id="${mainMenuLink}-mainmenu-submenus">
                    <!-- Submenus will be appended here -->
                </div>
                <hr>
            `;
            $('#dynamic-menus').append(menuHtml);
            tabindex++;
            menu.submenus.forEach(function (submenu) {
                const submenuHtml = `
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="${submenu.sub_menu_id}" class=" submenu-checkbox" name="${submenu.sub_menu_link}" id="${submenu.sub_menu_link}" tabindex="${tabindex}" disabled>&nbsp;&nbsp;
                            <label class="custom-control-label" for="${submenu.sub_menu_link}">${submenu.sub_menu}</label>
                        </div>
                    </div>
                `;
                $(`#${mainMenuLink}-mainmenu-submenus`).append(submenuHtml);
                tabindex++;
            });
        }

        // Fetch user permissions and set checkbox states
        $.post('api/user_creation_files/get_user_permissions.php', { user_id: userId }, function (userPermissions) {
            // Set main menu checkboxes
            userPermissions.forEach(function (permission) {
                $(`#${permission.main_menu_link}-mainmenu`).prop('checked', true);
                $(`#${permission.main_menu_link}-mainmenu`).trigger('change'); // Trigger change event to enable submenus

                $(`#${permission.sub_menu_link}`).prop('checked', true);
            });
        }, 'json');

    }, 'json');

}