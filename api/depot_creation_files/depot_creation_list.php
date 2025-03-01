<?php
require "../../ajaxconfig.php";

$depot_arr = [];

// Prepare the query
$qry = $pdo->prepare("SELECT  dc.id, dc.depot_id, dc.depot_name, dc.address, dc.address_1, dc.place, dc.pin_code, st.state_name, dc.contact_number, dc.email, dc.gst_no
    FROM 
        depot_creation dc
    LEFT JOIN 
        states st ON dc.state = st.id
    WHERE 
        st.status = 1
    ORDER BY dc.id DESC");

// Execute the query 
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($depot_info = $qry->fetch(PDO::FETCH_ASSOC)) {

        // Assign action buttons correctly
        $depot_info['action'] = "<span class='icon-border_color depotActionBtn' value='" . $depot_info['id'] . "'>&nbsp;&nbsp;&nbsp;</span><span class='icon-trash-2 depotDeleteBtn' value='" . $depot_info['id'] . "'></span>";

        // Push data to staff array
        $depot_arr[] = $depot_info;
    }
}

// Close connection
$pdo = null;

// Return JSON response
echo json_encode($depot_arr);
