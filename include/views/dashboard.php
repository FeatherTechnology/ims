<style>
    h1 {
        text-align: center;
        margin: 20px 0;
        color: #333;
    }

    /* Sales Report Chart Container */
    #salesReport {
        width: 100%;
        /* Responsive width */
        height: 400px;
        /* Default height */
    }

    /* Product Details Chart Container */
    #productDetails {
        width: 100%;
        /* Responsive width */
        height: 400px;
        /* Default height */
    }

    /* Bar chart container */
    #barchart_values {
        width: 100%;
        /* Full width for responsive chart */
        height: 400px;
        /* Default height */
    }

    #purchase_details {
        width: 100%;
        height: 359px;
    }

    /* Responsive design for smaller screen sizes */
    @media (max-width: 968px) {

        #salesReport,
        #productDetails,
        #barchart_values {
            height: 300px;
            /* Adjust height for smaller screens */
        }

        .row {
            flex-direction: column;
            /* Stack columns vertically */
        }

        .col-md-6 {
            width: 100%;
            /* Take full width for small screens */
        }
    }

    @media (max-width: 880px) {

        #salesReport,
        #productDetails,
        #barchart_values {
            height: 250px;
            /* Adjust height for very small screens */
        }

        .card-body {
            padding: 10px;
            /* Reduce padding */
        }
    }


    table {
        border-collapse: collapse;
        width: 100%;
        /* Full width of the container */
        font-size: 16px;
        text-align: left;
        background-color: #fff;
    }

    table th,
    table td {
        border: 1px solid #ddd;
        padding: 16px;
    }

    table th {
        background-color: #4285F4;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Responsive design for the table */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        table th,
        table td {
            padding: 10px;
        }
    }

    @media (max-width: 480px) {
        table {
            font-size: 12px;
        }

        table th,
        table td {
            padding: 8px;
        }
    }

    #categoryQuotationChart {
        width: 100%;
        /* Responsive width */
        height: 400px;
        /* Default height */
    }

    /* Adjust chart height for smaller devices */
    @media (max-width: 768px) {
        #categoryQuotationChart {
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        #categoryQuotationChart {
            height: 250px;
        }
    }

    .sixtysix {
        font-size: 80px;
        font-weight: bold;
        margin-left: 30px;
        margin-top: 50px;
    }

    .totalvendors {
        font-size: 30px;
        font-weight: bold;
        margin-left: 30px;
        margin-top: -40px;
    }

    .groupusers {
        width: 200px;
        margin-left: 220px;
        margin-top: -180px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;


    }

    /* Metric card styling */
    .metric {
        text-align: center;
        font-family: Arial, sans-serif;
        flex: 1;
        margin: 0 10px;
        /* Add spacing between metrics */
    }

    .metric .number {
        font-size: 50px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .metric .label,
    .metric .labels {
        font-size: 18px;
        color: #666;
    }

    .metric img {
        width: 80px;
        height: 80px;
        margin-top: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .footer-container {
            flex-wrap: wrap;
            /* Allow metrics to stack on smaller screens */
            text-align: center;
        }

        .metric {
            flex: 0 0 45%;
            /* Two metrics per row on smaller screens */
            margin: 10px 0;
        }

        .metric img {
            width: 60px;
            height: 60px;
        }
    }

    @media (max-width: 480px) {
        .metric {
            flex: 0 0 100%;
            /* Full width per metric on very small screens */
        }

        .metric .number {
            font-size: 35px;
        }

        .metric img {
            width: 50px;
            height: 50px;
        }
    }

    /* Adjustments for screens smaller than 768px */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
        }

        .metric {
            width: 80%;
            /* Allow more width for each metric */
            margin-bottom: 15px;
        }

        .metric .number {
            font-size: 40px;
        }

        .metric img {
            width: 60px;
            height: 60px;
        }
    }

    /* Adjustments for very small screens (less than 480px) */
    @media (max-width: 480px) {
        .footer-container {
            padding: 15px;
        }

        .metric {
            width: 90%;
            /* Even larger width for very small screens */
            margin-bottom: 10px;
        }

        .metric .number {
            font-size: 35px;
        }

        .metric img {
            width: 50px;
            height: 50px;
        }
    }

    .category {
        width: 50px;
    }

    /* Additional styling for the rest of the page */
    h1 {
        text-align: center;
        margin: 20px 0;
        color: #333;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-md-6 {
        width: 50%;
        padding: 10px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
    }
</style>

<h1>Inventory Management Dashboard</h1>

<div class="main-container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Stock > 20 Days</h4>
                    <div id="salesReport"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Stock > 30 Days</h4>
                    <div id="productDetails"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Stock In Hand </h4>
                    <div class="table-container" id="purchase_details">
                        <table>
                            <thead>
                                <tr>
                                    <th>Vendor</th>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Purchase Rate</th>
                                    <th>Sales Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vendor 1</td>
                                    <td>Category A</td>
                                    <td>Product 1</td>
                                    <td>50</td>
                                    <td>$40</td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td>Vendor 2</td>
                                    <td>Category B</td>
                                    <td>Product 2</td>
                                    <td>70</td>
                                    <td>$35</td>
                                    <td>$45</td>
                                </tr>
                                <tr>
                                    <td>Vendor 3</td>
                                    <td>Category C</td>
                                    <td>Product 3</td>
                                    <td>30</td>
                                    <td>$25</td>
                                    <td>$30</td>
                                </tr>
                                <tr>
                                    <td>Vendor 4</td>
                                    <td>Category D</td>
                                    <td>Product 4</td>
                                    <td>90</td>
                                    <td>$20</td>
                                    <td>$25</td>
                                </tr>
                                <tr>
                                    <td>Vendor 5</td>
                                    <td>Category E</td>
                                    <td>Product 5</td>
                                    <td>60</td>
                                    <td>$50</td>
                                    <td>$60</td>
                                </tr>
                                <tr>
                                    <td>Vendor 6</td>
                                    <td>Category F</td>
                                    <td>Product 6</td>
                                    <td>70</td>
                                    <td>$60</td>
                                    <td>$70</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Against Order </h4>
                    <div class="table-container" id="purchase_details">
                        <table>
                            <thead>
                                <tr>
                                    <th>Vendor</th>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Purchase Rate</th>
                                    <th>Sales Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vendor 1</td>
                                    <td>Category A</td>
                                    <td>Product 1</td>
                                    <td>50</td>
                                    <td>$40</td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td>Vendor 2</td>
                                    <td>Category B</td>
                                    <td>Product 2</td>
                                    <td>70</td>
                                    <td>$35</td>
                                    <td>$45</td>
                                </tr>
                                <tr>
                                    <td>Vendor 3</td>
                                    <td>Category C</td>
                                    <td>Product 3</td>
                                    <td>30</td>
                                    <td>$25</td>
                                    <td>$30</td>
                                </tr>
                                <tr>
                                    <td>Vendor 4</td>
                                    <td>Category D</td>
                                    <td>Product 4</td>
                                    <td>90</td>
                                    <td>$20</td>
                                    <td>$25</td>
                                </tr>
                                <tr>
                                    <td>Vendor 5</td>
                                    <td>Category E</td>
                                    <td>Product 5</td>
                                    <td>60</td>
                                    <td>$50</td>
                                    <td>$60</td>
                                </tr>
                                <tr>
                                    <td>Vendor 6</td>
                                    <td>Category F</td>
                                    <td>Product 6</td>
                                    <td>70</td>
                                    <td>$60</td>
                                    <td>$70</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12  col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="footer-container">
                    
                        <div class="metric">
                            <div class="number">47</div>
                            <div class="label">Today Production WIP Line Item</div>
                            <img src="./img/total_production.jpg" alt="Categories Icon">
                        </div>
                        <div class="metric">
                            <div class="number">225</div>
                            <div class="labels">Sale Deliverable Line Item </div>
                            <img src="img/product.jpg" alt="Products Icon">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>