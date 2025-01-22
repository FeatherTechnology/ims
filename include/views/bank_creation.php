<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_bank"><span class="fa fa-plus"></span>&nbsp; Add Bank Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="bank_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <table id="bank_create" class="table custom-table">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Bank ID</th>
                            <th>Bank Name</th>
                            <th>Branch</th>
                            <th>Account Type</th>
                            <th>Account No</th>
                            <th>IFSC Code</th>
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
                            <input type="text" class="form-control" name="bank_id" id="bank_id" placeholder="Bank ID" tabindex="1" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="bank_name">Bank Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Enter Bank Name" tabindex="2">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="branch">Branch</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="branch" id="branch" tabindex="3">
                                <option>Select Branch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="account_type">Account Type</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="account_type" id="account_type" tabindex="4">
                                <option>Select Account Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="account_No">Account No</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="account_No" id="account_No" placeholder="Enter Account No" tabindex="5">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="ifsc_code">IFSC Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="ifsc_code" id="ifsc_code" placeholder="Enter IFSC Code" tabindex="6">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="ad_code">AD Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="ad_code" id="ad_code" placeholder="Enter AD Code" tabindex="7">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="Swift_code">Swift Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="Swift_code" id="Swift_code" placeholder="Enter Swift Code" tabindex="8">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" id="submit_user_creation">Excel Upload</button>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" id="submit_user_creation">Submit</button>
        </div>
    </div>
</div>