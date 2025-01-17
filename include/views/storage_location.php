<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_storage"><span class="fa fa-plus"></span>&nbsp; Add Storage Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="storage_table_content">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                <table id="storage_create" class="table custom-table">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Storage Location</th>
                            <th>Rack</th>
                            <th>Bay</th>
                            <th>Bin No</th>
                            <th>Bin</th>
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
<div class="storage_creation_content" style="display: none;">
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Storage info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="storage_location">Storage Location</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="storage_location" id="storage_location" placeholder="Enter Storage Location" tabindex="1">
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_storage_modal" tabindex="2"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="rack">Rack</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="rack" id="rack" placeholder="Enter Rack" tabindex="3">
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_rack_modal" tabindex="4"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-3">
                        <div class="form-group">
                            <label for="compartment">Compartment</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="compartment" id="compartment" placeholder="Enter Compartment" tabindex="5">
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-1 text-right" style="margin-top: 18px;">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary modalBtnCss" data-toggle="modal" data-target="#add_compartment_modal" tabindex="6"><span class="icon-add"><span></button>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="palette">palette</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" name="palette" id="palette" placeholder="Enter palette" tabindex="7">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="pal_ette">palette</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="pal_ette" id="pal_ette" placeholder="palette" tabindex="8" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-primary" id="submit_storage_creation">Submit</button>
    </div>

    <!--------------------------------------------------------------------- Modal Box for storage location ---------------------------------------------------->

    <div class="modal fade" id="add_storage_modal" tabindex="-1">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content" style="background-color: white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Storage Location</h5>
                    <button type="button" class="close" data-dismiss="modal" tabindex="1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="add_storage">Storage Location</label><span class="text-danger">*</span>
                                <input class="form-control" name="add_storages" id="add_str" tabindex="2" placeholder="Enter Storage Location">
                                <input type="hidden" id="add_storage_id" value='0'>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <button name="submit_storage" id="submit_storage" class="btn btn-primary" tabindex="3" style="margin-top: 18px;"><span class="icon-check"></span>&nbsp;Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                        <table id="storage_creation_table" class="table ">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Storage Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" tabindex="17">Close</button>
                </div>
            </div>
        </div>
    </div>
<!--------------------------------------------------------------------- Modal Box for storage location ---------------------------------------------------->
    <div class="modal fade" id="add_rack_modal" tabindex="-1">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content" style="background-color: white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Rack</h5>
                    <button type="button" class="close" data-dismiss="modal" tabindex="1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="add_rack">Rack</label><span class="text-danger">*</span>
                                <input class="form-control" name="add_rack" id="add_rack" tabindex="2" placeholder="Enter Rack">
                                <input type="hidden" id="add_rack_id" value='0'>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <button name="submit_rack" id="submit_rack" class="btn btn-primary" tabindex="3" style="margin-top: 18px;"><span class="icon-check"></span>&nbsp;Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                        <table id="rack_creation_table" class="table">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Rack</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" tabindex="17">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------- Modal Box for storage location ---------------------------------------------------->
    <div class="modal fade" id="add_compartment_modal" tabindex="-1">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content" style="background-color: white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Compartment</h5>
                    <button type="button" class="close" data-dismiss="modal" tabindex="1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <label for="add_compartment">Compartment</label><span class="text-danger">*</span>
                                <input class="form-control" name="add_bay" id="add_compartment" tabindex="2" placeholder="Enter Compartment">
                                <input type="hidden" id="add_compartment_modal" value='0'>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                            <div class="form-group">
                                <button name="submit_compartment" id="submit_compartment" class="btn btn-primary" tabindex="3" style="margin-top: 18px;"><span class="icon-check"></span>&nbsp;Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
                        <table id="bay_creation_table" class="table">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Compartment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" tabindex="17">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>