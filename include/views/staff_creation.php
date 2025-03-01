<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_staff"><span class="fa fa-plus"></span>&nbsp; Add staff Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="staff_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                <table id="staff_creation_table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Gender</th>
                            <th>Email ID</th>
                            <th>Mobile Number</th>
                            <th>Department</th>
                            <th>Designation</th>
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
<div class="staff_creation_content" style="display: none;">
    <form id="staff_creation" name="staff_creation">
        <input type="hidden" id="staff_creation_id">
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">General Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="employee_id">Employee ID</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="employee_id" id="employee_id" value="" placeholder="Employee ID" tabindex="1" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="employee_name">Employee Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="employee_name" id="employee_name" value="" placeholder="Employee Name" tabindex="2">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="gender">Gender</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="gender" id="gender" placeholder="Enter Gender" tabindex="3">
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Transgender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="Email">E-Mail ID</label>
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="Enter E-Mail ID" tabindex="4">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mobile_no">Mobile No</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="mobile_no" id="mobile_no" value="" placeholder="Mobile No" onKeyPress="if(this.value.length==10) return false;" tabindex="5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">Department Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                            <div class="form-group">
                                <label for="department">Department</label><span class="text-danger">*</span>
                                <input type="hidden" id="department_name_id">
                                <select  class="form-control" name="department" id="department" value="" placeholder="Enter Department" tabindex="6">
                                    <option value="">Select Department</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_department_modal" tabindex="7" onclick="getDepartmentTable()"><span class="icon-add"><span></button>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="designation">Designation</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="designation" id="designation" value="" placeholder="Enter Designation" tabindex="8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" id="submit_staff_excel_creation">Excel Upload</button>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" id="submit_staff_creation">Submit</button>
            </div>
        </div>
        <!----------------------------------------------------------------------- Modal Box ---------------------------------------------------------------------------->
        <div class="modal fade" id="add_department_modal" tabindex="-1">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content" style="background-color: white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Department</h5>
                        <button type="button" class="close" data-dismiss="modal" tabindex="1" aria-label="Close" onclick="getDepartmentDropdown()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3"></div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                <div class="form-group">
                                    <label for="add_department">Department</label><span class="text-danger">*</span>
                                    <input class="form-control" name="add_department" id="add_department" tabindex="2" placeholder="Enter Department">
                                    <input type="hidden" id="add_department_id" value='0'>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                <div class="form-group">
                                    <button name="submit_department" id="submit_department" class="btn btn-primary" tabindex="3" style="margin-top: 18px;"><span class="icon-check"></span>&nbsp;Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                            <table id="department_modal_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 30px;">S.NO</th>
                                        <th>Department Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" tabindex="17" onclick="getDepartmentDropdown()">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>