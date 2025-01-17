<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_company"><span class="fa fa-plus"></span>&nbsp; Add Company Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card company_table_content">
    <div class="card-body">
        <div class="col-12">
            <table id="company_create" class="table custom-table">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Company Name</th>
                        <th>Place</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Mobile Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row gutters company_creation_content " style="display: none;">
    <div class="col-12">
        <div class="card wow">
            <div class="card-header">
                <div class="card-title">Company Details</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Company Name">Company Name</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" tabindex="1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="CIN NO">CIN No</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="cin_no" id="cin_no" placeholder="Enter CIN No" tabindex="2">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="floor_no">Floor / No</label>
                                    <input type="text" class="form-control" name="floor_no" id="floor_no" placeholder="Enter Floor No" tabindex="3">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" name="street" id="street" placeholder="Enter Street Name" tabindex="4">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="place">Place</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="place" id="place" placeholder="Enter Place" tabindex="5">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="State">State</label><span class="text-danger">*</span>
                                    <select type="text" class="form-control" name="state" id="state" placeholder="Enter state" tabindex="6">
                                        <option>Select State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="country">Country</label><span class="text-danger">*</span>
                                    <select type="text" class="form-control" name="country" id="country" placeholder="Enter country" tabindex="7">
                                        <option>Select Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Phone No">Phone No</label><span class="text-danger">*</span>
                                    <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone No" tabindex="8">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Email">E-Mail Id</label><span class="text-danger">*</span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail Id" tabindex="9">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Fax No">Fax No</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="fax_no" id="fax_no" placeholder="Enter Fax No" tabindex="10">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Website">Website</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="website" id="website" placeholder="Enter Website" tabindex="11">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="gu_pic">Company Logo</label><span class="text-danger">*</span><br>
                                    <img id='gur_imgshow' class="img_show" src='img/avatar.png' />
                                    <input type="file" class="form-control" style="margin-top: 7px;" name="gu_pic" id="gu_pic" tabindex="12">
                                    <input type="hidden" id="gur_pic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card wow">
            <div class="card-header">
                <div class="card-title">Statutory Details</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="GST No">GST No</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="Enter GST No" tabindex="13">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ie_code">IE Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="ie_code" id="ie_code" placeholder="Enter IE Code" tabindex="14">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card wow">
            <div class="card-header">
                <div class="card-title">Other info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Login Shorter Name">Login Shorter Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="login_shorter Name" id="login_shorter_Name" placeholder="Enter Login Shorter Name" tabindex="15">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="FY">FY</label><span class="text-danger">*</span>
                            <select type="number" class="form-control" name="fy" id="fy" tabindex="16">
                                <option>Select FY</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="submit_company_creation">Submit</button>
        </div>
    </div>
</div>