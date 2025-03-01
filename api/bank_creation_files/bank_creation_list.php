<?php
require "../../ajaxconfig.php";

$bank_arr = [];

// Prepare the query
$qry = $pdo->prepare("SELECT id, bank_name, account_No, account_holder, branch, swift_code, ifsc_code, ad_code  FROM bank_creation ORDER BY id DESC");

// Execute the query 
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($bank_info = $qry->fetch(PDO::FETCH_ASSOC)) {

        // Assign action buttons correctly
        $bank_info['action'] = "<span class='icon-border_color bankActionBtn' value='" . $bank_info['id'] . "'>&nbsp;&nbsp;&nbsp;</span><span class='icon-trash-2 bankDeleteBtn' value='" . $bank_info['id'] . "'></span>";

        // Push data to staff array
        $bank_arr[] = $bank_info;
    }
}

// Close connection
$pdo = null;

// Return JSON response
echo json_encode($bank_arr);
