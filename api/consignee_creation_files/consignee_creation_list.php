<?php
require '../../ajaxconfig.php';

$consignee_list_arr = array();

// Prepare the query
$qry = $pdo->prepare("SELECT cc.id, cc.consignee_name, cc.address, cc.address_1, cc.place, cc.pin_code, st.state_name, cc.country, cc.email, cc.mobile_number, cc.agent_name, cc.mobile_number_agent, cc.email_agent, bc.bank_name, cc.account_no, cc.account_holder , cc.branch , cc.swift_code , cc.ifsc_code , cc.gst_no 
    FROM 
        consignee_creation cc
    LEFT JOIN 
        states st ON cc.state = st.id
    LEFT JOIN 
        bank_creation bc ON cc.bank_name = bc.id
    WHERE 
    cc.status = 1 
    ORDER BY cc.id DESC");

// Execute the query
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($consignee_info = $qry->fetch(PDO::FETCH_ASSOC)) {

        $consignee_info['action'] = "<span class='icon-border_color consigneeActionBtn' value='" . $consignee_info['id'] . "'>&nbsp;&nbsp;&nbsp;</span><span class='icon-trash-2 consigneeDeleteBtn' value='" . $consignee_info['id'] . "'></span>";    

        $consignee_list_arr[] = $consignee_info; // Append to the array
    }
}

$pdo = null; //Close Connection.

echo json_encode($consignee_list_arr);
