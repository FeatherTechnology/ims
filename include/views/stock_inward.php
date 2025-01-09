<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_stock_inward"><span class="fa fa-plus"></span>&nbsp; Add Stock Inward Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card stock_inward_table_content">
    <div class="card-body">
        <div class="col-12">
            <table id="stock_inward_create" class="table custom-table">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Lot No</th>
                        <th>Type</th>
                        <th>Indent ID</th>
                        <th>Indent Date</th>
                        <th>Production Date</th>
                        <th>Day Code</th>
                        <th>Prodn in Charge</th>
                        <th>Shift</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="stock_inward_creation_content" style="display: none;">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">General info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Enter Lot No" tabindex="1">
                                <option>Select Lot No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="type">Type</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Enter Type" tabindex="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="indent_id">Indent ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="indent_id" id="indent_id" placeholder="Enter Indent ID" tabindex="3">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="indent_date">Indent Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="indent_date" id="indent_date" placeholder="Enter Indent Date" tabindex="4">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="production_date">Production Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="production_date" id="production_date" placeholder="Enter Production Date" tabindex="5">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="day_code">Day Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="day_code" id="day_code" placeholder="Enter Day Code" tabindex="6">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="prodn_in_charge">Prodn in Charge</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="prodn_in_charge" id="prodn_in_charge" placeholder="Enter Prodn in Charge" tabindex="7">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Confirm Password">Shift</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="shift" id="shift" placeholder="Enter Shift" tabindex="8">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="col-12">
            <div class="card-header" id="stock_details_title">
                <div class="card-title">Stock Details <span class="required" style="font-size: 12px;">*Click To Expand</span></div>
            </div>
            <div class="card-body" style="display: none;" id="stock_details_body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="variety">Variety</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="variety" id="variety" placeholder="Enter Variety" tabindex="9">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="grade">Grade</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade" tabindex="10">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="freezing_type">Freezing Type</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="freezing_type" id="freezing_type" placeholder="Enter Freezing Type" tabindex="11">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="glaze" id="glaze" placeholder="Enter Glaze" tabindex="12">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="packing">Type Of Packing</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="packing" id="packing" placeholder="Enter Type of Packing" tabindex="13">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="pl_number">PL Number / Dummy</label>
                            <input type="text" class="form-control" name="pl_number" id="pl_number" placeholder="Enter PL Number" tabindex="14">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="mc_number">Number of MC's</label>
                            <input type="number" class="form-control" name="mc_number" placeholder="Enter Number of MC" id="mc_number" tabindex="15">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="loose_mc">Loose MC (in kg)</label>
                            <input type="number" class="form-control" name="loose_mc" id="loose_mc" placeholder="Enter Loose MC" tabindex="16">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="gross_weight">Gross Weight (kg)</label>
                            <input type="text" class="form-control" name="gross_weight" id="gross_weight" placeholder="Enter Gross Weight" tabindex="17">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="net_weight">Net Weight (kg)</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="net_weight" id="net_weight" placeholder="Enter Gross Weight" tabindex="18">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="order_status">Order Status</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="order_status" id="order_status" placeholder="Enter Order Status" tabindex="19">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="order_number">Order Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Enter Order Number" tabindex="20">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="seller_name">Seller Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="seller_name" id="seller_name" placeholder="Enter Seller Name" tabindex="21">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="handover_time">Handover Time</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="handover_time" id="handover_time" placeholder="Enter Handover Time" tabindex="22">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4"> </div>
                </div>
                <div class="row">
                    <div class="card-header">
                        <div class="card-title">Storage Details</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="storage_location" id="storage_location" placeholder="Enter Storage Location" tabindex="23">
                                <option>Select Storage Location</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="rack">Rack</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="rack" id="rack" placeholder="Enter Rack" tabindex="24">
                                <option>Select Rack</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="bay">Bay</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="bay" id="bay" placeholder="Enter Bay" tabindex="25">
                                <option>Select Bay</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="bin_No">Bin No</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="bin_No" id="bin_No" placeholder="Bin No" tabindex="26">
                                <option>Select Bin No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="receiving_time">Receiving Time</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="receiving_time" id="receiving_time" placeholder="Enter Receiving Time" tabindex="27">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-primary" id="submit_user_creation">Submit</button>
    </div>
</div>