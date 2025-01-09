<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_product"><span class="fa fa-plus"></span>&nbsp; Add Product Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="product_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <table id="product_create" class="table custom-table">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Product Code</th>
                            <th>Species</th>
                            <th>Treatment</th>
                            <th>Glaze %</th>
                            <th>Type</th>
                            <th>Variety</th>
                            <th>Freezing</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="product_creation_content" style="display: none;">
    <div class="card">
        <div class="col-12">
            <div class="card-header">
                <div class="card-title">Product Creation</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="role">Product Code</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" name="role" id="role" placeholder="TW001" tabindex="1" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="species">Species</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="species" id="species" placeholder="Enter Species" tabindex="2">
                                <option>Select Species</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="treatment">Treatment</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="treatment" id="treatment" placeholder="Enter Treatment" tabindex="3">
                                <option>Select Treatment</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="glaze" id="glaze" placeholder="Enter Glaze" tabindex="4">
                                <option>Select Glaze %</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="type">Type</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="type" id="type" placeholder="Enter Type" tabindex="5">
                                <option>Select Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="variety">Variety</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="variety" id="variety" placeholder="Enter Variety" tabindex="6">
                                <option>Select Variety</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="freezing">Freezing</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="freezing" id="freezing" placeholder="Enter Freezing" tabindex="7">
                                <option>Select Freezing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="grade">Grade</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade" tabindex="8">
                                <option>Select Grade</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" id="submit_user_creation">Excel Upload</button>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" id="submit_user_creation">Submit</button>
        </div>
    </div>
</div>