<?php
require "../../ajaxconfig.php";

$department_arr = array();
// Prepare the query
$qry = $pdo->prepare("SELECT id, department FROM department");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($department_info = $qry->fetch(PDO::FETCH_ASSOC)) {
        $department_info['action'] = "<span class='icon-border_color departmentActionBtn' value='" . $department_info['id'] . "'>   </span>  <span class='icon-trash-2 departmentDeleteBtn' value='" . $department_info['id'] . "'></span>";
        $department_arr[] = $department_info;
    }
}
$pdo = null; //Connection Close.
echo json_encode($department_arr);