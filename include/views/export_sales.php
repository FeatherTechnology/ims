<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_export_sales"><span class="fa fa-plus"></span>&nbsp; Add Export Sales Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card export_sales_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="export_sales_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th rowspan="2" style="vertical-align: middle;">Invoice No</th>
                        <th rowspan="2" style="vertical-align: middle;">Invoice Date</th>
                        <th colspan="10" style="vertical-align: middle;">Sales Order Info</th>
                        <th colspan="3" style="vertical-align: middle;">Stock Issue</th>
                        <th colspan="3" style="vertical-align: middle;">Container Details</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">PI No</th>
                        <th style="vertical-align: middle;">Consignee Code</th>
                        <th style="vertical-align: middle;">Consignee Name</th>
                        <th style="vertical-align: middle;">Po No</th>
                        <th style="vertical-align: middle;">Po Date</th>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Storage Location</th>
                        <th style="vertical-align: middle;">Rack No</th>
                        <th style="vertical-align: middle;">Compartment No</th>
                        <th style="vertical-align: middle;">Qty</th>
                        <th style="vertical-align: middle;">Issue Date</th>
                        <th style="vertical-align: middle;">Issue Qty</th>
                        <th style="vertical-align: middle;">Issue Time</th>
                        <th style="vertical-align: middle;">Container Name</th>
                        <th style="vertical-align: middle;">Feet</th>
                        <th style="vertical-align: middle;">Port</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="export_sales_form">
    <div class="export_sales_creation_content" id="" style="display: none;">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="invoice_no">Invoice No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="invoice_no" id="invoice_no" placeholder="Invoice No" tabindex="1" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="invoice_date">Invoice Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="invoice_date" id="invoice_date" tabindex="2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Sales Order Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pi_no">PI No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="pi_no" id="pi_no" tabindex="3">
                                    <option>Select PI No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee_code">Consignee Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee_code" id="consignee_code" placeholder="Consignee Code" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee_name">Consignee Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee_name" id="consignee_name" placeholder="Consignee Name" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="po_no">Po No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="po_no" id="po_no" placeholder="Po No" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="po_date">Po Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="po_date" id="po_date" placeholder="Po Date" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Lot No" tabindex="8">
                                    <option>Select Lot No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="storage_location" id="storage_location" placeholder="Storage Location" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" tabindex="10" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment_no">Compartment No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="compartment_no" id="compartment_no" placeholder="Compartment No" tabindex="11" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="qty">Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" tabindex="12" readonly>
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
                                <input type="date" class="form-control" name="issue_date" id="issue_date" placeholder="Enter Issue Date" tabindex="13">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="issue_qty" id="issue_qty" placeholder="Enter Issue Qty" tabindex="14">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="15" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="16" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="ampm" name="ampm" tabindex="17" style="height:34.6px; width: auto;" disabled>
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
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Container Details</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="container_name">Container Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="container_name" id="container_name" placeholder="Enter Container Name" tabindex="18">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="feet">Feet</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="feet" id="feet" tabindex="19">
                                    <option>Select Feet</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="port">Port</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="port" id="port" placeholder="Enter Port" tabindex="20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_export_sales">Print</button>
            <button type="button" class="btn btn-primary" id="submit_export_sales">Submit</button>
        </div>
    </div>
</form>