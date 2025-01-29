<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_pi"><span class="fa fa-plus"></span>&nbsp; Add PI Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card pi_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="pi_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                        <th colspan="10" style="vertical-align: middle;">General Info</th>
                        <th colspan="3" style="vertical-align: middle;">Shipment Info</th>
                        <th colspan="8" style="vertical-align: middle;">Stock Details</th>
                        <th rowspan="2" style="vertical-align: middle;">Action</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">PI Reference No</th>
                        <th style="vertical-align: middle;">Date</th>
                        <th style="vertical-align: middle;">Consignee Code</th>
                        <th style="vertical-align: middle;">Customer Name</th>
                        <th style="vertical-align: middle;">Address</th>
                        <th style="vertical-align: middle;">Address 1</th>
                        <th style="vertical-align: middle;">Place</th>
                        <th style="vertical-align: middle;">Pincode</th>
                        <th style="vertical-align: middle;">Tel</th>
                        <th style="vertical-align: middle;">Fax</th>
                        <th style="vertical-align: middle;">Shipment Date</th>
                        <th style="vertical-align: middle;">Port of Discharge </th>
                        <th style="vertical-align: middle;">Final Destination </th>
                        <th style="vertical-align: middle;">Species Name</th>
                        <th style="vertical-align: middle;">HS code</th>
                        <th style="vertical-align: middle;">Description of Goods</th>
                        <th style="vertical-align: middle;">Size [PCS/LBS]</th>
                        <th style="vertical-align: middle;">No of Cartons</th>
                        <th style="vertical-align: middle;">Net Kgs</th>
                        <th style="vertical-align: middle;">Gross Weight</th>
                        <th style="vertical-align: middle;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TWL/PRO/112/2024-25</td>
                        <td>2024-11-19</td>
                        <td>EXC001</td>
                        <td>TAIKA SEAFOOD CORPORATION</td>
                        <td>VIETNAM</td>
                        <td>NLot N, AN Nighiep Industrial zone</td>
                        <td>Soctrang Province, Vietnam</td>
                        <td>950000</td>
                        <td>84(79)3 628 33</td>
                        <td>84(79)3 620 068</td>
                        <td>2024-12-18</td>
                        <td>India</td>
                        <td>VIETNAM</td>
                        <td>VNMI</td>
                        <td>030617</td>
                        <td>Frozen raw Headless shell on VNMI shrimps</td>
                        <td>6 * 1.8Kgs</td>
                        <td>400</td>
                        <td>4320</td>
                        <td>4320</td>
                        <td>112752</td>
                        <td class="icon-border_color"></td>
                    </tr>
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
                    <div class="card-title">General Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pi_reference_no">PI Reference No</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="pi_reference_no" id="pi_reference_no" value="TWL/PRO/112/2024-25" placeholder="Enter PI Reference No" tabindex="1">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="date">Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="date" id="date" value="2024-11-09" tabindex="2">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="consignee_code">Consignee Code</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="consignee_code" id="consignee_code" tabindex="3">
                                    <option>Select Consignee Code</option>
                                    <option selected>EXC001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="Customer_name">Customer Nmae</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="Customer_name" id="Customer_name" value="TAIKA SEAFOOD CORPORATION" placeholder="Customer Nmae" tabindex="4" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address">Address</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address" id="address" value="VIETNAM" placeholder="Address" tabindex="5" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="address_1">Address 1</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="address_1" id="address_1" value="Lot N, AN Nighiep Industrial zone" placeholder="Address 1" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="place">Place</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="place" id="place" value="Soctrang Province, Vietnam" placeholder="Place" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pin_code">Pin Code</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="pin_code" id="pin_code" value="950000" placeholder="Pin Code" tabindex="8" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="tel">Tel</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel" value="84(79)3 628 33" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="fax">Fax</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="84(79)3 620 068" tabindex="10" readonly>
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
                                <input type="date" class="form-control" name="shipment_date" id="shipment_date" value="2024-12-18" placeholder="Enter Shipment Date" tabindex="11">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="port_of_discharge">Port of Discharge</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="port_of_discharge" id="port_of_discharge" value="India" placeholder="Enter Port of Discharge" tabindex="12">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="final_destination">Final Destination</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="final_destination" id="final_destination" value="VIETNAM" placeholder="Enter Final Destination" tabindex="13">
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
                                    <option selected>VNMI</option>
                                    <option>BT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hs_code">HS Code</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="hs_code" id="hs_code" placeholder="HS Code" tabindex="15">
                                    <option>Select HS Code</option>
                                    <option selected>030617</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="description_of_goods">Description of Goods</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="description_of_goods" id="description_of_goods"  value="Frozen raw Headless shell on VNMI shrimps" placeholder="Enter Description of Goods" tabindex="16">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="size">Size [PCS / LBS]</label><span class="text-danger">*</span>
                                <input type="hidden" id="size_edit_it">
                                <select class="form-control" id="size" name="size" tabindex="17" multiple>
                                    <option value="">Select Size [PCS / LBS]</option>
                                    <option selected>6 * 1.8Kgs</option>
                                    <option>10 * 1Kgs</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="no_of_cartons">No of Cartons</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="no_of_cartons" id="no_of_cartons" value="400" placeholder="Enter No of Cartons" tabindex="18">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="net_qty">Net Qty [In Kgs]</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="net_qty" id="net_qty" value="4320" placeholder=" Enter Net Qty [In Kgs]" tabindex="19">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="gross_weight">Gross Weight</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="gross_weight" id="gross_weight" value="4320" placeholder="Enter Gross Weight" tabindex="20">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="amount">Amount</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="amount" id="amount"  placeholder="Enter Amount" value="112752" tabindex="21">
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