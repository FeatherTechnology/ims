<div class="card">
    <div class="col-12">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1" style="margin-top: 5px;">
                    <div class="form-group" style="display:flex;">
                        <input type="checkbox" value="">
                        <label class="checkbox-inline ">
                            All
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-2" style="margin-top: 5px;">
                    <div class="form-group" style="display:flex;">
                        <input type="checkbox" value="">
                        <label class="checkbox-inline ">
                            Select Order
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-2" style="margin-left:-150px">
                    <select type="text" class="form-control" name="drop" id="drop">
                        <option>Drop Down</option>
                    </select>
                </div>
                <div class="col-12" style="display: flex; justify-content:center; align-items:center;">
                    <div>
                        <button type="button" class="btn btn-primary" id="run">Run</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="report_table_content" style="display: none;">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-light" id="run">Excel</button>
        </div>
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <table id="report_create" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>PI No</th>
                            <th>Species</th>
                            <th>Size / Grade</th>
                            <th>Order Qty</th>
                            <th>Lot No</th>
                            <th>Bar Code</th>
                            <th>Palette Qty</th>
                            <th>Balance Qty</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div