<style>
    @media (max-width: 1200px){
        #dates{
            padding-top: 20px !important;
        }
    }
</style>
<div class="report_content">
    <div class="card">
        <div class="col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-12"> <!-- Change from col-6 to col-12 col-md-6 for responsiveness -->
                        <div class="radio-containers" style="display: flex; flex-wrap: wrap; justify-content:center; align-items:center;" id="main_radio"> 
                            <div class="selector">
                                <div class="selector-item" >
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
                    <div class="col-xl-6 col-md-12" id="dates"> <!-- Change from col-6 to col-12 col-md-6 for responsiveness -->
                        <form class="form-inline" style="display: flex; flex-wrap: wrap; justify-content:center; align-items:center;">
                            <div class="form-group" style="margin-bottom: 10px;"> <!-- Added margin-bottom for spacing on small screens -->
                                <label for="date" style="font-size: 16px; margin-right:20px">From Date:</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group" style="margin-bottom: 10px;"> <!-- Added margin-bottom for spacing on small screens -->
                                <label for="dates" style="font-size: 16px; margin-right:20px; margin-left:20px">To Date:</label>
                                <input type="date" class="form-control" id="dates" name="dates">
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
                            <th rowspan="2">S.NO</th>
                            <th rowspan="2">Org.</th>
                            <th rowspan="2">Treatment</th>
                            <th rowspan="2">Freezing</th>
                            <th rowspan="2">Glaze %</th>
                            <th rowspan="2">Variety</th>
                            <th rowspan="2">Species</th>
                            <th rowspan="2">Grade</th>
                            <th rowspan="2">Pack Size</th>
                            <th rowspan="2">Pouch</th>
                            <th rowspan="2">Pouch Wt.</th>
                            <th rowspan="2">MC Wt.</th>
                            <th colspan="4">Closing Stock</th>
                        </tr>
                        <tr class="table-bordered">
                            <th>MC Packed</th>
                            <th>No. of Pouch</th>
                            <th>Pouch Kg</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
