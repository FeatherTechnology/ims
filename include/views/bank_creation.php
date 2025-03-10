<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_bank"><span class="fa fa-plus"></span>&nbsp; Add Bank Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="bank_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                <table id="bank_creation_table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Bank Name</th>
                            <th>Account No</th>
                            <th>Account holder</th>
                            <th>Branch</th>
                            <th>Swift Code</th>
                            <th>IFSC Code</th>
                            <th>AD Code</th>
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
<div class="bank_creation_content" style="display: none;">
    <form id="bank_creation" name="bank_creation">
        <input type="hidden" id="bank_creation_id">
        <div class="card">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="card-header">
                    <div class="card-title">Bank Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="bank_id">Bank ID</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="bank_id" id="bank_id" value="" tabindex="1" disabled>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Enter Bank Name" value="" tabindex="2">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="branch">Branch</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="branch" id="branch" placeholder="Enter Branch" tabindex="3">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="account_type">Account Type</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="account_type" id="account_type" tabindex="4">
                                    <option value="">Select Account Type</option>
                                    <option value="1">Current Account</option>
                                    <option value="2">Savings Account</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="account_No">Account No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="account_No" id="account_No" placeholder="Enter Account No" value="" tabindex="5">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="account_holder">Account Holder</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="account_holder" id="account_holder" placeholder="Enter Account Holder" value="" tabindex="6">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="ifsc_code">IFSC Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="ifsc_code" id="ifsc_code" value="" placeholder="Enter IFSC Code" tabindex="7">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="ad_code">AD Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="ad_code" id="ad_code" value="" placeholder="Enter AD Code" tabindex="8">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="swift_code">Swift Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="swift_code" id="swift_code" placeholder="Enter Swift Code" value="" tabindex="9">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" id="submit_bank_excel" tabindex="10">Excel Upload</button>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" id="submit_bank_creation" tabindex="11">Submit</button>
            </div>
        </div>
    </form>
</div>