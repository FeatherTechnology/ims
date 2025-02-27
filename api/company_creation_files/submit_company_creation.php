<?php
require '../../ajaxconfig.php';
@session_start();
$user_id = $_SESSION['user_id'];
if (!empty($_FILES['company_logo']['name'])) {
    $path = "../../uploads/company_creation/";
    $oldPic = $_POST['company_logo_edit'];

    if (!empty($oldPic) && file_exists($path . $oldPic)) {
        unlink($path . $oldPic);
    }

    $fileExtension = pathinfo($_FILES['company_logo']['name'], PATHINFO_EXTENSION);
    $picture = uniqid() . '.' . $fileExtension;

    move_uploaded_file($_FILES['company_logo']['tmp_name'], $path . $picture);
} else {
    $picture = $_POST['company_logo_edit'];
}

$company_name = $_POST['company_name'];
$cin_no = $_POST['cin_no'];
$floor_no = $_POST['floor_no'];
$street = $_POST['street'];
$place = $_POST['place'];
$state = $_POST['state'];
$country = $_POST['country'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$fax_no = $_POST['fax_no'];
$website = $_POST['website'];
$gst_no = $_POST['gst_no'];
$ie_code = $_POST['ie_code'];
$login_shorter_name = $_POST['login_shorter_name'];
$year = $_POST['year'];
$company_id = $_POST['company_id'];

// Prepare common parameter array
$params = [
    ':company_name' => $company_name,
    ':cin_no' => $cin_no,
    ':floor_no' => $floor_no,
    ':street' => $street,
    ':place' => $place,
    ':state' => $state,
    ':country' => $country,
    ':phone_no' => $phone_no,
    ':email' => $email,
    ':fax_no' => $fax_no,
    ':website' => $website,
    ':picture' => $picture,
    ':gst_no' => $gst_no,
    ':ie_code' => $ie_code,
    ':login_shorter_name' => $login_shorter_name,
    ':year' => $year,
];

// If the company ID exists, update
if ($company_id != '') {
    // Add company_id to the parameters for the UPDATE query
    $params[':company_id'] = $company_id;

    // Update query using placeholders
    $qry = $pdo->prepare("UPDATE `company_creation` SET 
        `company_name` = :company_name, 
        `cin_no` = :cin_no, 
        `floor_no` = :floor_no, 
        `street` = :street, 
        `place` = :place, 
        `state` = :state, 
        `country` = :country, 
        `phone_no` = :phone_no, 
        `email` = :email, 
        `fax_no` = :fax_no, 
        `website` = :website, 
        `picture` = :picture, 
        `gst_no` = :gst_no, 
        `ie_code` = :ie_code, 
        `login_shorter_name` = :login_shorter_name, 
        `year` = :year 
    WHERE `id` = :company_id");

    // Execute the query
    $result = $qry->execute($params) ? 1 : 2;
} else {
    // Insert query using placeholders
    $qry = $pdo->prepare("INSERT INTO `company_creation` 
        (`company_name`, `cin_no`, `floor_no`, `street`, `place`, `state`, `country`, `phone_no`, `email`, `fax_no`, `website`, `picture`, `gst_no`, `ie_code`, `login_shorter_name`, `year`, `insert_login_id`, `created_on`) 
    VALUES 
        (:company_name, :cin_no, :floor_no, :street, :place, :state, :country, :phone_no, :email, :fax_no, :website, :picture, :gst_no, :ie_code, :login_shorter_name, :year, :user_id, NOW())");

    // Add user_id to parameters for the INSERT query
    $params[':user_id'] = $user_id;

    // Execute the query
    $result = $qry->execute($params) ? 3 : 2;
}

echo json_encode($result);
