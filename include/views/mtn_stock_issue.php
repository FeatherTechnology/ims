<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_mtn_stock_issue"><span class="fa fa-plus"></span>&nbsp; Add MTN Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn_mtn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br> 
<div class="card mtn_stock_issue_table">
    <div class="card-body">
        <div class="col-12">
            <table id="mtn_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th colspan="5" style="vertical-align: middle;">Production Info</th>
                        <th colspan="4" style="vertical-align: middle;">Stock Issue</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">MTN ID</th>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Storage Location</th>
                        <th style="vertical-align: middle;">Palette</th>
                        <th style="vertical-align: middle;">Qty</th>
                        <th style="vertical-align: middle;">Full</th>
                        <th style="vertical-align: middle;">Issue Qty</th>
                        <th style="vertical-align: middle;">Balance Qty</th>
                        <th style="vertical-align: middle;">Issue Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2981AM27</td>
                        <td>2981AM27TW001</td>
                        <td>SL-1</td>
                        <td>SL-1_A_G_C</td>
                        <td>264</td>
                        <td>Tick</td>
                        <td>264</td>
                        <td>0</td>
                        <td>16:30:00</td>
                        <td class="icon-border_color"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="mtn_creation_form">
    <div class="mtn_stock_issue_creation_content" style="display:none;">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Production Indent Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="indent_id">MTN ID</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="indent_id" id="indent_id" placeholder="Enter Indent ID" tabindex="1">
                                    <option>Select MTN ID</option>
                                    <option>2981AM27</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Lot No" value="2981AM27TW001" tabindex="2" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_loc">Storage Location</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="storage_loc" id="storage_loc" placeholder="Storage Location" value="SL-1" tabindex="3" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="platte_no">Palette No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="palette_no" id="platte_no" placeholder="Palette No" value="SL-1_A_G_C" tabindex="17" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="qty">Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" value="264" tabindex="6" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Stock Issue</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1">
                            <div class="form-group" style="display:flex;">
                                <input type="checkbox" value="">
                                <label class="checkbox-inline ">
                                    Partial
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1">
                            <div class="form-group" style="display:flex;">
                                <input type="checkbox" value="" checked>
                                <label class="checkbox-inline "> Full
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 col-11"></div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="issue_date">Issue Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Issue Date" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="issue_qty" id="issue_qty" placeholder="Enter Issue Qty" value="264" tabindex="8">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="balance_qty">Balance Qty</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="balance_qty" id="balance_qty" placeholder="Enter Balance Qty" value="0" tabindex="9">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="10" value="16" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="11" value="30" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="11" value="00" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="ampm" name="ampm" tabindex="12" disabled style="height:34.3px;">
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
            <button type="button" class="btn btn-primary" id="Print_mtn_stock_issue">Print</button>
            <button type="button" class="btn btn-primary" id="submit_mtn_stock_issue">Submit</button>
        </div>
    </div>
</form>