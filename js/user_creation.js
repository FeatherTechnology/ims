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

})

function swapTableAndCreation() {
    if ($('.user_table_content').is(':visible')) {
        $('.user_table_content').hide();
        $('#add_user').hide();
        $('.user_creation_content').show();
        $('#back_btn').show();

        let userid = $('#user_creation_id').val();
        getMenuSubMenuList(userid);
    }
    else {
        $('.user_table_content').show();
        $('#add_user').show(); // Show the Add user button
        $('.user_creation_content').hide();
        $('#back_btn').hide();
    }
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
        var tabindex = 18;
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
        // $.post('api/user_creation_files/get_user_permissions.php', { user_id: userId }, function (userPermissions) {
        //     // Set main menu checkboxes
        //     userPermissions.forEach(function (permission) {
        //         $(`#${permission.main_menu_link}-mainmenu`).prop('checked', true);
        //         $(`#${permission.main_menu_link}-mainmenu`).trigger('change'); // Trigger change event to enable submenus

        //         $(`#${permission.sub_menu_link}`).prop('checked', true);
        //     });
        // }, 'json');

    }, 'json');
}