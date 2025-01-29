<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_complimentary"><span class="fa fa-plus"></span>&nbsp; Add Complimentary Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card complimentary_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="complimentary_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th colspan="8" style="vertical-align: middle;">Stock Deatils</th>
                        <th colspan="10" style="vertical-align: middle;">Sample</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Part Code</th>
                        <th style="vertical-align: middle;">Part Description</th>
                        <th style="vertical-align: middle;">Storage Location</th>
                        <th style="vertical-align: middle;">Rack No</th>
                        <th style="vertical-align: middle;">Compartment No</th>
                        <th style="vertical-align: middle;">Palette No</th>
                        <th style="vertical-align: middle;">Qty</th>
                        <th style="vertical-align: middle;">To Whom</th>
                        <th style="vertical-align: middle;">Purpose</th>
                        <th style="vertical-align: middle;">Date</th>
                        <th style="vertical-align: middle;">Product Type</th>
                        <th style="vertical-align: middle;">Packing Style</th>
                        <th style="vertical-align: middle;">No of MC's</th>
                        <th style="vertical-align: middle;">No of Packet / Block</th>
                        <th style="vertical-align: middle;">Total Qty</th>
                        <th style="vertical-align: middle;">Complimentary Qty</th>
                        <th style="vertical-align: middle;">Balance Qty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>28534M04TW001</td>
                        <td>TW001</td>
                        <td>VNMIEZPLNw/NcSoakedIQF8/121x10Kgs</td>
                        <td>SL-1</td>
                        <td>G</td>
                        <td>A</td>
                        <td>D</td>
                        <td>4230</td>
                        <td>Prabakaran</td>
                        <td>New Year celebration</td>
                        <td>2024-01-29</td>
                        <td>IQF</td>
                        <td>1 * 10Kgs</td>
                        <td>12</td>
                        <td>10</td>
                        <td>110</td>
                        <td>20</td>
                        <td>90</td>
                        <td class="icon-border_color"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="sample_form">
    <div class="complimentary_creation_content" style="display:none">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Stock Details</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="lot_no" id="lot_no" tabindex="1">
                                    <option value="">Select Lot No</option>
                                    <option>28534M04TW001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="part_code">Part Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="part_code" id="part_code" placeholder="Part Code" value="TW001" tabindex="2" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="part_des">Part Description</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="part_des" id="part_des" placeholder="Part Des" value="VNMIEZPLNw/NcSoakedIQF8/121x10Kgs" tabindex="3" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="storage_location" id="storage_location" placeholder="Storage Location" value="SL-1" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" value="G" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment_no">Compartment No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" value="A" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="palette_no">Palette No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="palette_no" id="palette_no" placeholder="Palette No" value="D" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="qty">Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" value="4230" tabindex="7" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Sample</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="to_whom">To Whom</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="to_whom" id="to_whom" placeholder="Enter To Whom" value="Prabakaran" tabindex="8">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="purpose">Purpose</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Enter Purpose" value="New Year celebration" tabindex="9">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="date">Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="date" value="2024-01-29" id="date" tabindex="8">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="product_type">Product Type</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="product_type" id="product_type" placeholder="Product Type" value="IQF" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packing_style">Packing Style</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packing_style" id="packing_style" placeholder="Packing Style" value="1 * 10Kgs" tabindex="10" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="no_of_mc">No of MC's</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="no_of_mc" id="no_of_mc" placeholder="No of MC's" value="12" tabindex="11" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packet_block">No of Packet / Block</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packet_block" id="packet_block" placeholder="No of Packet / Block" value="10" tabindex="12" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="total_qty">Total Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="total_qty" id="total_qty" placeholder="Total Qty" value="110" tabindex="13" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="complimentary_qty">Complimentary Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="complimentary_qty" id="complimentary_qty" placeholder="Complimentary Qty" value="20" tabindex="14">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="balance_qty">Balance Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="balance_qty" id="balance_qty" placeholder="Balance Qty" value="90" tabindex="15">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_sample">Print</button>
            <button type="button" class="btn btn-primary" id="submit_sample">Submit</button>
        </div>
    </div>
</form>