<!-- <div class="text-right">
    <button type="button" class="btn btn-primary" id="add_inter_transfer"><span class="fa fa-plus"></span>&nbsp; Add Inter Transfer</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card inter_transfer_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="order_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="3" style="vertical-align: middle;">S.NO</th>
                        <th colspan="16" style="vertical-align: middle;">General Info</th>
                        <th colspan="11" rowspan="2" style="vertical-align: middle;">Stock Details</th>
                        <th colspan="3" rowspan="2" style="vertical-align: middle;">Transporter Details</th>
                    </tr>
                    <tr>
                        <th colspan="8" style="vertical-align: middle;">From Localtion</th>
                        <th colspan="8" style="vertical-align: middle;">To Location</th>
                    </tr>
                    <tr>
                        <th style="vertical-align: middle;">Code</th>
                        <th style="vertical-align: middle;">Name</th>
                        <th style="vertical-align: middle;">Address</th>
                        <th style="vertical-align: middle;">Address 1</th>
                        <th style="vertical-align: middle;">Place</th>
                        <th style="vertical-align: middle;">State</th>
                        <th style="vertical-align: middle;">Pincode</th>
                        <th style="vertical-align: middle;">GST Number</th>
                        <th style="vertical-align: middle;">Code</th>
                        <th style="vertical-align: middle;">Name</th>
                        <th style="vertical-align: middle;">Address</th>
                        <th style="vertical-align: middle;">Address 1</th>
                        <th style="vertical-align: middle;">Place</th>
                        <th style="vertical-align: middle;">State</th>
                        <th style="vertical-align: middle;">Pincode</th>
                        <th style="vertical-align: middle;">GST Number</th>
                        <th style="vertical-align: middle;">Product Code</th>
                        <th style="vertical-align: middle;">Species</th>
                        <th style="vertical-align: middle;">HS Code</th>
                        <th style="vertical-align: middle;">Lot Number</th>
                        <th style="vertical-align: middle;">Variety</th>
                        <th style="vertical-align: middle;">Size</th>
                        <th style="vertical-align: middle;">Grade</th>
                        <th style="vertical-align: middle;">Type Of Packing</th>
                        <th style="vertical-align: middle;">Quantity</th>
                        <th style="vertical-align: middle;">Gross Weight</th>
                        <th style="vertical-align: middle;">Eway Bill Number</th>
                        <th style="vertical-align: middle;">Transporter Name</th>
                        <th style="vertical-align: middle;">Vechicle Number</th>
                        <th style="vertical-align: middle;">Driver Name</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br> -->
<form id="inter_transfer_form">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">General Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class=" col-6">
                            <div class="card-title">From Location</div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label for="from_code">Code</label><span class="text-danger">*</span>
                                    <select type="text" class="form-control" name="from_code" id="from_code" tabindex="1">
                                        <option>Select Code</option>
                                    </select>
                                </div>
                                <div class="col-6">

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6  mb-3">
                                    <label for="from_name">Name</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_name" id="from_name" placeholder="Name" tabindex="2" readonly>

                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_address">Address</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_address" id="from_address" placeholder="Address" tabindex="3" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_address_1">Address 1</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_address_1" id="from_address_1" placeholder="Address 1" tabindex="4" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_place">Place</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_place" id="from_place" placeholder="Place" tabindex="5" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_state">State</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_state" id="from_state" placeholder="State" tabindex="6" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_pincode">Pincode</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_pincode" id="from_pincode" placeholder="Pincode" tabindex="7" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_gst_no">GST Number</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_gst_no" id="from_gst_no" placeholder="GST Number" tabindex="8" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 ">
                            <div class="card-title">To Location</div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label for="from_code">Code</label><span class="text-danger">*</span>
                                    <select type="text" class="form-control" name="from_code" id="from_code" tabindex="1">
                                        <option>Select Code</option>
                                    </select>
                                </div>
                                <div class="col-6">

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="to_name">Name</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_name" id="to_name" placeholder="Name" tabindex="2" readonly>

                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="to_address">Address</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_address" id="to_address" placeholder="Address" tabindex="3" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_address_1">Address 1</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_address_1" id="to_address_1" placeholder="Address 1" tabindex="4" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_place">Place</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_place" id="to_place" placeholder="Place" tabindex="5" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_state">State</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_state" id="to_state" placeholder="State" tabindex="6" readonly>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="to_pincode">Pincode</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_pincode" id="to_pincode" placeholder="Pincode" tabindex="7" readonly>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_gst_no">GST Number</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_gst_no" id="to_gst_no" placeholder="GST Number" tabindex="8" readonly>
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
                    <div class="card-title">Stock Details</div>
                </div>

                <div class="card-body">

                    <div class="col-lg-3 col-sm-7">
                        <label for="product_code">Product Code</label><span class="text-danger">*</span>
                        <select type="text" class="form-control" name="product_code" id="product_code" tabindex="9">
                            <option>Select Product Code</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                        <table id="stock_details_list" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Species</th>
                                    <th>HS Code</th>
                                    <th>Lot Number</th>
                                    <th>Variety</th>
                                    <th>Size</th>
                                    <th>Grade</th>
                                    <th>Type Of Packing</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7"></td>
                                    <td>Grand Total</td>
                                    <td>0</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <br>
                    <div class="col-lg-3 col-sm-7">
                        <label for="eway_bill_no">Eway Bill Number</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" name="eway_bill_no" id="eway_bill_no" placeholder="Enter GST Number" tabindex="10">
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
                        <div class="col-lg-4  mb-3">
                            <label for="transporter_name">Transporter Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="transporter_name" id="transporter_name" placeholder="Enter Transporter Name" tabindex="11">
                        </div>
                        <div class="col-lg-4  mb-3">
                            <label for="vechicle_no">Vechicle Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="vechicle_no" id="vechicle_no" placeholder="Enter Vechicle Number" tabindex="12">
                        </div>
                        <div class="col-lg-4  mb-3">
                            <label for="driver_name">Driver Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="driver_name" id="driver_name" placeholder="Enter Driver Name" tabindex="13">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_inter_transfer">Print</button>
            <button type="button" class="btn btn-primary" id="submit_inter_transfer">Submit</button>
        </div>

</form>