<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];
if ($id != '') {
    // Secure query with prepared statement
    $qry = $pdo->prepare("SELECT consignee_code FROM consignee_creation WHERE id = :id");
    $qry->execute([':id' => $id]);
    $qry_info = $qry->fetch();
    $cus_ID_final = $qry_info['consignee_code'];
} else {
    // Secure query to fetch the last consignee_code
    $qry = $pdo->query("SELECT consignee_code FROM consignee_creation WHERE consignee_code !='' ORDER BY id DESC LIMIT 1");
    
    if ($qry->rowCount() > 0) {
        $qry_info = $qry->fetch();
        // Extract and increment the number part
        $l_no = ltrim(strstr($qry_info['consignee_code'], 'EXC'), 'EXC');
        $l_no = (int)$l_no + 1;
        $cus_ID_final = "EXC" . sprintf('%03d', $l_no);  // Add leading zeros
    } else {
        $cus_ID_final = "EXC001";  // Start with EXC001
    }
}

echo json_encode($cus_ID_final);
?>
