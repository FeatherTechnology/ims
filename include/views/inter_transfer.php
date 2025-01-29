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
                                        <option selected>C001</option>
                                    </select>
                                </div>
                                <div class="col-6">

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6  mb-3">
                                    <label for="from_name">Name</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_name" id="from_name" placeholder="Name" tabindex="2" readonly value="The Waterbase">

                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_address">Address</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_address" id="from_address" placeholder="Address" tabindex="3" readonly value="#37">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_address_1">Address 1</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_address_1" id="from_address_1" placeholder="Address 1" tabindex="4" readonly value="Montieth Road">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_place">Place</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_place" id="from_place" placeholder="Place" tabindex="5" readonly value="Chennai">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_state">State</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_state" id="from_state" placeholder="State" tabindex="6" readonly value="Tamil Nadu">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_pincode">Pincode</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_pincode" id="from_pincode" placeholder="Pincode" tabindex="7" readonly value="600001">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="from_gst_no">GST Number</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="from_gst_no" id="from_gst_no" placeholder="GST Number" tabindex="8" readonly value="33AABCT0601L1ZJ">
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
                                        <option selected>D100</option>
                                    </select>
                                </div>
                                <div class="col-6">

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="to_name">Name</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_name" id="to_name" placeholder="Name" tabindex="2" readonly value="The Waterbase">

                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="to_address">Address</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_address" id="to_address" placeholder="Address" tabindex="3" readonly value="Survey No 39/1, 40">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_address_1">Address 1</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_address_1" id="to_address_1" placeholder="Address 1" tabindex="4" readonly value="Ananthapuram Village">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_place">Place</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_place" id="to_place" placeholder="Place" tabindex="5" readonly value="Nellore">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_state">State</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_state" id="to_state" placeholder="State" tabindex="6" readonly value="Andhra Pradesh">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="to_pincode">Pincode</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_pincode" id="to_pincode" placeholder="Pincode" tabindex="7" readonly value="524344">
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <label for="to_gst_no">GST Number</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="to_gst_no" id="to_gst_no" placeholder="GST Number" tabindex="8" readonly value="37AABCT0601L1ZJ2">
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
                            <option selected>TW001</option>
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
                                    <td>1</td>
                                    <td>VNMI</td>
                                    <td>0306097</td>
                                    <td>28534M04TW001</td>
                                    <td>HLSO</td>
                                    <td>1*10Kgs</td>
                                    <td>41/50</td>
                                    <td>6*1.8Kgs</td>
                                    <td>216</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7"></td>
                                    <td>Grand Total</td>
                                    <td>216</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <br>
                    <div class="col-lg-3 col-sm-7">
                        <label for="eway_bill_no">Eway Bill Number</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" name="eway_bill_no" id="eway_bill_no" placeholder="Enter GST Number" tabindex="10" value="1810 0000 1348">
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
                            <input type="text" class="form-control" name="transporter_name" id="transporter_name" placeholder="Enter Transporter Name" tabindex="11" value="Sri Muruga Transport">
                        </div>
                        <div class="col-lg-4  mb-3">
                            <label for="vechicle_no">Vechicle Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="vechicle_no" id="vechicle_no" placeholder="Enter Vechicle Number" tabindex="12" value="TN 13 K 3321">
                        </div>
                        <div class="col-lg-4  mb-3">
                            <label for="driver_name">Driver Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="driver_name" id="driver_name" placeholder="Enter Driver Name" tabindex="13" value="Murugan">
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