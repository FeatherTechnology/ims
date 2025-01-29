<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_lab_stock_issue" value="priya"><span class="fa fa-plus"></span>&nbsp; Add Lab Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn_lab" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card lab_stock_issue_table">
    <div class="card-body">
        <div class="col-12" style="overflow-x: auto;">
            <table id="lab_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th colspan="8" style="vertical-align: middle;">Stock Deatils</th>
                        <th colspan="6" style="vertical-align: middle;">Lab Issue</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Part Code</th>
                        <th style="vertical-align: middle;">Part Description</th>
                        <th style="vertical-align: middle;">Storage Location</th>
                        <th style="vertical-align: middle;">Rack No</th>
                        <th style="vertical-align: middle;">Compartment</th>
                        <th style="vertical-align: middle;">Palette</th>
                        <th style="vertical-align: middle;">Qty</th>
                        <th style="vertical-align: middle;">Type</th>
                        <th style="vertical-align: middle;">NRGP</th>
                        <th style="vertical-align: middle;">Issue Date</th>
                        <th style="vertical-align: middle;">Issue Time</th>
                        <th style="vertical-align: middle;">Issue Qty</th>
                        <th style="vertical-align: middle;">Balance Qty</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2981AM27TW001</td>
                        <td>TW001</td>
                        <td>VNMIEZPLNW/NcSoakedIQF8/121x10Kgs</td>
                        <td>SL-1</td>
                        <td>A</td>
                        <td>G</td>
                        <td>C</td>
                        <td>10</td>
                        <td>External Lab</td>
                        <td>120 / 24-25</td>
                        <td>2025-01-29</td>
                        <td>16:30:00</td>
                        <td>5</td>
                        <td>5</td>
                        <td class="icon-border_color"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="lab_creation_form">
    <div class="lab_stock_issue_creation_content" style="display: none;">
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
                                <select type="text" class="form-control" name="lot_no" id="lot_no" tabindex="25">
                                    <option>Select Lot No</option>
                                    <option selected>2981AM27TW001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="part_code">Part Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="part_code" id="part_code" placeholder="Part Code" value="TW001" tabindex="26" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="part_des">Part Description</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="part_des" id="part_des" placeholder="Part Des" value="VNMIEZPLNW/NcSoakedIQF8/121x10Kgs" tabindex="26" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_loc">Storage Location</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="storage_loc" id="storage_loc" placeholder="Storage Location" value="SL-1" tabindex="27" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" value="A" tabindex="28" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment_no">Compartment No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" value="G" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment_no">Palette</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" value="C" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="qty">Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" tabindex="6" value="10" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Lab Issue</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="type">Type</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="type" id="type" tabindex="25">
                                    <option>Select Type</option>
                                    <option selected>External Lab</option>
                                    <option>Internal Lab</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="lab_name">Lab Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="lab_name" id="lab_name" placeholder="Lab Name" tabindex="31" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="nrgp">NRGP</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="nrgp" id="nrgp" placeholder="Enter NRGP" value="120 / 24-25" tabindex="33">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="issue_date">Issue Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Enter Issue Date" value="2025-01-29" tabindex="32">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="issue_qty" id="issue_qty" placeholder="Enter Issue Qty" value="5" tabindex="33">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" value="16" tabindex="34" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" value="30" tabindex="35" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" value="00" tabindex="35" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="ampm" name="ampm" tabindex="36" style="height:34.3px;" disabled>
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="balance_qty">Balance Qty</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="balance_qty" id="balance_qty" placeholder="Balance Qty" value="5" tabindex="37" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="Print_lab_stock_issue">Print</button>
            <button type="button" class="btn btn-primary" id="submit_lab_stock_issue">Submit</button>
        </div>
    </div>
</form>