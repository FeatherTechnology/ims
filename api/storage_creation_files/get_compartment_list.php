<?php
require "../../ajaxconfig.php";

$compartment_arr = array();
// Prepare the query
$qry = $pdo->prepare("SELECT id, compartment FROM compartment");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($compartment_info = $qry->fetch(PDO::FETCH_ASSOC)) {
        $compartment_info['action'] = "<span class='icon-border_color compartmentActionBtn' value='" . $compartment_info['id'] . "'>    </span>   <span class='icon-trash-2 compartmentDeleteBtn' value='" . $compartment_info['id'] . "'></span>";
        $compartment_arr[] = $compartment_info;
    }
}
$pdo = null; //Connection Close.
echo json_encode($compartment_arr);