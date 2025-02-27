<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$department = $_POST['department'];
$id = $_POST['id'];

// Check if the department already exists, ignoring spaces
$qry = $pdo->prepare("SELECT id FROM `department` WHERE REPLACE(TRIM(department), ' ', '') = REPLACE(TRIM(:department), ' ', '')");
$qry->execute([':department' => $department]);

if ($qry->rowCount() > 0) {
    $result = 0; // Already exists
} else {
    // Check if it's an update or insert
    if ($id != '0' && $id != '') {
        // Update query
        $qry = $pdo->prepare("UPDATE `department` SET `department` = :department, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :id");
        $qry->execute([':department' => $department, ':user_id' => $user_id, ':id' => $id]);
        $result = 1; // Update
    } else {
        // Insert query
        $qry = $pdo->prepare("INSERT INTO `department` (`department`, `insert_login_id`, `created_on`) VALUES (:department, :user_id, NOW())");
        $qry->execute([':department' => $department, ':user_id' => $user_id]);
        $result = 2; // Insert
    }
}

$pdo = null; //Close connection.
echo json_encode($result);
