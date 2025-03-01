<?php
require "../../ajaxconfig.php";
@session_start();
$user_id = $_SESSION['user_id'];
$compartment = $_POST['compartment'];
$id = $_POST['id'];

// Check if the compartment already exists, ignoring spaces
$qry = $pdo->prepare("SELECT id FROM `compartment` WHERE REPLACE(TRIM(compartment), ' ', '') = REPLACE(TRIM(:compartment), ' ', '')");
$qry->execute([':compartment' => $compartment]);

if ($qry->rowCount() > 0) {
    $result = 0; // Already exists
} else {
    // Check if it's an update or insert
    if ($id != '0' && $id != '') {
        // Update query
        $qry = $pdo->prepare("UPDATE `compartment` SET `compartment` = :compartment, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :id");
        $qry->execute([':compartment' => $compartment, ':user_id' => $user_id, ':id' => $id]);
        $result = 1; // Update
    } else {
        // Insert query
        $qry = $pdo->prepare("INSERT INTO `compartment` (`compartment`, `insert_login_id`, `created_on`) VALUES (:compartment, :user_id, NOW())");
        $qry->execute([':compartment' => $compartment, ':user_id' => $user_id]);
        $result = 2; // Insert
    }
}

$pdo = null; //Close connection.
echo json_encode($result);
