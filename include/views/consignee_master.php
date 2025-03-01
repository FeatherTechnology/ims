<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_consignee"><span class="fa fa-plus"></span>&nbsp; Add Consignee Master</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="consignee_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                <table id="consignee_creation_table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">S.NO</th>
                            <th colspan="9">Consignee Info</th>
                            <th colspan="3">Agent Info</th>
                            <th colspan="7">Bank Info</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th>Consignee Name</th>
                            <th>Address</th>
                            <th>Address 1</th>
                            <th>Place</th>
                            <th>Pincode</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Email ID</th>
                            <th>Mobile Number</th>
                            <th>Agent Name</th>
                            <th>Mobile Number </th>
                            <th>Email ID</th>
                            <th>Bank Name</th>
                            <th>Account No</th>
                            <th>Account holder</th>
                            <th>Branch</th>
                            <th>Swift Code </th>
                            <th>IFSC code</th>
                            <th>GST No</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="consignee_creation_content" style="display: none;">
    <form id="consignee_creation" name="consignee_creation">
        <input type="hidden" id="consignee_creation_id">
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">General Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                
                                <label for="consignee_code">Consignee Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee_code" id="consignee_code" placeholder="Consignee Code" tabindex="1" readonly value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee_name">Consignee Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee_name" id="consignee_name" placeholder="Enter Consignee Name" tabindex="2" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address">Address</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" tabindex="3" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address_1">Address 1</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address_1" id="address_1" placeholder="Address 1" tabindex="4">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="place">Place</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="place" id="place" placeholder="Enter Place " tabindex="5" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pin_code">Pin Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="pin_code" id="pin_code" placeholder="Enter Pin Code " tabindex="6" onKeyPress="if(this.value.length==6) return false;" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="state">State</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="state" id="state" tabindex="7">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="country">Country</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="country" id="country" tabindex="8">
                                    <option value="">Select Country</option>
                                    <option>India</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="Email">E-Mail ID</label><span class="text-danger">*</span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail ID" tabindex="9" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mobile_number">Mobile Number</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number" onKeyPress="if(this.value.length==10) return false;" tabindex="10" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">Agent Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="agent_name">Agent Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="agent_name" id="agent_name" placeholder="Enter Agent Name" tabindex="11" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="Email">E-Mail ID</label><span class="text-danger">*</span>
                                <input type="email" class="form-control" name="email" id="email_agent" placeholder="Enter E-Mail ID" tabindex="12" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mobile_number_agent">Mobile Number</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="mobile_number_agent" id="mobile_number_agent" placeholder="Enter Mobile Number" onKeyPress="if(this.value.length==10) return false;" tabindex="13" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">Bank Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label><span class="text-danger">*</span>
                                <input type="hidden" id="bank_name_edit">
                                <select type="text" class="form-control" name="bank_name" id="bank_name" tabindex="14">
                                    <option value="">Select Bank Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="account_no">Account Number</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="account_no" id="account_no" placeholder="Enter Account Number" tabindex="15" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="account_holder">Account Holder</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="account_holder" id="account_holder" placeholder="Enter Account Holder" tabindex="16" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="branch">Branch</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="branch" id="branch" placeholder="Enter Branch" tabindex="17" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="swift_code">Swift Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="swift_code" id="swift_code" placeholder="Enter Swift Code" tabindex="18" value="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="ifsc_code">IFSC Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="ifsc_code" id="ifsc_code" placeholder="Enter IFSC Code" tabindex="19" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">Other Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="gst_no">GST No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="Enter GST No" tabindex="19" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" id="excel_consignee_creation">Excel Upload</button>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" id="submit_consignee_creation">Submit</button>
            </div>
        </div>
    </form>
</div>