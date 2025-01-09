<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_production_indent"><span class="fa fa-plus"></span>&nbsp; Add production indent Creation</button>
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
                        <th>Handover time</th>
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
                <div class="card-title">Production Indent</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="indent_id">Indent ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="indent_id" id="indent_id" placeholder="Enter Indent ID" tabindex="1">
                        </div>
                    </div>
                    <div class="col-4">
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
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="hours">Time</label><span class="text-danger">*</span>
                            <div class="form-row">
                                <div class="col">
                                    <input type="number" class="form-control" id="hours" name="hours" min="1" max="12" placeholder="HH" tabindex="6">
                                </div>
                                <div class="col-auto">
                                    <span>:</span>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" id="minutes" name="minutes" min="0" max="59" placeholder="MM" tabindex="7">
                                </div>
                                <div class="col">
                                    <select class="form-control" id="ampm" name="ampm" tabindex="8">
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
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