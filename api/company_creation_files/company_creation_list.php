<?php
require '../../ajaxconfig.php';

$company_list_arr = array();

// Prepare the query
$qry = $pdo->prepare("SELECT cc.id, cc.company_name, cc.cin_no, cc.floor_no, cc.street, cc.place, st.state_name, cc.country, cc.phone_no, cc.email, cc.fax_no, cc.website,
cc.picture, cc.gst_no, cc.ie_code, cc.login_shorter_name FROM company_creation cc  LEFT JOIN  states st ON cc.state = st.id");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($companyInfo = $qry->fetch(PDO::FETCH_ASSOC)) {
        $companyInfo['action'] = "<span class='icon-border_color companyActionBtn' value='" . $companyInfo['id'] . "'></span>";
        $company_list_arr[] = $companyInfo; // Append to the array
    }
}

$pdo = null; //Close Connection.

echo json_encode($company_list_arr);
