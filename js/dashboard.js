google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawSalesReport);
google.charts.setOnLoadCallback(drawProductDetails);

function drawSalesReport() {
    const data = google.visualization.arrayToDataTable([
        ['Product', 'Remaining Quantity', 'Sold Quantity'],
        ['Product 1', 500, 200],
        ['Product 2', 400, 300],
        ['Product 3', 300, 400],
        ['Product 4', 200, 500],
        ['Product 5', 100, 600],
    ]);

    const options = {
        title: 'Sales Report',
        bars: 'vertical',
        height: '100%',  /* Make height responsive */
        width: '100%'    /* Make width responsive */
    };

    const chart = new google.visualization.ColumnChart(document.getElementById('salesReport'));
    chart.draw(data, options);

    // Redraw the chart when the window is resized
    window.addEventListener('resize', function () {
        chart.draw(data, options);
    });
}

function drawProductDetails() {
    const data = google.visualization.arrayToDataTable([
        ['Product', 'Percentage'],
        ['Product 1', 20],
        ['Product 2', 30],
        ['Product 3', 25],
        ['Product 4', 15],
        ['Product 5', 10],
    ]);

    const options = {
        title: 'Product Details',
        pieHole: 0.4, // Make it a donut chart
        height: '100%',  /* Make height responsive */
        width: '100%'    /* Make width responsive */
    };

    const chart = new google.visualization.PieChart(document.getElementById('productDetails'));
    chart.draw(data, options);

    // Redraw the chart when the window is resized
    window.addEventListener('resize', function () {
        chart.draw(data, options);
    });
}
function getValueAt(column, dataTable, row) {
    return dataTable.getFormattedValue(row, column);
}
google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" }],
        ["Category 1", 8.94, "#b87333"],
        ["Category 2", 10.49, "silver"],
        ["Category 3", 19.30, "gold"],
        ["Category 4", 21.45, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
        {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
        },
        2]);

    var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: '100%',
        height: '100%',  // Adjust to take 100% of the available space
        bar: { groupWidth: "95%" },
        legend: { position: "none" },
    };

    var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
    chart.draw(view, options);
}

// Redraw chart when window is resized
window.onresize = function () {
    drawChart(); // Redraw chart on window resize for responsiveness
};
