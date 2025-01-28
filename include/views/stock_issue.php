<br> <br>
<div id="customer_data_content">
    <div class="radio-container" id="main_radio">
        <div class="selector">
            <div class="selector-item">
                <input type="radio" id="mtn" name="customer_data_type" class="selector-item_radio" value="MTN" checked>
                <label for="mtn" class="selector-item_label">MTN</label>
            </div>
            <div class="selector-item">
                <input type="radio" id="sales" name="customer_data_type" class="selector-item_radio" value="sales">
                <label for="sales" class="selector-item_label">Sales</label>
            </div>
            <div class="selector-item">
                <input type="radio" id="lab" name="customer_data_type" class="selector-item_radio" value="lab">
                <label for="lab" class="selector-item_label">Lab</label>
            </div>
        </div>
    </div> <br>
    <div class="Show_mtn">
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="add_stock_issue_mtn"><span class="fa fa-plus"></span>&nbsp; Add Stock Issue MTN Creation</button>
            <button type="button" class="btn btn-primary" id="back_btn_mtn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
        </div>
        <br>
        <div class="card mtn_table">
            <div class="card-body">
                <div class="col-12">
                    <table id="mtn_create" class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                                <th colspan="7" style="vertical-align: middle;">Production Info</th>
                                <th colspan="4" style="vertical-align: middle;">Stock Issue</th>
                                <th rowspan="2" style="vertical-align: middle;">Action</th>
                            </tr>
                            <tr>
                                <th style="vertical-align: middle;">MTN ID</th>
                                <th style="vertical-align: middle;">Lot No</th>
                                <th style="vertical-align: middle;">Storage Location</th>
                                <th style="vertical-align: middle;">Rack No</th>
                                <th style="vertical-align: middle;">Compartment</th>
                                <th style="vertical-align: middle;">Palette</th>
                                <th style="vertical-align: middle;">Qty</th>
                                <th style="vertical-align: middle;">Issue Date</th>
                                <th style="vertical-align: middle;">Issue Qty</th>
                                <th style="vertical-align: middle;">Balance Qty</th>
                                <th style="vertical-align: middle;">Issue Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form id="mtn_creation_form">
            <div id="mtn_creation_content" style="display:none;">
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
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Lot No" tabindex="2" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="storage_loc">Storage Location</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="storage_loc" id="storage_loc" placeholder="Storage Location" tabindex="3" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="platte_no">Palette No</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="palette_no" id="platte_no" placeholder="Palette No" tabindex="17" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="qty">Qty</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" tabindex="6" readonly>
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
                                        <input type="checkbox" value="">
                                        <label class="checkbox-inline "> Full
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 col-11"></div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="issue_date">Issue Date</label><span class="text-danger">*</span>
                                        <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Enter Issue Date" tabindex="7">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="issue_qty" id="issue_qty" placeholder="Enter Issue Qty" tabindex="8">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="balance_qty">Balance Qty</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="balance_qty" id="balance_qty" placeholder="Enter Balance Qty" tabindex="9">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="10" readonly>
                                            </div>
                                            <div class="col">
                                                <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="11" readonly>
                                            </div>
                                            <div class="col">
                                                <select class="form-control" id="ampm" name="ampm" tabindex="12" disabled style="height:34.6px; width:auto;">
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
                    <button type="button" class="btn btn-primary" id="Print_stock_issue_creation">Print</button>
                    <button type="button" class="btn btn-primary" id="submit_stock_issue_creation">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="hide_sales" style="display: none;">
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="add_stock_issue_sales"><span class="fa fa-plus"></span>&nbsp; Add Stock Issue Sales Creation</button>
            <button type="button" class="btn btn-primary" id="back_btn_sales" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
        </div>
        <br>
        <div class="card sales_table">
            <div class="card-body">
                <div class="col-12">
                    <table id="sales_create" class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                                <th colspan="8" style="vertical-align: middle;">Sales Order Info</th>
                                <th colspan="3" style="vertical-align: middle;">Stock Issue</th>
                                <th rowspan="2" style="vertical-align: middle;">Action</th>
                            </tr>
                            <tr>
                                <th style="vertical-align: middle;">Sales Order No</th>
                                <th style="vertical-align: middle;">Lot No</th>
                                <th style="vertical-align: middle;">Seller Name</th>
                                <th style="vertical-align: middle;">Storage Location</th>
                                <th style="vertical-align: middle;">Rack No</th>
                                <th style="vertical-align: middle;">Compartment</th>
                                <th style="vertical-align: middle;">Palette</th>
                                <th style="vertical-align: middle;">Qty</th>
                                <th style="vertical-align: middle;">Issue Date</th>
                                <th style="vertical-align: middle;">Issue Qty</th>
                                <th style="vertical-align: middle;">Issue Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form id="sales_creation_form">
            <div id="sales_creation_content" style="display: none;">
                <div class="card">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="card-title">Sales Order Info</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="sales_order_no">Sales Order No</label><span class="text-danger">*</span>
                                        <select type="text" class="form-control" name="sales_order_no" id="sales_order_no" tabindex="13">
                                            <option>Select Sales Order No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Lot No" tabindex="14" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="seller_name">Seller Name</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="seller_name" id="seller_name" placeholder="Seller Name" tabindex="15" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="storage_loc">Storage Location</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="storage_loc" id="storage_loc" placeholder="Storage Location" tabindex="16" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="rack_no">Rack No</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" tabindex="17" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="compartment_no">Compartment No</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" tabindex="5" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="qty">Qty</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty Qty" tabindex="6" readonly>
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
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="issue_date">Issue Date</label><span class="text-danger">*</span>
                                        <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Enter Issue Date" tabindex="20">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="issue_qty" id="issue_qty" placeholder="Enter Issue Qty" tabindex="21">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="hours">Issue Time</label><span class="text-danger">*</span>
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
                <div class="text-right">
                    <button type="button" class="btn btn-primary" id="Print_stock_issue_creation">Print</button>
                    <button type="button" class="btn btn-primary" id="submit_stock_issue_creation">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="hideshow_lab" style="display: none;">
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="add_stock_issue_lab" value="priya"><span class="fa fa-plus"></span>&nbsp; Add Stock Issue Lab Creation</button>
            <button type="button" class="btn btn-primary" id="back_btn_lab" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
        </div>
        <br>
        <div class="card lab_table">
            <div class="card-body">
                <div class="col-12">
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
                                <th style="vertical-align: middle;">Lab Name</th>
                                <th style="vertical-align: middle;">NRGP</th>
                                <th style="vertical-align: middle;">Issue Date</th>
                                <th style="vertical-align: middle;">Issue Qty</th>
                                <th style="vertical-align: middle;">Balance Qty</th>
                                <th style="vertical-align: middle;">Issue Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form id="lab_creation_form">
            <div id="lab_creation_content" style="display: none;">
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
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="part_code">Part Code</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="part_code" id="part_code" placeholder="Part Code" tabindex="26" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="part_des">Part Des</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="part_des" id="part_des" placeholder="Part Des" tabindex="26" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="storage_loc">Storage Location</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="storage_loc" id="storage_loc" placeholder="Storage Location" tabindex="27" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="rack_no">Rack No</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" tabindex="28" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="compartment_no">Compartment No</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" tabindex="5" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="compartment_qty">Compartment Qty</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="compartment_qty" id="compartment_qty" placeholder="Compartment Qty" tabindex="6" readonly>
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
                                            <option>External Lab</option>
                                            <option>Internal Lab</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="lab_name">Lab Name</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="lab_name" id="lab_name" placeholder="Enter Lab Name" tabindex="31">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="nrgp">NRGP</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" name="nrgp" id="nrgp" placeholder="Enter NRGP" tabindex="33">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="issue_date">Issue Date</label><span class="text-danger">*</span>
                                        <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Enter Issue Date" tabindex="32">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" name="issue_qty" id="issue_qty" placeholder="Enter Issue Qty" tabindex="33">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                                    <div class="form-group">
                                        <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="34" readonly>
                                            </div>
                                            <div class="col">
                                                <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="35" readonly>
                                            </div>
                                            <div class="col">
                                                <select class="form-control" id="ampm" name="ampm" tabindex="36" style="height:34.6px; width: auto;" disabled>
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
                                        <input type="number" class="form-control" name="balance_qty" id="balance_qty" placeholder="Balance Qty" tabindex="37" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" id="Print_stock_issue_creation">Print</button>
                    <button type="button" class="btn btn-primary" id="submit_stock_issue_creation">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>