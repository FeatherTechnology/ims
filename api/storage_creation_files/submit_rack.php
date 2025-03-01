<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$rack = $_POST['rack'];
$id = $_POST['id'];

// Check if the rack already exists, ignoring spaces
$qry = $pdo->prepare("SELECT id FROM `rack` WHERE REPLACE(TRIM(rack), ' ', '') = REPLACE(TRIM(:rack), ' ', '')");
$qry->execute([':rack' => $rack]);

if ($qry->rowCount() > 0) {
    $result = 0; // Already exists
} else {
    // Check if it's an update or insert
    if ($id != '0' && $id != '') {
        // Update query
        $qry = $pdo->prepare("UPDATE `rack` SET `rack` = :rack, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :id");
        $qry->execute([':rack' => $rack, ':user_id' => $user_id, ':id' => $id]);
        $result = 1; // Update
    } else {
        // Insert query
        $qry = $pdo->prepare("INSERT INTO `rack` (`rack`, `insert_login_id`, `created_on`) VALUES (:rack, :user_id, NOW())");
        $qry->execute([':rack' => $rack, ':user_id' => $user_id]);
        $result = 2; // Insert
    }
}

$pdo = null; //Close connection.
echo json_encode($result);
