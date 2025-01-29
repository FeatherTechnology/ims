<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_product_category"><span class="fa fa-plus"></span>&nbsp; Add Product Category Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="product_category_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-12" style="overflow-x:auto;">
                <table id="product_category_create" class="table table-bordered ">
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
                    <tbody >
                        <tr>
                            <td>1</td>
                            <td>VNMI</td>
                            <td>EZPL</td>
                            <td>Soaked</td>
                            <td>IQF</td>
                            <td>Nw / Nc</td>
                            <td>8 / 12</td>
                            <td>1 * 10Kgs</td>
                            <td class="icon-border_color"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BT</td>
                            <td>EZPL</td>
                            <td>Soaked</td>
                            <td>IQF</td>
                            <td>20% Glaze</td>
                            <td>4 / 6</td>
                            <td>10 * 1Kgs</td>
                            <td class="icon-border_color"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="product_category_creation_content" style="display: none;">
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Product Category</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="species">Species</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="species" id="species" placeholder="Enter Species" tabindex="1">
                                <option>Select Species</option>
                                <option selected>VNMI</option>
                                <option>BT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_species_modal" tabindex="2"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="treatment">Treatment</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="treatment" id="treatment" placeholder="Enter Treatment" tabindex="3">
                                <option>Select Treatment</option>
                                <option selected>Soaked</option>
                                <option>Unsoaked</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_treatment_modal" tabindex="4"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="glaze">Glaze %</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="glaze" id="glaze" placeholder="Enter Glaze" tabindex="5">
                                <option>Select Glaze %</option>
                                <option selected>Nw/Nc</option>
                                <option>20% Glaze</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_glaze_modal" tabindex="6"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="type">Type</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="type" id="type" placeholder="Enter Type" tabindex="7">
                                <option>Select Type</option>
                                <option selected>1*10Kgs</option>
                                <option>10*1Kgs</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_type_modal" tabindex="8"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="variety">Variety</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="variety" id="variety" placeholder="Enter Variety" tabindex="9">
                                <option>Select Variety</option>
                                <option selected>EZPL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_variety_modal" tabindex="10"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="freezing">Freezing</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="freezing" id="freezing" placeholder="Enter Freezing" tabindex="11">
                                <option>Select Freezing</option>
                                <option selected>IQF</option>
                                <option>BLOCK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_freezing_modal" tabindex="12"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="grade">Grade</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade" tabindex="13">
                                <option>Select Grade</option>
                                <option selected>8/12</option>
                                <option>4/6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_grade_modal" tabindex="14"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="hs_code">HS Code</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="hs_code" id="hs_code" tabindex="15">
                                <option>Select HS Code</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_grade_modal" tabindex="16"><span class="icon-add"><span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" id="submit_product_category_creation" tabindex="17">Excel Upload</button>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" id="submit_product_category_creation" tabindex="18">Submit</button>
        </div>
    </div>
    <!--------------------------------------------------------------------- Modal Box for species --------------------------------------------------------------->

    <div class="modal fade" id="add_species_modal" tabindex="-1">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content" style="background-color: white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Species</h5>
                    <button type="button" class="close" data-dismiss="modal" tabindex="1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="add_species">Species</label><span class="text-danger">*</span>
                                <input class="form-control" name="add_storages" id="add_str" tabindex="2" placeholder="Enter Species">
                                <input type="hidden" id="add_species_id" value='0'>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <button name="submit_species" id="submit_species" class="btn btn-primary" tabindex="3" style="margin-top: 18px;"><span class="icon-check"></span>&nbsp;Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                        <table id="species_creation_table" class="table ">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Species</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" tabindex="4">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>