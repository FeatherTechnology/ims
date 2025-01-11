<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_fg_lot"><span class="fa fa-plus"></span>&nbsp; Add FG Lot Wise</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="fg_lot_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <table id="fg_lot_list" class="table custom-table">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Lot Number</th>
                            <th>Type</th>
                            <th>Indent ID</th>
                            <th>Production Date</th>
                            <th>Product Incharge</th>
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
</div>
<div class="lot_creation_content" style="display:none">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">Gendral Info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="lot_number">Lot Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="lot_number" id="lot_number" placeholder="Enter Lot Number" tabindex="1">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="type">Type</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="type" id="type" placeholder="Enter Type" tabindex="2">
                                <option value="">Select Type</option>
                                <option value="">Fresh</option>
                                <option value="">Rework</option>
                                <option value="">Reglaze</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="indent_id">Indent ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="indent_id" id="indent_id" placeholder="Indent ID" tabindex="3" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="indent_date">Indent Date</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="indent_date" id="indent_date" placeholder="Indent Date" tabindex="4" readonly>
                        </div>
                    </div>
                   
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="production_date">Production Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="production_date" id="production_date"  tabindex="5">
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
                            <select type="text" class="form-control" name="grade" id="grade"  tabindex="10">
                                <option value="">Select Grade</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="freezing_type">Freezing Type</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="freezing_type" id="freezing_type"  tabindex="11">
                                <option value="">Select Freezing Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="glaze" id="glaze"  tabindex="12">
                                <option value="">Select Glaze</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="packing">Type Of Packing</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="packing" id="packing" placeholder="Enter Packing Type" tabindex="13">
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
                            <input type="number" class="form-control" name="mc_number"  placeholder="Enter Number of MC" id="mc_number"  tabindex="15">
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
                            <select type="text" class="form-control" name="order_status" id="order_status"  tabindex="19">
                                <option value="">Select Order Status</option>
                                <option value="">Against Order</option>
                                <option value="">Non Order</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="order_number">Order Number</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="order_number" id="order_number"  tabindex="20">
                                <option value="">Select Order Number</option>
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
                            <label for="stk_hnd_ovr_time">Stock Handover Time</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="stk_hnd_ovr_time" id="stk_hnd_ovr_time" placeholder="Enter Handover Time" tabindex="22">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12 text-right">
            <button type="button" class="btn btn-primary" id="submit_fg_lot">Submit</button>
        </div>
    </div>
</div>