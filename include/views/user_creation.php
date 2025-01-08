<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_user"><span class="fa fa-plus"></span>&nbsp; Add User Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="user_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <table id="user_create" class="table ">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Employee Name</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="user_creation_content" style="display: none;">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">Add user</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="role">Role</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="role" id="role" placeholder="Enter role" tabindex="1">
                                <option>Select Role</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Email">E-Mail ID</label><span class="text-danger">*</span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail ID" tabindex="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="employee_name">Employee Name</label><span class="text-danger">*</span>
                        <select type="text" class="form-control" name="employee_name" id="employee_name" placeholder="Enter Employee Name" tabindex="3">
                            <option>Select Employee Name</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="User_Name">User Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User Name" tabindex="4">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="password">Password</label><span class="text-danger">*</span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" tabindex="5">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Confirm Password">Confirm Password</label><span class="text-danger">*</span>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password" tabindex="6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- ---------------------- Screen Mapping START  ----------------------------- -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Screen Mapping <span class="text-danger">*</span></h5>
        </div>
        <div class="card-body" id="dynamic-menus">
            <div class="custom-control custom-checkbox main-menu">
                <input type="checkbox" value="Yes" name="${mainMenuLink}-mainmenu" id="${mainMenuLink}-mainmenu" tabindex="${tabindex}">&nbsp;&nbsp;
                <label class="custom-control-label" for="${mainMenuLink}-mainmenu">
                    <h5>Dashboard</h5>
                </label>
            </div>
            </br>
            <div class="row" id="${mainMenuLink}-mainmenu-submenus">
                <!-- Submenus will be appended here -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="${submenu.sub_menu_id}" class=" submenu-checkbox" name="${submenu.sub_menu_link}" id="${submenu.sub_menu_link}" tabindex="${tabindex}" disabled>&nbsp;&nbsp;
                        <label class="custom-control-label" for="${submenu.sub_menu_link}">Dashboard</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="custom-control custom-checkbox main-menu">
                <input type="checkbox" value="Yes" name="${mainMenuLink}-mainmenu" id="${mainMenuLink}-mainmenu" tabindex="${tabindex}">&nbsp;&nbsp;
                <label class="custom-control-label" for="${mainMenuLink}-mainmenu">
                    <h5>Administration</h5>
                </label>
            </div>
            </br>
            <div class="row" id="${mainMenuLink}-mainmenu-submenus">
                <!-- Submenus will be appended here -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="${submenu.sub_menu_id}" class=" submenu-checkbox" name="${submenu.sub_menu_link}" id="${submenu.sub_menu_link}" tabindex="${tabindex}" disabled>&nbsp;&nbsp;
                        <label class="custom-control-label" for="${submenu.sub_menu_link}">Company creation</label>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="${submenu.sub_menu_id}" class=" submenu-checkbox" name="${submenu.sub_menu_link}" id="${submenu.sub_menu_link}" tabindex="${tabindex}" disabled>&nbsp;&nbsp;
                        <label class="custom-control-label" for="${submenu.sub_menu_link}">User creation</label>
                    </div>
                </div>
            </div>
            <hr>
            
        </div>
    </div>
    <!--- ---------------------- Screen Mapping END  ----------------------------- -->
    <div class="text-right">
        <button type="button" class="btn btn-primary" id="submit_user_creation">Submit</button>
    </div>
</div>