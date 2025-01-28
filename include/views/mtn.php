<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_mtn"><span class="fa fa-plus"></span>&nbsp; Add MTN</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card production_indent_table_content">
    <div class="card-body">
        <div class="col-12">
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
                        <td>NA</td>
                        <td>01-Jul-24</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>TWL-2162</td>
                        <td>EZPL</td>
                        <td>21 / 25</td>
                        <td>Nw / Nc</td>
                        <td>8 x 2lbs</td>
                        <td>Dummy</td>
                        <td>117</td>
                        <td>0</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td class="icon-border_color"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>NA</td>
                        <td>01-Jul-24</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>TWL-2163</td>
                        <td>EZPL</td>
                        <td>31 / 40</td>
                        <td>Nw / Nc</td>
                        <td>10 x 2lbs</td>
                        <td>TWL/PRO/027/2024-25</td>
                        <td>127</td>
                        <td>0</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
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
                                <input type="text" class="form-control" name="mtn_id" id="mtn_id" placeholder="MTN ID" tabindex="1" value="NA" readonly>
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
                                <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date" tabindex="3" value="2021-01-01" readonly>
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
                                    <option selected>TWL-2162</option>
                                    <option>TWL-2164</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="variety">Variety</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="variety" id="variety" placeholder="Variety" tabindex="6" readonly value="PD">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="grade">Grade</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade" tabindex="7" readonly value="21/25">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="glaze" id="glaze" placeholder="Glaze" tabindex="8" readonly value="NW/Nc">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="packing">Packing Style</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="packing" id="packing" placeholder="Packing Style" tabindex="9" readonly value="8*2lbs">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="pl_number">PL No / Dummy</label>
                                <input type="text" class="form-control" name="pl_number" id="pl_number" placeholder="PL No" tabindex="10" readonly value="Dummy">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="mc_number">Number of MC's</label>
                                <input type="number" class="form-control" name="mc_number" placeholder="Number of MC" id="mc_number" tabindex="11" readonly value="117">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="loose_mc">Loose MC (in kg)</label>
                                <input type="number" class="form-control" name="loose_mc" id="loose_mc" placeholder="Loose MC" tabindex="12" readonly value="2.8">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="rack_no">Rack No</label>
                                <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" tabindex="13" readonly value="NA">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="remarks">Remarks</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Enter Remarks" tabindex="14" value="NA">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="purpose_work">Purpose of Work</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="purpose_work" id="purpose_work" placeholder="Enter Purpose of Work" tabindex="15" value="NA">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="prodn_charge">Prodn In Charge</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="prodn_charge" id="prodn_charge" placeholder="Prodn In Charge" tabindex="16" readonly value="NA">
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