<?php
require '../../ajaxconfig.php';
@session_start();
$user_id = $_SESSION['user_id'];

$consignee_code = $_POST['consignee_code'];
$consignee_name = $_POST['consignee_name'];
$address = $_POST['address'];
$address_1 = $_POST['address_1'];
$place = $_POST['place'];
$pin_code = $_POST['pin_code'];
$state = $_POST['state'];
$country = $_POST['country'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$agent_name = $_POST['agent_name'];
$email_agent = $_POST['email_agent'];
$mobile_number_agent = $_POST['mobile_number_agent'];
$bank_name = $_POST['bank_name'];
$account_no = $_POST['account_no'];
$account_holder = $_POST['account_holder'];
$branch = $_POST['branch'];
$swift_code = $_POST['swift_code'];
$ifsc_code = $_POST['ifsc_code'];
$gst_no = $_POST['gst_no'];
$consignee_creation_id = $_POST['consignee_creation_id'];

// Common parameters array
$params = [
    ':consignee_code' => $consignee_code,
    ':consignee_name' => $consignee_name,
    ':address' => $address,
    ':address_1' => $address_1,
    ':place' => $place,
    ':pin_code' => $pin_code,
    ':state' => $state,
    ':country' => $country,
    ':email' => $email,
    ':mobile_number' => $mobile_number,
    ':agent_name' => $agent_name,
    ':email_agent' => $email_agent,
    ':mobile_number_agent' => $mobile_number_agent,
    ':bank_name' => $bank_name,
    ':account_no' => $account_no,
    ':account_holder' => $account_holder,
    ':branch' => $branch,
    ':swift_code' => $swift_code,
    ':ifsc_code' => $ifsc_code,
    ':gst_no' => $gst_no,
    ':user_id' => $user_id
];

// Check if we are updating or inserting
if ($consignee_creation_id !== '') {
    // Update query with placeholders
    $qry = $pdo->prepare("UPDATE `consignee_creation` SET 
        `consignee_code` = :consignee_code,  `consignee_name` = :consignee_name, `address` = :address, `address_1` = :address_1, `place` = :place,`pin_code` = :pin_code, `state` = :state, `country` = :country, `email` = :email, `mobile_number` = :mobile_number, `agent_name` = :agent_name, `email_agent` = :email_agent, `mobile_number_agent` = :mobile_number_agent, `bank_name` = :bank_name, `account_no` = :account_no,`account_holder` = :account_holder, `branch` = :branch, `swift_code` = :swift_code,`ifsc_code` = :ifsc_code, `gst_no` = :gst_no, `status` = '1', `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :consignee_creation_id");

    // Add consignee_creation_id to the parameters array for update query
    $params[':consignee_creation_id'] = $consignee_creation_id;
    $result = $qry->execute($params) ? 1 : 2;
} else {
    // Insert query with placeholders
    $qry = $pdo->prepare("INSERT INTO `consignee_creation` (`consignee_code`, `consignee_name`, `address`, `address_1`, `place`, `pin_code`, `state`, `country`, `email`, `mobile_number`, `agent_name`, `email_agent`,`mobile_number_agent`, `bank_name`, `account_no`, `account_holder`, `branch`, `swift_code`, `ifsc_code`, `gst_no`, `status`, `insert_login_id`, `created_on`) VALUES (:consignee_code, :consignee_name, :address, :address_1, :place, :pin_code, :state, :country, :email, :mobile_number, :agent_name, :email_agent, :mobile_number_agent, :bank_name, :account_no, :account_holder, :branch, :swift_code, :ifsc_code, :gst_no, '1', :user_id, NOW()
    )");

    $result = $qry->execute($params) ? 3 : 2;
}


echo json_encode($result);
