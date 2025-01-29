<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_mtn"><span class="fa fa-plus"></span>&nbsp; Add MTN</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card production_indent_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="production_indent_create" class="table table-bordered">
                <thead>
                    <tr>
                        <th style="vertical-align: middle;">S.NO</th>
                        <th style="vertical-align: middle;">MTN ID</th>
                        <th style="vertical-align: middle;">Date</th>
                        <th style="vertical-align: middle;">Shift</th>
                        <th style="vertical-align: middle;">Type of Work</th>
                        <th style="vertical-align: middle;">Lot No</th>
                        <th style="vertical-align: middle;">Variety</th>
                        <th style="vertical-align: middle;">Grade</th>
                        <th style="vertical-align: middle;">Glaze</th>
                        <th style="vertical-align: middle;">Packing Style</th>
                        <th style="vertical-align: middle;">PL No / Dummy</th>
                        <th style="vertical-align: middle;">No of MC's</th>
                        <th style="vertical-align: middle;">Loose MC [In Kgs]</th>
                        <th style="vertical-align: middle;">Rack No</th>
                        <th style="vertical-align: middle;">Remarks</th>
                        <th style="vertical-align: middle;">Purpose of Work</th>
                        <th style="vertical-align: middle;">Pordn In Charge</th>
                        <th style="vertical-align: middle;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2981AM27</td>
                        <td>2024-12-27</td>
                        <td>Day</td>
                        <td>Rework</td>
                        <td>TWL-2981</td>
                        <td>HLSo</td>
                        <td>41 / 50</td>
                        <td>Nw / Nc</td>
                        <td>6 * 1.8Kgs</td>
                        <td>Dummy</td>
                        <td>21</td>
                        <td>0</td>
                        <td>SL-1_A_G_C</td>
                        <td></td>
                        <td>20% Glaze needs to be rework</td>
                        <td>Prabakaran</td>
                        <td class="icon-border_color"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<form id="myForm">
    <div class="production_indent_creation_content" style="display: none;" id="production_indent_creation_content">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <div class="card-title">Indent Info</div>
                </div>
                <div class="card-body">
                    <div class="row" id="con">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mtn_id">MTN ID</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="mtn_id" id="mtn_id" placeholder="MTN ID" value="2981AM27" tabindex="1" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4 ">
                            <div class="form-group">
                                <label for="shift">Shift</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="shift" id="shift" placeholder="Enter Shift" tabindex="2">
                                    <option>Select Shift</option>
                                    <option selected>Day</option>
                                    <option>Night</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="date">Date</label><span class="text-danger">*</span>
                                <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date" value="2024-12-27" tabindex="3" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="type_work">Type of Work</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="type_work" id="type_work" placeholder="Enter Shift" tabindex="4">
                                    <option>Select Type of Work</option>
                                    <option selected>Rework</option>
                                    <option>Reglaze</option>
                                    <option>Repacking</option>
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
                                <label for="lot_no">Lot No</label><span class="text-danger">*</span>
                                <select type="text" class="form-control" name="lot_no" id="lot_no" placeholder="Enter Lot No" tabindex="5">
                                    <option>Select Lot No</option>
                                    <option selected>TWL-2981</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="variety">Variety</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="variety" id="variety" placeholder="Variety" value="HLSO" tabindex="6" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="grade">Grade</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade" value="41 / 50" tabindex="7" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="glaze" id="glaze" placeholder="Glaze"  value="Nw / Nc" tabindex="8" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packing">Packing Style</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packing" id="packing" placeholder="Packing Style" value="6 * 1.8kgs" tabindex="9" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pl_number">PL No / Dummy</label>
                                <input type="text" class="form-control" name="pl_number" id="pl_number" value="Dummy" placeholder="PL No" tabindex="10" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mc_number">Number of MC's</label>
                                <input type="number" class="form-control" name="mc_number" placeholder="Number of MC" id="mc_number" value="21" tabindex="11" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="loose_mc">Loose MC (in kg)</label>
                                <input type="number" class="form-control" name="loose_mc" id="loose_mc" placeholder="Loose MC" value="0" tabindex="12" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack No</label>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" value="SL-1_A_G_C" tabindex="13" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="remarks">Remarks</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks" tabindex="14" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="purpose_work">Purpose of Work</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="purpose_work" id="purpose_work" value="20% Glaze needs to be rework" placeholder="Enter Purpose of Work" tabindex="15">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="prodn_charge">Prodn In Charge</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="prodn_charge" id="prodn_charge" placeholder="Prodn In Charge" value="Prabakaran" tabindex="16" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-primary" id="print_mtn">Print</button>
            <button type="button" class="btn btn-primary" id="submit_mtn">Submit</button>
        </div>
    </div>
</form>