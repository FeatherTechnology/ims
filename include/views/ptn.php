<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_ptn"><span class="fa fa-plus"></span>&nbsp; Add PTN</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="ptn_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-12" style="overflow-x:auto;">
                <table id="fg_lot_list" class="table table-bordered">
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
                            <th style="vertical-align: middle;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TWL-2162</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>01-Jul-24</td>
                            <td>4G01</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>EZPL</td>
                            <td>21 / 25</td>
                            <td>Nw / Nc</td>
                            <td>8 x 2lbs</td>
                            <td>Dummy</td>
                            <td>117</td>
                            <td>0</td>
                            <td>855.336</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td class="icon-border_color"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TWL-2163</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>01-Jul-24</td>
                            <td>4G01</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>EZPL</td>
                            <td>31 / 40</td>
                            <td>Nw / Nc</td>
                            <td>10 x 2lbs</td>
                            <td>TWL/PRO/027/2024-25</td>
                            <td>127</td>
                            <td>0</td>
                            <td>1161.332</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td class="icon-border_color"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<form id="ptnform">
    <div class="ptn_creation_content" style="display:none">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">General Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="type">Type</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="type" id="type" placeholder="Enter Type" tabindex="1">
                                    <option value="">Select Type</option>
                                    <option value="">Fresh</option>
                                    <option value="">Rework</option>
                                    <option value="">Reglaze</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="indent_id">MTN ID</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="indent_id" id="indent_id" placeholder="MTN ID" tabindex="2" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="indent_date">MTN Date</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="indent_date" id="indent_date" placeholder="MTN Date" tabindex="3" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="lot_number">Lot No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="lot_number" id="lot_number" placeholder="Lot No" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="production_date">Production Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="production_date" id="production_date" tabindex="5">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="day_code">Day Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="day_code" id="day_code" placeholder="Enter Day Code" tabindex="6">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="prodn_in_charge">Prodn In Charge</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="prodn_in_charge" id="prodn_in_charge" tabindex="7">
                                    <option value="">Select Prodn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="shift">Shift</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="shift" id="shift" tabindex="8">
                                    <option value="">Select Shift</option>
                                    <option value="">Day</option>
                                    <option value="">Night</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Stock Details</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="variety">Variety</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="variety" id="variety" tabindex="9">
                                    <option value="">Select Variety</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="grade">Grade</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="grade" id="grade" tabindex="10">
                                    <option value="">Select Grade</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="freezing_type">Freezing Type</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="freezing_type" id="freezing_type" tabindex="11">
                                    <option value="">Select Freezing Type</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="glaze" id="glaze" tabindex="12">
                                    <option value="">Select Glaze</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packing">Type of Packing</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packing" id="packing" placeholder="Enter Packing Type" tabindex="13">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pl_number">PL No / Dummy</label>
                                <select type="text" class="form-control" name="pl_number" id="pl_number" tabindex="11">
                                    <option value="">Select PL No</option>
                                </select>
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
                                <label for="net_weight">Net Weight (kg)</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="net_weight" id="net_weight" placeholder="Enter Gross Weight" tabindex="18">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="order_status">Order Status</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="order_status" id="order_status" tabindex="19">
                                    <option value="">Select Order Status</option>
                                    <option value="">Against Order</option>
                                    <option value="">Non Order</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="order_number">Order No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="order_number" id="order_number" tabindex="20">
                                    <option value="">Select Order No</option>
                                </select>
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
                                <label for="hours">Stock Handover Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="22" readonly>
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

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" id="print_ptn">Print</button>
                <button type="button" class="btn btn-primary" id="submit_ptn">Submit</button>
            </div>
        </div>
    </div>
</form>