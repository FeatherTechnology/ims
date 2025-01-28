<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_order"><span class="fa fa-plus"></span>&nbsp; Add Order Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card order_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="order_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th colspan="10" style="vertical-align: middle;">General Info</th>
                        <th colspan="9" style="vertical-align: middle;">Shipment Info</th>
                        <th colspan="9" style="vertical-align: middle;">Stock Details</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">Proforma Inv No</th>
                        <th style="vertical-align: middle;">Date</th>
                        <th style="vertical-align: middle;">PI No</th>
                        <th style="vertical-align: middle;">Consignee</th>
                        <th style="vertical-align: middle;">Address</th>
                        <th style="vertical-align: middle;">Address 1</th>
                        <th style="vertical-align: middle;">Place</th>
                        <th style="vertical-align: middle;">Pincode</th>
                        <th style="vertical-align: middle;">Tel</th>
                        <th style="vertical-align: middle;">Fax</th>
                        <th style="vertical-align: middle;">Pre Carriage Due</th>
                        <th style="vertical-align: middle;">Orgin of Goods</th>
                        <th style="vertical-align: middle;">Final Destination </th>
                        <th style="vertical-align: middle;">Vessel No</th>
                        <th style="vertical-align: middle;">Port of Loading</th>
                        <th style="vertical-align: middle;">Terms of delivery</th>
                        <th style="vertical-align: middle;">Port of Discharge</th>
                        <th style="vertical-align: middle;">payment Terms</th>
                        <th style="vertical-align: middle;">Shipment Date</th>
                        <th style="vertical-align: middle;">Species Name</th>
                        <th style="vertical-align: middle;">HS Code</th>
                        <th style="vertical-align: middle;">Description of Goods</th>
                        <th style="vertical-align: middle;">Size [PCS/LBS]</th>
                        <th style="vertical-align: middle;">No of Cartons</th>
                        <th style="vertical-align: middle;">Net Kgs</th>
                        <th style="vertical-align: middle;">Gross Weight</th>
                        <th style="vertical-align: middle;">Amount</th>
                        <th style="vertical-align: middle;">Tolerance</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="order_form">
    <div class="order_creation_content" id="" style="display: none;">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">General Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="proforma_inv_no">Proforma Inv No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="proforma_inv_no" id="proforma_inv_no" placeholder="Proforma Inv No" tabindex="1" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="date">Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="date" id="date" tabindex="2">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="po_no">PI No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="pi_no" id="pi_no" tabindex="3">
                                    <option>Select PI No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee">Consignee</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="consignee" id="consignee" placeholder="Consignee" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address">Address</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address_1">Address 1</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address_1" id="address_1" placeholder="Address 1" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address_2">Address 2</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address_2" id="address_2" placeholder="Address 2" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="postal_code">Postal Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code" tabindex="8" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="tel">Tel</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="fax">Fax</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" tabindex="10" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Shipment Details</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pre_carriage_by">Pre Carriage by</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="pre_carriage_by" id="pre_carriage_by" placeholder="Enter Pre Carriage by" tabindex="11">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="orgin_of_goods">Orgin of Goods</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="orgin_of_goods" id="orgin_of_goods" placeholder="Enter Orgin of Goods" tabindex="12">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="vessel_voyage">Vessel Name / Voyage No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="vessel_voyage" id="vessel_voyage" placeholder="Enter Vessel Name / Voyage No" tabindex="14">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="port_of_loading">Port of Loading</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="port_of_loading" id="port_of_loading" placeholder="Enter Port of Loading" tabindex="15">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="terms_of_delivery">Terms of Delivery</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="terms_of_delivery" id="terms_of_delivery" placeholder="Enter Terms of Delivery" tabindex="16">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="port_of_discharge">Port of Discharge</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="port_of_discharge" id="port_of_discharge" tabindex="17">
                                    <option>Select Port of Discharge</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="final_destin">Final Destination</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="final_destin" id="final_destin" tabindex="18">
                                    <option>Select Final Destination</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="payment_terms">Payment Terms</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="payment_terms" id="payment_terms" placeholder="Enter Payment Terms" tabindex="19">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="shipment_date">Shipment Date</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="shipment_date" id="shipment_date" tabindex="20">
                                    <option>Select Shipment Date</option>
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
                                <label for="species_name">Species Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="species_name" id="species_name" placeholder="Species Name" tabindex="21" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hs_code">HS Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="hs_code" id="hs_code" placeholder="HS Code" tabindex="22" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="description_of_goods">Description of Goods</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="description_of_goods" id="description_of_goods" placeholder="Description of Goods" tabindex="23" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="size">Size [PCS / LBS]</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="size" id="size" placeholder="Size [PCS / LBS]" tabindex="24" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="no_of_cartons">No of Cartons</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="no_of_cartons" id="no_of_cartons" placeholder="No of Cartons" tabindex="25" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="net_qty">Net Qty [In Kgs]</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="net_qty" id="net_qty" placeholder="Net Qty [In Kgs]" tabindex="26" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="gross_weight">Gross Weight</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="gross_weight" id="gross_weight" placeholder="Gross Weight" tabindex="27" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="amount">Amount</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount" tabindex="28" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="tolerance">Tolerance</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="tolerance" id="tolerance" placeholder="Enter Tolerance" tabindex="29">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_order">Print</button>
            <button type="button" class="btn btn-primary" id="submit_order">Submit</button>
        </div>
    </div>
</form>