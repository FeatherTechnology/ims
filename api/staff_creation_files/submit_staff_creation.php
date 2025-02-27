<?php
require '../../ajaxconfig.php';
@session_start();
$user_id = $_SESSION['user_id'];

$employee_id = $_POST['employee_id'];
$employee_name = $_POST['employee_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$staff_creation_id = $_POST['staff_creation_id'];


// Common parameters array
$params = [
    ':employee_id' => $employee_id,
    ':employee_name' => $employee_name,
    ':gender' => $gender,
    ':email' => $email,
    ':mobile_no' => $mobile_no,
    ':department' => $department,
    ':designation' => $designation,
    ':user_id' => $user_id
];

// Check if we are updating or inserting
if ($staff_creation_id !== '') {
    // Update query with placeholders
    $qry = $pdo->prepare("UPDATE `staff_creation` SET `employee_id` = :employee_id, `employee_name` = :employee_name, `gender` = :gender, `email` = :email, `mobile_no` = :mobile_no, `department` = :department, `designation` = :designation, `status` = '1', `update_login_id` = :user_id, `updated_on` = NOW() WHERE `id` = :staff_creation_id");

    // Add staff_creation_id to the parameters array for update query
    $params[':staff_creation_id'] = $staff_creation_id;
    $result = $qry->execute($params) ? 1 : 2;
} else {
    // Insert query with placeholders
    $qry = $pdo->prepare("INSERT INTO `staff_creation` (`employee_id`, `employee_name`, `gender`, `email`, `mobile_no`, `department`, `designation`, `status`, `insert_login_id`, `created_on`) VALUES (:employee_id, :employee_name, :gender, :email, :mobile_no, :department, :designation, '1', :user_id, NOW())");

    $result = $qry->execute($params) ? 3 : 2;
}



echo json_encode($result);
