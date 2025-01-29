<form id="istock_return_form">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">Stock Details</div>
            </div>
            <div class="radio-container" id="main_radio">
                <div class="selector">
                    <div class="selector-item">
                        <input type="radio" id="sales" name="stock_return" class="selector-item_radio" value="sales" checked>
                        <label for="sales" class="selector-item_label">Sales</label>
                    </div>
                    <div class="selector-item">
                        <input type="radio" id="depot" name="stock_return" class="selector-item_radio" value="Depot">
                        <label for="depot" class="selector-item_label">Depot</label>
                    </div>
                </div>
            </div> <br><br>

            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="sys_date">Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="sys_date" id="sys_date" value="2025-01-29" tabindex="1">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="sales_order_no">Sales Order Number</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="sales_order_no" id="sales_order_no" tabindex="2">
                                    <option>Select Sales Order Number</option>
                                    <option selected>114</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="depot_no">Depot Number</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="depot_no" id="depot_no" tabindex="3">
                                    <option>Select Depot Number</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <br>
                
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                        <table id="stock_details_list" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Species</th>
                                    <th>HS Code</th>
                                    <th>Lot No</th>
                                    <th>Variety</th>
                                    <th>Size</th>
                                    <th>Grade</th>
                                    <th>Type Of Packing</th>
                                    <th>Number of Mc's</th>
                                    <th>Total Quantity</th>
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
                                    <td>4230</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="reason_for_return">Reason For Return</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="reason_for_return" id="reason_for_return" placeholder="Enter Reason For Return" value="Quality of the product was not matched " tabindex="4">
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
                <div class="card-title">Storage Location</div>
            </div>
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="storage_location" id="storage_location" tabindex="5">
                                    <option>Select Storage Location</option>
                                    <option selected>SL-1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack">Rack</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="rack" id="rack" tabindex="6">
                                    <option>Select Rack</option>
                                    <option selected>A</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="compartment">Compartment</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="compartment" id="compartment" tabindex="7">
                                    <option>Select Compartment</option>
                                    <option selected>G</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pallette_no">Palette Number</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="pallette_no" id="pallette_no" tabindex="8">
                                    <option selected>C</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="hours">Issue Time</label><span class="text-danger">*</span>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" value="12" tabindex="9" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" value="30" tabindex="10" readonly>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" id="seconds" name="seconds" min="0" max="59" placeholder="MM" value="30" tabindex="11" readonly>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="ampm" name="ampm" tabindex="12" style="height:34.6px; width: auto;" disabled>
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
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-primary" id="submit_stock_issue_creation" tabindex="13">Submit</button>
    </div>
</form>