<form id="istock_return_form">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">Physical Stock</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="sys_date">Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="sys_date" id="sys_date" tabindex="1">
                        </div>
                    </div>
                    <br>
                    <div class="col-12" style="overflow-x:auto;">
                        <table id="order_create" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                                    <th colspan="5" style="vertical-align: middle;">Book Details</th>
                                    <th colspan="3" style="vertical-align: middle;">Physical Details</th>
                                    <th rowspan="2" style="vertical-align: middle;">Difference</th>
                                </tr>
                                <tr>
                                    <th style="vertical-align: middle;">Product Code</th>
                                    <th style="vertical-align: middle;">Product Description</th>
                                    <th style="vertical-align: middle;">Bar Code</th>
                                    <th style="vertical-align: middle;">Palette Number</th>
                                    <th style="vertical-align: middle;">Quantity</th>
                                    <th style="vertical-align: middle;">Bar Code</th>
                                    <th style="vertical-align: middle;">Palette Number</th>
                                    <th style="vertical-align: middle;">Quantity</th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
            <button type="button" class="btn btn-primary" id="submit_inter_transfer">Submit</button>
        </div>
                </div>
            </div>
        </div>
    </div>
</form>