<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_stock_inward"><span class="fa fa-plus"></span>&nbsp; Add Stock Inward Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card stock_inward_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="stock_inward_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th style="vertical-align: middle;">S.NO</th>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Type</th>
                        <th style="vertical-align: middle;">MTN ID</th>
                        <th style="vertical-align: middle;">MTN Date</th>
                        <th style="vertical-align: middle;">Production Date</th>
                        <th style="vertical-align: middle;">Day Code</th>
                        <th style="vertical-align: middle;">Prodn Incharge</th>
                        <th style="vertical-align: middle;">Shift</th>
                        <th style="vertical-align: middle;">Variety</th>
                        <th style="vertical-align: middle;">Grade</th>
                        <th style="vertical-align: middle;">Glaze</th>
                        <th style="vertical-align: middle;">Packing Style</th>
                        <th style="vertical-align: middle;">PL No / Dummy</th>
                        <th style="vertical-align: middle;">No of MC's</th>
                        <th style="vertical-align: middle;">Loose MC [In Kgs]</th>
                        <th style="vertical-align: middle;">Net Weight</th>
                        <th style="vertical-align: middle;">Order Status</th>
                        <th style="vertical-align: middle;">Order No</th>
                        <th style="vertical-align: middle;">Seller Name</th>
                        <th style="vertical-align: middle;">Stock Handover Time</th>
                        <th style="vertical-align: middle;">Storage Location</th>
                        <th style="vertical-align: middle;">Rack</th>
                        <th style="vertical-align: middle;">Compartment</th>
                        <th style="vertical-align: middle;">Palette</th>
                        <th style="vertical-align: middle;">Receiving Time</th>
                        <th style="vertical-align: middle;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>28534M04TW001</td>
                        <td>Fresh</td>
                        <td></td>
                        <td></td>
                        <td>04-12-2024</td>
                        <td>4M04</td>
                        <td>Prabakaran</td>
                        <td>Day</td>
                        <td>HLSO</td>
                        <td>41/50</td>
                        <td>Nw/Nc</td>
                        <td>6*1.8Kgs</td>
                        <td>TWL/PRO/114/2024-25</td>
                        <td>216</td>
                        <td>0</td>
                        <td>2338.2</td>
                        <td>Yes</td>
                        <td>114</td>
                        <td>TAIKA SEAFOOD CORPORATION</td>
                        <td>11:30:35</td>
                        <td>SL-1</td>
                        <td>A</td>
                        <td>G</td>
                        <td>A</td>
                        <td>11:40:00</td>
                        <td class="icon-border_color"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2897AM12TW001</td>
                        <td>Fresh</td>
                        <td></td>
                        <td></td>
                        <td>12-12-2024</td>
                        <td>AM12</td>
                        <td>Prabakaran</td>
                        <td>Day</td>
                        <td>HLSO</td>
                        <td>41/50</td>
                        <td>Nw/Nc</td>
                        <td>6*1.8Kgs</td>
                        <td>TWL/PRO/114/2024-25</td>
                        <td>48</td>
                        <td>0</td>
                        <td>527.4</td>
                        <td>Yes</td>
                        <td>114</td>
                        <td>TAIKA SEAFOOD CORPORATION</td>
                        <td>14:30:45</td>
                        <td>SL-1</td>
                        <td>A</td>
                        <td>G</td>
                        <td>B</td>
                        <td>14:45:00</td>
                        <td class="icon-border_color"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="stock_issue_form">
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
                                    <option selected>28534M04TW001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="type">Type</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="Fresh" tabindex="2" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mtn_id">MTN ID</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="mtn_id" id="mtn_id" placeholder="" tabindex="3" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mtn_date">MTN Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="mtn_date" id="mtn_date" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="production_date">Production Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="production_date" id="production_date" placeholder="Production Date" value="2025-12-04" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="day_code">Day Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="day_code" id="day_code" placeholder="Day Code" value="4M04" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="prodn_in_charge">Prodn in Charge</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="prodn_in_charge" id="prodn_in_charge" placeholder="Prodn in Charge" value="Prabakaran" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="Confirm Password">Shift</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="shift" id="shift" placeholder="Shift" value="Day" tabindex="8" readonly>
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
                                <input type="text" class="form-control" name="variety" id="variety" placeholder="Variety" value="HLSO" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="grade">Grade</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade" value="41/50" tabindex="10" readonly>
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
                                <input type="text" class="form-control" name="glaze" id="glaze" placeholder="Glaze" value="Nw/Nc" tabindex="12" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packing">Type of Packing</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packing" id="packing" placeholder="Type of Packing" value="6*1.8Kgs" tabindex="13" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pl_number">PL No / Dummy</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="pl_number" id="pl_number" placeholder="PL No" value="TWL/PRO/114/2024-25" tabindex="14" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mc_number">Number of MC's</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="mc_number" placeholder="Number of MC" id="mc_number" value="216" tabindex="15" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="loose_mc">Loose MC (in kg)</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="loose_mc" id="loose_mc" placeholder="Loose MC" value="0" tabindex="16" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="net_weight">Net Weight (kg)</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="net_weight" id="net_weight" placeholder="Gross Weight" value="2338.2" tabindex="17" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="order_status">Order Status</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="order_status" id="order_status" placeholder="Order Status" value="Yes" tabindex="18" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="order_number">Order No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Order No" value="114" tabindex="19" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="seller_name">Seller Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="seller_name" id="seller_name" placeholder="Seller Name" value="TAIKA SEAFOOD CORPORATION" tabindex="20" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="handover_time">Handover Time</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="handover_time" id="handover_time" placeholder="Handover Time" value="11:30:35" tabindex="21" readonly>
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
                                <select type="text" class="form-control" name="storage_location" id="storage_location" placeholder="Enter Storage Location" tabindex="22">
                                    <option>Select Storage Location</option>
                                    <option selected>SL-1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack">Rack</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="rack" id="rack" placeholder="Enter Rack" tabindex="23">
                                    <option>Select Rack</option>
                                    <option selected>A</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment">Compartment</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="compartment" id="compartment" placeholder="Enter Compartment" tabindex="24">
                                    <option>Select Compartment</option>
                                    <option selected>G</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="palette">Palette</label><span class="text-danger">*</span>
                                <select type="number" class="form-control" name="palette" id="palette" tabindex="25">
                                    <option>Select Palette</option>
                                    <option selected>A</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hours">Receiving Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" value="11" tabindex="26" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" value="40" tabindex="27" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="seconds" name="seconds" min="0" max="59" placeholder="MM" value="00" tabindex="28" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="ampm" name="ampm" tabindex="29" style="height:34.6px; width: auto;" disabled>
                                            <option value="AM" selected>AM</option>
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
            <button type="button" class="btn btn-primary" id="print_stock_inward" tabindex="30">Print</button>
            <button type="button" class="btn btn-primary" id="submit_stock_inward" tabindex="31">Submit</button>
        </div>
    </div>
</form>