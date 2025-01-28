<div class="inter_palette_transfer_content">
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Stock Details</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="date">Date</label><span class="text-danger">*</span>
                            <input type="date" class="form-control" name="date" id="date" tabindex="1">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="product_code">Product Code</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="product_code" id="product_code" tabindex="2">
                                <option>Select Product Code</option>
                            </select>
                        </div>
                    </div>
                </div> <br> <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                        <table id="bank_create" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Species</th>
                                    <th>HS Code</th>
                                    <th>Lot No</th>
                                    <th>Variety</th>
                                    <th>Size</th>
                                    <th>Grade</th>
                                    <th>Type of Packing</th>
                                    <th>No of MC's</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                    <td>Display</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
            <div class="card-header">
                <div class="card-title">Palette Inter Transfer</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="existing_Palette">Existing Palette</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="existing_Palette" id="existing_Palette" placeholder="Enter Existing Palette" tabindex="3" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="move_to">Move To</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" name="move_to" id="move_to" tabindex="4">
                                <option>Select Move To</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-4">
                        <div class="form-group">
                            <label for="existing_Palette">Purpose</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="existing_Palette" id="existing_Palette" placeholder="Enter Purpose" tabindex="3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-primary" id="transfer_creation">Transfer</button>
    </div>
</div>