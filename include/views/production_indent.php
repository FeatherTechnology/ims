<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_production_indent"><span class="fa fa-plus"></span>&nbsp; Add Production Indent Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card production_indent_table_content">
    <div class="card-body">
        <div class="col-12">
            <table id="production_indent_create" class="table custom-table">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Indent ID</th>
                        <th>Shift</th>
                        <th>Date</th>
                        <th>Type of Work</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="production_indent_creation_content" style="display: none;">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">Indent info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="indent_id">Indent ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="indent_id" id="indent_id" placeholder="Indent ID" tabindex="1" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4 ">
                        <div class="form-group">
                            <label for="shift">Shift</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="shift" id="shift" placeholder="Enter Shift" tabindex="2">
                                <option>Select Shift</option>
                                <option>Day</option>
                                <option>Night</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="date">Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date" tabindex="3">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="type_work">Type of Work</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="type_work" id="type_work" placeholder="Enter Shift" tabindex="4">
                                <option>Select Type of Work</option>
                                <option>Rework</option>
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
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="variety">Variety</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="variety" id="variety" placeholder="Variety" tabindex="6" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="grade">Grade</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade" tabindex="7" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="glaze" id="glaze" placeholder="Glaze" tabindex="8" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="packing">Packing Style</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="packing" id="packing" placeholder="Packing Style" tabindex="9" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="pl_number">PL Number / Dummy</label>
                            <input type="text" class="form-control" name="pl_number" id="pl_number" placeholder="PL Number" tabindex="10" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="mc_number">Number of MC's</label>
                            <input type="number" class="form-control" name="mc_number" placeholder="Number of MC" id="mc_number" tabindex="11" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="loose_mc">Loose MC (in kg)</label>
                            <input type="number" class="form-control" name="loose_mc" id="loose_mc" placeholder="Loose MC" tabindex="12" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="rack_no">Rack No</label>
                            <input type="text" class="form-control" name="rack_no" id="rack_no" placeholder="Rack No" tabindex="13" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="remarks">Remarks</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Enter Remarks" tabindex="14">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="purpose_work">Purpose of Work</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="purpose_work" id="purpose_work" placeholder="Enter Purpose of Work" tabindex="15">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="prodn_charge">Prodn In Charge</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="prodn_charge" id="prodn_charge" placeholder="Prodn In Charge" tabindex="16" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-primary" id="submit_production_indent_creation">Submit</button>
    </div>
</div>