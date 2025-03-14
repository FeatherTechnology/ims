<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_domestic_sales"><span class="fa fa-plus"></span>&nbsp; Add Domestic Sales Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card domestic_sales_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="domestic_sales_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th rowspan="2" style="vertical-align: middle;">Invoice No</th>
                        <th rowspan="2" style="vertical-align: middle;">Invoice Date</th>
                        <th colspan="11" style="vertical-align: middle;">Sales Order Info</th>
                        <th colspan="3" style="vertical-align: middle;">Stock Issue</th>
                        <th colspan="4" style="vertical-align: middle;">Transporter Details</th>
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
                        <th style="vertical-align: middle;">Rack</th>
                        <th style="vertical-align: middle;">Compartment</th>
                        <th style="vertical-align: middle;">Palette No</th>
                        <th style="vertical-align: middle;">Qty</th>
                        <th style="vertical-align: middle;">Issue Date</th>
                        <th style="vertical-align: middle;">Issue Qty</th>
                        <th style="vertical-align: middle;">Issue Time</th>
                        <th style="vertical-align: middle;">Transporter Name</th>
                        <th style="vertical-align: middle;">Driver Name</th>
                        <th style="vertical-align: middle;">Vehicle No</th>
                        <th style="vertical-align: middle;">E Way Bill No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TWL/EX/114/2024-25</td>
                        <td>29-01-2025</td>
                        <td>114</td>
                        <td>DMC001</td>
                        <td>Tender Cuts</td>
                        <td>PI114</td>
                        <td>28-12-2024</td>
                        <td>28534M04TW001</td>
                        <td>SL-1</td>
                        <td>G</td>
                        <td>A</td>
                        <td>D</td>
                        <td>4230</td>
                        <td>29-01-2025</td>
                        <td>4230</td>
                        <td>17:30:00</td>
                        <td>Murugan</td>
                        <td>Murugan</td>
                        <td>TN 13 K 3321</td>
                        <td>183212416317</td>
                        <td><span class="icon-border_color"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="domestic_sales_form">
    <div class="domestic_sales_creation_content" id="" style="display: none;">
        <div class="card">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="invoice_no">Invoice No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="invoice_no" id="invoice_no" value="TWL/EX/114/2024-25" tabindex="1" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="invoice_date">Invoice Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="invoice_date" id="invoice_date" value ="2025-01-29" tabindex="2">
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
                                    <option selected>114</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee_code">Consignee Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee_code" id="consignee_code" value="DMC001" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee_name">Consignee Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee_name" id="consignee_name" value="Tender Cuts" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="po_no">Po No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="po_no" id="po_no" value="PI114" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="po_date">Po Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="po_date" id="po_date" value="2024-12-28" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="lot_no" id="lot_no" tabindex="8">
                                    <option>Select Lot No</option>
                                    <option value="28534M04TW001" selected>28534M04TW001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="storage_location" id="storage_location" value="SL-1" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" value="G" tabindex="10" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment_no">Compartment</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="compartment_no" id="compartment_no" value="A" tabindex="11" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="palette_no">Palette No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="palette_no" id="palette_no" value="D" tabindex="12" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="qty">Qty</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="qty" id="qty" value="4230" tabindex="13" readonly>
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
                                <input type="date" class="form-control" name="issue_date" id="issue_date" value="2025-01-29" tabindex="14">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="issue_qty">Issue Qty</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="issue_qty" id="issue_qty" value="4230" tabindex="15">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" value="17" tabindex="16" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" value="30" tabindex="17" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="seconds" name="seconds" min="0" max="59" placeholder="MM" value="00" tabindex="18" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="ampm" name="ampm" tabindex="19" style="height:35px;" disabled>
                                            <option value="AM">AM</option>
                                            <option value="PM" selected>PM</option>
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
                    <div class="card-title">Transporter Details</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="transporter_name">Transporter Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="transporter_name" id="transporter_name" placeholder="Enter Transporter Name" value="Murugan" tabindex="20">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="driver_name">Driver Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="driver_name" id="driver_name" placeholder="Enter Driver Name" value="Murugan"tabindex="21">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="vehicle_no">Vehicle No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="vehicle_no" id="vehicle_no" placeholder="Enter Vehicle No" value="TN 13 K 3321" tabindex="22">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="bill_no">E-Way Bill No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="bill_no" id="bill_no" placeholder="Enter E-Way Bill No" value="183212416217" tabindex="23">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_domestic_sales" tabindex="24">Print</button>
            <button type="button" class="btn btn-primary" id="submit_domestic_sales" tabindex="25">Submit</button>
        </div>
    </div>
</form>