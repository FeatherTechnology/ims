<?php
require "../../ajaxconfig.php";

$storage_arr = array();
// Prepare the query
$qry = $pdo->prepare("SELECT id, storage FROM storage_location_modal");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($storage_info = $qry->fetch(PDO::FETCH_ASSOC)) {
        $storage_info['action'] = "<span class='icon-border_color storageActionBtn' value='" . $storage_info['id'] . "'>   </span>   <span class='icon-trash-2 storageDeleteBtn' value='" . $storage_info['id'] . "'></span>";
        $storage_arr[] = $storage_info;
    }
}
$pdo = null; //Connection Close.
echo json_encode($storage_arr);