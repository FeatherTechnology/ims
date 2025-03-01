<?php
require "../../ajaxconfig.php";

$store_arr = [];

// Prepare the query
$qry = $pdo->prepare("SELECT sl.id, slm.storage, r.rack, c.compartment, sl.palette 
    FROM storage_location sl 
    LEFT JOIN storage_location_modal slm ON sl.storage_location = slm.id  
    LEFT JOIN rack r ON sl.rack = r.id 
    LEFT JOIN compartment c ON sl.compartment = c.id
    ORDER BY sl.id DESC
");

// Execute the query 
$qry->execute();


if ($qry->rowCount() > 0) {
    while ($store_info = $qry->fetch(PDO::FETCH_ASSOC)) {

        // Assign action buttons correctly
        $store_info['action'] = "<span class='icon-border_color storeActionBtn' value='" . $store_info['id'] . "'>&nbsp;&nbsp;&nbsp;</span><span class='icon-trash-2 storeDeleteBtn' value='" . $store_info['id'] . "'></span>";

        // Push data to staff array
        $store_arr[] = $store_info;
    }
}

// Close connection
$pdo = null;

// Return JSON response
echo json_encode($store_arr);


