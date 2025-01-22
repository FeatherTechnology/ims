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
                        <th>MTN ID</th>
                        <th>MTN Date</th>
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
<form id="stock_inward_form">
<div class="stock_inward_creation_content" id="" style="display: none;">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">General Info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Enter Lot No" tabindex="1">
                                <option>Select Lot No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="type">Type</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Type" tabindex="2" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="mtn_id">MTN ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="mtn_id" id="mtn_id" placeholder="MTN ID" tabindex="3" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="mtn_date">MTN Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="mtn_date" id="mtn_date" placeholder="MTN Date" tabindex="4" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="production_date">Production Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="production_date" id="production_date" placeholder="Production Date" tabindex="5" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="day_code">Day Code</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="day_code" id="day_code" placeholder="Day Code" tabindex="6" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="prodn_in_charge">Prodn in Charge</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="prodn_in_charge" id="prodn_in_charge" placeholder="Prodn in Charge" tabindex="7" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="Confirm Password">Shift</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="shift" id="shift" placeholder="Shift" tabindex="8" readonly>
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
                            <input type="text" class="form-control" name="variety" id="variety" placeholder="Variety" tabindex="9" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="grade">Grade</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade" tabindex="10" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="freezing_type">Freezing Type</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="freezing_type" id="freezing_type" placeholder="Freezing Type" tabindex="11" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="glaze" id="glaze" placeholder="Glaze" tabindex="12" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="packing">Type of Packing</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="packing" id="packing" placeholder="Type of Packing" tabindex="13" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="pl_number">PL No / Dummy</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="pl_number" id="pl_number" placeholder="PL No" tabindex="14" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="mc_number">Number of MC's</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" name="mc_number" placeholder="Number of MC" id="mc_number" tabindex="15" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="loose_mc">Loose MC (in kg)</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" name="loose_mc" id="loose_mc" placeholder="Loose MC" tabindex="16" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="net_weight">Net Weight (kg)</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="net_weight" id="net_weight" placeholder="Gross Weight" tabindex="18" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="order_status">Order Status</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="order_status" id="order_status" placeholder="Order Status" tabindex="19" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="order_number">Order No</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Order No" tabindex="20" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="seller_name">Seller Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="seller_name" id="seller_name" placeholder="Seller Name" tabindex="21" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="handover_time">Handover Time</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="handover_time" id="handover_time" placeholder="Handover Time" tabindex="22" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="col-12">
            <div class="card-body">
                <div class="row">
                    <div class="card-header">
                        <div class="card-title">Storage Details </div>
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
                            <label for="compartment">Compartment</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="compartment" id="compartment" placeholder="Enter Compartment" tabindex="25">
                                <option>Select Compartment</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="palette">Palette</label><span class="text-danger">*</span>
                            <select type="number" class="form-control" name="palette" id="palette"  tabindex="26">
                                <option>Select Palette</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="hours">Receiving Time</label><span class="text-danger">*</span>
                            <div class="form-row">
                                <div class="col">
                                    <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="22" readonly>
                                </div>
                                <div class="col-auto">
                                    <span>:</span>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="23" readonly>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="ampm" name="ampm" tabindex="24" style="height:34.6px; width: auto;" disabled>
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
    <button type="button" class="btn btn-primary" id="print_stock_inward">Print</button>
        <button type="button" class="btn btn-primary" id="submit_stock_inward">Submit</button>
    </div>
</div>
</form>