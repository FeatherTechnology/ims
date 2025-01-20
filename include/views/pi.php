<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_pi"><span class="fa fa-plus"></span>&nbsp; Add PI Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card pi_table_content">
    <div class="card-body">
        <div class="col-12">
            <table id="pi_create" class="table custom-table">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>PI Reference No</th>
                        <th>Date</th>
                        <th>Consignee Code</th>
                        <th>Consignee</th>
                        <th>Address</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>Postal Code</th>
                        <th>Tel</th>
                        <th>Fax</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="pi_form">
    <div class="pi_creation_content" id="" style="display: none;">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">General info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pi_reference_no">PI Reference No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="pi_reference_no" id="pi_reference_no" placeholder="Enter PI Reference No" tabindex="1">
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
                                <label for="consignee_code">Consignee Code</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="consignee_code" id="consignee_code" tabindex="3">
                                    <option>Select Consignee Code</option>
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
                                <label for="shipment_date">Shipment Date</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="shipment_date" id="shipment_date" placeholder="Enter Shipment Date" tabindex="11">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="port_of_discharge">Port of Discharge</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="port_of_discharge" id="port_of_discharge" placeholder="Enter Port of Discharge" tabindex="12">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="final_destination">Final Destination</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="final_destination" id="final_destination" placeholder="Enter Final Destination" tabindex="13">
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
                                <select type="text" class="form-control" name="species_name" id="species_name" placeholder="Species Name" tabindex="14">
                                    <option>Select Species Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hs_code">HS Code</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="hs_code" id="hs_code" placeholder="HS Code" tabindex="15">
                                    <option>Select HS Code</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="description_of_goods">Description of Goods</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="description_of_goods" id="description_of_goods" placeholder="Enter Description of Goods" tabindex="16">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="size">Size [PCS / LBS]</label><span class="text-danger">*</span>
                                <input type="hidden" id="size_edit_it">
                                <select class="form-control" id="size" name="size" tabindex="17" multiple>
                                    <option value="">Select Size [PCS / LBS]</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="no_of_cartons">No of Cartons</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="no_of_cartons" id="no_of_cartons" placeholder="Enter No of Cartons" tabindex="18">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="net_qty">Net Qty [In Kgs]</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="net_qty" id="net_qty" placeholder=" Enter Net Qty [In Kgs]" tabindex="19">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="gross_weight">Gross Weight</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="gross_weight" id="gross_weight" placeholder="Enter Gross Weight" tabindex="20">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="amount">Amount</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" tabindex="21">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_pi">Print</button>
            <button type="button" class="btn btn-primary" id="submit_order">Submit</button>
        </div>
    </div>
</form>