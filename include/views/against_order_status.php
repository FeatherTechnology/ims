
<div class="card against_order_creation">
    <div class="col-12">
        <div class="card-body">
            <div class="row">
                <!-- Checkbox "All" -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="margin-top: 5px;">
                    <div class="form-group" style="display: flex; align-items: center;">
                        <input type="checkbox" value="">
                        <label class="checkbox-inline ml-2">All</label>
                    </div>
                </div>

                <!-- Checkbox "Select Order" -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="margin-top: 5px;">
                    <div class="form-group" style="display: flex; align-items: center;">
                        <input type="checkbox" value="">
                        <label class="checkbox-inline ml-2">Select Order</label>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="margin-top: 5px;">
                    <select class="form-control" name="drop" id="drop">
                        <option>Drop Down</option>
                    </select>
                </div>

                <!-- Run Button -->
                <div class="col-12" style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                    <div>
                        <button type="button" class="btn btn-primary" id="run">Run</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table Content (Initially Hidden) -->
<div id="report_table_content" style="display: none;">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-light" id="run">Excel</button>
        </div>
        <div class="card-body">
            <div class="col-12" style="overflow-x:auto;">
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
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TWL/PRO/114/2024-25</td>
                            <td>VNMI</td>
                            <td>31/35</td>
                            <td>4320</td>
                            <td>2897AM12TW001</td>
                            <td>112AAS45000</td>
                            <td>4320</td>
                            <td>-</td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TWL/PRO/114/2024-25</td>
                            <td>VNMI</td>
                            <td>31/40</td>
                            <td>4320</td>
                            <td>2983AM27TW001</td>
                            <td>112AAS45000</td>
                            <td>4320</td>
                            <td>-</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Responsive Media Queries -->
<style>
    /* Extra small screens (mobile phones, less than 576px) */
    @media (max-width: 575.98px) {
        .card-body .row {
            display: block;
        }

        .col-12 {
            margin-bottom: 15px;
        }

        .col-12 .form-group {
            width: 100%;
            margin-bottom: 10px;
        }

        #drop,
        .btn {
            width: 100%;
        }

        .card-header .btn {
            width: 100%;
        }
    }

    /* Small devices (smaller tablets, from 576px to 767px) */
    @media (min-width: 576px) and (max-width: 767px) {
        .col-sm-4 {
            width: 100%;
            margin-bottom: 5px;
            /* Reduced gap */
        }

        .card-body .row {
            display: block;
        }

        .col-12 .form-group {
            margin-bottom: 10px;
        }

        .btn {
            width: 100%;
        }

        #drop {
            width: 100%;
        }
    }

    /* Medium devices (tablets, from 768px to 991px) */
    @media (min-width: 768px) and (max-width: 991px) {
        .col-md-3 {
            width: 48%;
            margin-bottom: 10px;
            /* Reduced gap */
        }

        .card-body .row {
            display: flex;
            flex-wrap: wrap;
        }

        #drop,
        .btn {
            width: 100%;
        }
    }

    /* Large devices (desktops, from 992px to 1199px) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .col-lg-2 {
            width: 30%;
            margin-bottom: 10px;
            /* Reduced gap */
        }

        .card-body .row {
            display: flex;
        }

        #drop,
        .btn {
            width: 100%;
        }
    }

    /* Extra large devices (large desktops, 1200px and above) */
    @media (min-width: 1200px) {
        .col-xl-2 {
            width: 20%;
        }

        .card-body .row {
            display: flex;
        }

        .col-xl-2 {
            margin-bottom: 10px;
        }
    }
</style>