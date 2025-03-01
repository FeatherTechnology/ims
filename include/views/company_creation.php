<div class="text-right">
    <button type="button" class="btn btn-primary addcompanyBtn" id="add_company"><span class="fa fa-plus"></span>&nbsp; Add Company Creation</button>
    <button type="button" class="btn btn-primary backBtn" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card company_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="company_creation_table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Company Name</th>
                        <th>Floor No</th>
                        <th>Street</th>
                        <th>Place</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Phone No</th>
                        <th>Email ID</th>
                        <th>Fax No</th>
                        <th>Website</th>
                        <th>GST No</th>
                        <th>IE Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="company_creation_content" style="display:none;">
    <form id="company_creation" name="company_creation">
        <input type="hidden" id="company_id">
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
                                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" tabindex="1" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="CIN NO">CIN No</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="cin_no" id="cin_no" placeholder="CIN No" tabindex="2">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="floor_no">Floor / No</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="floor_no" id="floor_no" placeholder="Enter Floor No" tabindex="3" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="street">Street</label><span class="text-danger">*</span>    
                                        <input type="text" class="form-control" name="street" id="street" placeholder="Enter Street Name" tabindex="4" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="place">Place</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="place" id="place" placeholder="Enter Place" tabindex="5" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="State">State</label><span class="text-danger">*</span>
                                        <select type="text" class="form-control" name="state" id="state" tabindex="6">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="country">Country</label><span class="text-danger">*</span>
                                        <select type="text" class="form-control" name="country" id="country" tabindex="7">
                                            <option value="">Select Country</option>
                                            <option>India</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Phone No">Phone No</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone No" onKeyPress="if(this.value.length==10) return false;" tabindex="8" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Email">E-Mail ID</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail ID" tabindex="9" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Fax No">Fax No</label>
                                        <input type="text" class="form-control" name="fax_no" id="fax_no" placeholder="Enter Fax No" tabindex="10" value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Website">Website</label>
                                        <input type="text" class="form-control" name="website" id="website" placeholder="Enter Website" tabindex="11" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="company_logo">Company Logo</label><br>
                                        <img id='imgshow' class="img_show" src='uploads/company_creation/' />
                                        <input type="file" class="form-control" style="margin-top: 7px;" name="company_logo" id="company_logo" tabindex="12">
                                        <input type="hidden" id="company_logo_edit">
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
                                <label for="GST No">GST No</label>
                                <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="Enter GST No" tabindex="13" value="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="ie_code">IE Code</label>
                                <input type="text" class="form-control" name="ie_code" id="ie_code" placeholder="Enter IE Code" tabindex="14" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card wow">
                <div class="card-header">
                    <div class="card-title">Other Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Login Shorter Name">Login Shorter Name</label>
                                <input type="text" class="form-control" name="login_shorter_name" id="login_shorter_name" placeholder="" tabindex="15">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="year">Financial Year</label>
                                <select type="text" class="form-control" name="year" id="year" tabindex="16">
                                    <option value="">Select Year</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="button" class="btn btn-primary" id="submit_company_creation" tabindex="17">Submit</button>
            </div>
        </div>
    </form>
</div>