<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_vendor_master"><span class="fa fa-plus"></span>&nbsp; Add Vendor Master</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="vendor_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <table id="vendor_table" class="table custom-table">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Vendor Code</th>
                            <th>Vendor Name</th>
                            <th>Address</th>
                            <th>Pin Code</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Email ID</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="vendor_master_content" style="display:none">
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Gendral info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="vendor_code">Vendor Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="vendor_code" id="vendor_code" placeholder="Vendor Code" tabindex="1" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="vendor_name">Vendor Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="vendor_name" id="vendor_name" placeholder="Enter Vendor Name" tabindex="2">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="address">Address</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" tabindex="3">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="address_1">Address 1</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="address_1" id="address_1" placeholder="Enter Address 1" tabindex="4">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="place">Place</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="place" id="place" placeholder="Enter Place " tabindex="5">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="pin_code">Pin Code</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" name="pin_code" id="pin_code" placeholder="Enter Pin Code " tabindex="6" onKeyPress="if(this.value.length==6) return false;">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="state">State</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="state" id="state" tabindex="7">
                                <option>Select State</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="country">Country</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="country" id="country" tabindex="8">
                                <option>Select Country</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="email_id">Email ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="email_id" id="email_id" placeholder="Enter Email ID " tabindex="9">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="mobile_number">Mobile Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number" tabindex="10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Bank info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="bank_name">Bank Name</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="bank_name" id="bank_name" tabindex="11">
                                <option>Select Bank Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="account_no">Account Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="account_no" id="account_no" placeholder="Enter Account Number" tabindex="12">
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="account_holder">Account Holder</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="account_holder" id="account_holder" placeholder="Enter Account Holder" tabindex="13">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="branch">Branch</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="branch" id="branch" placeholder="Enter Branch" tabindex="14">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Other info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="gst_no">GST Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="Enter GST Number" tabindex="15">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4 d-flex align-items-center">
                        <label for="msme_vendor" class="me-2">MSME Vendor <span class="text-danger">*</span></label>
                        <input type="checkbox" name="msme_vendor" id="msme_vendor" tabindex="16" style="margin-left:20px">
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div style="    display: flex;justify-content: space-between;">
        <button type="button" class="btn btn-primary" id="excel_upload">Excel Upload</button>
        <button type="button" class="btn btn-primary" id="submit_vendor_master">Submit</button>
    </div>
</div>