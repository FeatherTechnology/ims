<?php
require '../../ajaxconfig.php';
@session_start();
$user_id = $_SESSION['user_id'];

$depot_id = $_POST['depot_id'];
$depot_name = $_POST['depot_name'];
$address = $_POST['address'];
$address_1 = $_POST['address_1'];
$place = $_POST['place'];
$pin_code = $_POST['pin_code'];
$state = $_POST['state'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$gst_no = $_POST['gst_no'];
$depot_creation_id = $_POST['depot_creation_id'];

// Common parameters array
$params = [
    ':depot_id' => $depot_id,
    ':depot_name' => $depot_name,
    ':address' => $address,
    ':address_1' => $address_1,
    ':place' => $place,
    ':pin_code' => $pin_code,
    ':state' => $state,
    ':contact_number' => $contact_number,
    ':email' => $email,
    ':gst_no' => $gst_no,
    ':user_id' => $user_id
];

// Check if we are updating or inserting
if ($depot_creation_id !== '') {
    // Update query with placeholders
    $qry = $pdo->prepare("UPDATE `depot_creation` SET `depot_id` = :depot_id, `depot_name` = :depot_name, `address` = :address, `address_1` = :address_1, `place` = :place,`pin_code` = :pin_code, `state` = :state, `contact_number` = :contact_number, `email` = :email, `gst_no` = :gst_no, `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :depot_creation_id");

    // Add depot_creation_id to the parameters array for update query
    $params[':depot_creation_id'] = $depot_creation_id;
    $result = $qry->execute($params) ? 1 : 2;
} else {
    // Insert query with placeholders
    $qry = $pdo->prepare("INSERT INTO `depot_creation` (`depot_id`, `depot_name`, `address`, `address_1`, `place`,`pin_code`, `state`, `contact_number`, `email`, `gst_no`,`insert_login_id`, `created_on`) VALUES (:depot_id, :depot_name, :address, :address_1, :place,:pin_code, :state, :contact_number, :email, :gst_no, :user_id, NOW())");

    $result = $qry->execute($params) ? 3 : 2;
}



echo json_encode($result);

