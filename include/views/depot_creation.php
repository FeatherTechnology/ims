<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_depot"><span class="fa fa-plus"></span>&nbsp; Add Depot Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="depot_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                <table id="depot_create" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Depot ID</th>
                            <th>Depot Name</th>
                            <th>Address</th>
                            <th>Address 1</th>
                            <th>Place</th>
                            <th>Pin Code</th>
                            <th>State</th>
                            <th>Contact Number</th>
                            <th>Email ID</th>
                            <th>GST No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>D100</td>
                            <td>The Waterbase</td>
                            <td>Survey No 39/1, 40</td>
                            <td>Ananthapuram Village</td>
                            <td>Nellore</td>
                            <td>524344</td>
                            <td>Andhra Pradesh</td>
                            <td>98402 55498</td>
                            <td></td>
                            <td>37AABCT0601L1ZJ</td>
                            <td class="icon-border_color"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="depot_creation_content" style="display: none;">
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Depot Info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="depot_id">Depot ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="depot_id" id="depot_id" placeholder="Depot ID" value="D100" tabindex="1" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="depot_name">Depot Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="depot_name" id="depot_name" placeholder="Enter Depot Name" value="The Waterbase" tabindex="2">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="address">Address</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" value="Survey No 39/1, 40" tabindex="3">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="address_1">Address 1</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="address_1" id="address_1" placeholder="Enter Address 1" value="Ananthapuram Village" tabindex="4">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="place">Place</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="place" id="place" placeholder="Enter Place" value="Nellore" tabindex="5">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="pin_code">Pin Code</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" name="pin_code" id="pin_code" placeholder="Enter Pin Code" value="524344" tabindex="6" onKeyPress="if(this.value.length==6) return false;">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="state">State</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="state" id="state" tabindex="7">
                                <option>Select State</option>
                                <option selected>Andhra Pradesh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number" value="9840255498" tabindex="8">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="Email">E-Mail ID</label><span class="text-danger">*</span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-Mail ID" tabindex="9">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="gst_no">GST No</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="gst_no" id="gst_no" placeholder="Enter GST No" value="37AABCT0601L1ZJ" tabindex="19">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" id="depot_creation">Excel Upload</button>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" id="depot_creation">Submit</button>
        </div>
    </div>
</div>