<style>
    @media (max-width: 1200px) {
        #dates {
            padding-top: 20px !important;
        }
    }
</style>
<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_closing_stock"><span class="fa fa-plus"></span>&nbsp; Add Closing Stock Summary Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card closing_stock_table_content">
    <div class="card-body">
        <div class="col-12" style="overflow-x:auto;">
            <table id="closing_stock_create" class="table table-bordered">
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
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="closing_stock_report_content" style="display: none;">
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
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">
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
                </table>
            </div>
        </div>
    </div>
</div>