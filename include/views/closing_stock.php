<style>
    @media (max-width: 1200px) {
        #dates {
            padding-top: 20px !important;
        }
    }
</style>
<div class="closing_stock_report_content">
    <div class="card">
        <div class="col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="radio-containers" style="display: flex; flex-wrap: wrap; justify-content:center; align-items:center;" id="main_radio">
                            <div class="selector">
                                <div class="selector-item">
                                    <input type="radio" id="mtn" name="customer_data_type" class="selector-item_radio" value="MTN" checked>
                                    <label for="mtn" class="selector-item_label">As on date</label>
                                </div>
                                <div class="selector-item">
                                    <input type="radio" id="sales" name="customer_data_type" class="selector-item_radio" value="sales">
                                    <label for="sales" class="selector-item_label">For the period</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12" id="dates">
                        <form class="form-inline" style="display: flex; flex-wrap: wrap; justify-content:center; align-items:center;">
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label for="from_date" style="font-size: 16px; margin-right:20px">From Date:</label>
                                <input type="date" class="form-control" id="from_date" name="from_date">
                            </div>
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label for="to_date" style="font-size: 16px; margin-right:20px; margin-left:20px">To Date:</label>
                                <input type="date" class="form-control" id="to_date" name="to_date">
                            </div>
                        </form>
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
</div>
<div id="report_table_content" style="display: none;">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-light" id="run">Excel</button>
        </div>
        <div class="card-body">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" style="overflow-x:auto;">
                <table id="report_create" class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">S.NO</th>
                            <th rowspan="2" style="vertical-align: middle;">Org.</th>
                            <th rowspan="2" style="vertical-align: middle;">Treatment</th>
                            <th rowspan="2" style="vertical-align: middle;">Freezing</th>
                            <th rowspan="2" style="vertical-align: middle;">Glaze %</th>
                            <th rowspan="2" style="vertical-align: middle;">Variety</th>
                            <th rowspan="2" style="vertical-align: middle;">Species</th>
                            <th rowspan="2" style="vertical-align: middle;">Grade</th>
                            <th rowspan="2" style="vertical-align: middle;">Pack Size</th>
                            <th rowspan="2" style="vertical-align: middle;">Pouch</th>
                            <th rowspan="2" style="vertical-align: middle;">Pouch Wt.</th>
                            <th rowspan="2" style="vertical-align: middle;">MC Wt.</th>
                            <th colspan="4" style="vertical-align: middle;">Closing Stock</th>
                        </tr>
                        <tr class="table-bordered">
                            <th style="vertical-align: middle;">MC Packed</th>
                            <th style="vertical-align: middle;">No. of Pouch</th>
                            <th style="vertical-align: middle;">Pouch Kg</th>
                            <th style="vertical-align: middle;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TWL</td>
                            <td>Soaked</td>
                            <td>IQF</td>
                            <td>Nw/Nc</td>
                            <td>EZPL</td>
                            <td>VNMI</td>
                            <td>8/12</td>
                            <td>1*10Kgs</td>
                            <td>1</td>
                            <td>10</td>
                            <td>10</td>
                            <td>12</td>
                            <td>-</td>
                            <td>-</td>
                            <td>120</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TWL</td>
                            <td>Unsoaked</td>
                            <td>BLOCK</td>
                            <td>25%Glaze</td>
                            <td>HLSO</td>
                            <td>BT</td>
                            <td>4/6</td>
                            <td>10*2lbs</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>2</td>
                            <td>5</td>
                            <td>-</td>
                            <td>106</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>