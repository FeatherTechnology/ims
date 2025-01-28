<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_product"><span class="fa fa-plus"></span>&nbsp; Add Product Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="product_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-12" style="overflow-x:auto;">
                <table id="product_create" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Species</th>
                            <th>Variety</th>
                            <th>Treatment</th>
                            <th>Freezing</th>
                            <th>Glaze %</th>
                            <th>Grade</th>
                            <th>Type of Packing</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>VNMI</td>
                            <td>EZPL</td>
                            <td>Soaked</td>
                            <td>IQF</td>
                            <td>Nw / Nc</td>
                            <td>8 / 12</td>
                            <td>1 x 10Kgs</td>
                            <td class="icon-border_color"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>HLSO</td>
                            <td>EZPL</td>
                            <td>Unsoaked</td>
                            <td>Block</td>
                            <td>Nw / Nc</td>
                            <td>13 / 15</td>
                            <td>6 x 1.8Kgs</td>
                            <td class="icon-border_color"></td>
                        </tr>
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
                                <option selected> VNMI</option>
                                <option>BT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="treatment">Treatment</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="treatment" id="treatment" placeholder="Enter Treatment" tabindex="3">
                                <option>Select Treatment</option>
                                <option selected> Soaked</option>
                                <option>Unsoaked</option>
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
                                <option selected> Nw / Nc</option>
                                <option>20 % Glaze</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="type">Type</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="type" id="type" placeholder="Enter Type" tabindex="5">
                                <option>Select Type</option>
                                <option selected>1 x 10Kgs</option>
                                <option>10 X 1Kgs</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="variety">Variety</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="variety" id="variety" placeholder="Enter Variety" tabindex="6">
                                <option>Select Variety</option>
                                <option selected>EZPL</option>
                                <option>HLSO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="freezing">Freezing</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="freezing" id="freezing" placeholder="Enter Freezing" tabindex="7">
                                <option>Select Freezing</option>
                                <option selected>IQF</option>
                                <option>BLOCK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="grade">Grade</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade" tabindex="8">
                                <option>Select Grade</option>
                                <option selected>8 / 12</option>
                                <option>4 / 6</option>
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