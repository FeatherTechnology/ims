<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_company"><span class="fa fa-plus"></span>&nbsp; Add Company Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card company_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="company_create" class="table table-bordered">
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
                    <tr>
                        <td>1</td>
                        <td>The Waterbase</td>
                        <td>#37</td>
                        <td>Montieth Road</td>
                        <td>Chennai</td>
                        <td>Tamil Nadu</td>
                        <td>India</td>
                        <td>044 45661700</td>
                        <td>info@waterbaseindia.com</td>
                        <td>4445661799</td>
                        <td>www.waterbaseindia.com</td>
                        <td>33AABCT0601L1ZJ</td>
                        <td>0588161772</td>
                        <td class="icon-border_color"></td>
                    </tr>
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
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" tabindex="1" value="The Waterbase">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="CIN NO">CIN No</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="cin_no" id="cin_no" placeholder="CIN No" tabindex="2" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="floor_no">Floor / No</label>
                                    <input type="text" class="form-control" name="floor_no" id="floor_no" placeholder="Enter Floor No" tabindex="3" value="#37">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" name="street" id="street" placeholder="Enter Street Name" tabindex="4" value="Montieth Road
">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="place">Place</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="place" id="place" placeholder="Enter Place" tabindex="5" value="Chennai ">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="State">State</label><span class="text-danger">*</span>
                                    <select type="text" class="form-control" name="state" id="state" placeholder="Enter state" tabindex="6">
                                        <option>Select State</option>
                                        <option selected>Tamil Nadu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="country">Country</label><span class="text-danger">*</span>
                                    <select type="text" class="form-control" name="country" id="country" placeholder="Enter country" tabindex="7">
                                        <option>Select Country</option>
                                        <option selected>India</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Phone No">Phone No</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone No" tabindex="8" value="044 45661700">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Email">E-Mail ID</label><span class="text-danger">*</span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail ID" tabindex="9" value="info@waterbaseindia.com">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Fax No">Fax No</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="fax_no" id="fax_no" placeholder="Enter Fax No" tabindex="10" value="4445661799">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Website">Website</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="website" id="website" placeholder="Enter Website" tabindex="11" value="www.waterbaseindia.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="gu_pic">Company Logo</label><span class="text-danger">*</span><br>
                                    <img id='gur_imgshow' class="img_show" src='img/The-Waterbase-Logo.png' />
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
                            <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="Enter GST No" tabindex="13" value="33AABCT0601L1ZJ">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ie_code">IE Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="ie_code" id="ie_code" placeholder="Enter IE Code" tabindex="14" value="0588161772">
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
                            <label for="Login Shorter Name">Login Shorter Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="login_shorter Name" id="login_shorter_Name" placeholder="Login Shorter Name" tabindex="15" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="FY">FY</label><span class="text-danger">*</span>
                            <select type="number" class="form-control" name="fy" id="fy" tabindex="16" readonly>
                                <option>Select FY</option>
                                <option selected>FY</option>
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