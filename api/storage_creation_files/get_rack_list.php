<?php
require "../../ajaxconfig.php";

$rack_arr = array();
// Prepare the query
$qry = $pdo->prepare("SELECT id, rack FROM rack");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($rack_info = $qry->fetch(PDO::FETCH_ASSOC)) {
        $rack_info['action'] = "<span class='icon-border_color rackActionBtn' value='" . $rack_info['id'] . "'>   </span>   <span class='icon-trash-2 rackDeleteBtn' value='" . $rack_info['id'] . "'></span>";
        $rack_arr[] = $rack_info;
    }
}
$pdo = null; //Connection Close.
echo json_encode($rack_arr);