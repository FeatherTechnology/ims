<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_sample"><span class="fa fa-plus"></span>&nbsp; Add Sample Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card sample_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="sample_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th colspan="7" style="vertical-align: middle;">Stock Deatils</th>
                        <th colspan="9" style="vertical-align: middle;">Sample</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Part Code</th>
                        <th style="vertical-align: middle;">Part Des</th>
                        <th style="vertical-align: middle;">Storage Location</th>
                        <th style="vertical-align: middle;">Rack No</th>
                        <th style="vertical-align: middle;">Compartment No</th>
                        <th style="vertical-align: middle;">Palette Qty</th>
                        <th style="vertical-align: middle;">Date</th>
                        <th style="vertical-align: middle;">Product Type</th>
                        <th style="vertical-align: middle;">Packing Style</th>
                        <th style="vertical-align: middle;">No of MC's</th>
                        <th style="vertical-align: middle;">No of Packet / Block</th>
                        <th style="vertical-align: middle;">Total Qty</th>
                        <th style="vertical-align: middle;">Sample Qty</th>
                        <th style="vertical-align: middle;">Balance Qty</th>
                        <th style="vertical-align: middle;">Purpose</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="sample_form">
    <div class="sample_creation_content" style="display:none">
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
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="part_code">Part Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="part_code" id="part_code" placeholder="Part Code" tabindex="2" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="part_des">Part Des</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="part_des" id="part_des" placeholder="Part Des" tabindex="3" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="storage_location" id="storage_location" placeholder="Storage Location" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment_no">Compartment No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="palette_qty">Palette Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="palette_qty" id="palette_qty" placeholder="Palette Qty" tabindex="7" readonly>
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
                                <label for="date">Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="date" id="date" tabindex="8">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="product_type">Product Type</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="product_type" id="product_type" placeholder="Product Type" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packing_style">Packing Style</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packing_style" id="packing_style" placeholder="Packing Style" tabindex="10" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="no_of_mc">No of MC's</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="no_of_mc" id="no_of_mc" placeholder="No of MC's" tabindex="11" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packet_block">No of Packet / Block</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packet_block" id="packet_block" placeholder="No of Packet / Block" tabindex="12" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="total_qty">Total Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="total_qty" id="total_qty" placeholder="Total Qty" tabindex="13" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="sample_qty">Sample Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="sample_qty" id="sample_qty" placeholder="Sample Qty" tabindex="14" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="balance_qty">Balance Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="balance_qty" id="balance_qty" placeholder="Balance Qty" tabindex="15" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="purpose">Purpose</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Purpose" tabindex="16" readonly>
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