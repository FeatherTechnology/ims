<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];
if ($id != '') {
    // Secure query with prepared statement
    $qry = $pdo->prepare("SELECT employee_id FROM staff_creation WHERE id = :id");
    $qry->execute([':id' => $id]);
    $qry_info = $qry->fetch();
    $cus_ID_final = $qry_info['employee_id'];
} else {
    // Secure query to fetch the last employee_id
    $qry = $pdo->query("SELECT employee_id FROM staff_creation WHERE employee_id !='' ORDER BY id DESC LIMIT 1");
    
    if ($qry->rowCount() > 0) {
        $qry_info = $qry->fetch();
        // Extract and increment the number part
        $l_no = ltrim(strstr($qry_info['employee_id'], 'ETW'), 'ETW');
        $l_no = (int)$l_no + 1;
        $cus_ID_final = "ETW" . sprintf('%03d', $l_no);  // Add leading zeros
    } else {
        $cus_ID_final = "ETW001";  // Start with ETW001
    }
}

echo json_encode($cus_ID_final);
?>
