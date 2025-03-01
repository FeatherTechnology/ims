<?php
require '../../ajaxconfig.php';

$id = $_POST['id'];
if ($id != '') {
    // Secure query with prepared statement
    $qry = $pdo->prepare("SELECT bank_id FROM bank_creation WHERE id = :id");
    $qry->execute([':id' => $id]);
    $qry_info = $qry->fetch();
    $cus_ID_final = $qry_info['bank_id'];
} else {
    // Secure query to fetch the last bank_id
    $qry = $pdo->query("SELECT bank_id FROM bank_creation WHERE bank_id !='' ORDER BY id DESC LIMIT 1");
    
    if ($qry->rowCount() > 0) {
        $qry_info = $qry->fetch();
        // Extract and increment the number part
        $l_no = ltrim(strstr($qry_info['bank_id'], 'B'), 'B');
        $l_no = (int)$l_no + 1;
        $cus_ID_final = "B" . $l_no;  // Remove the hyphen
    } else {
        $cus_ID_final = "B101";  // Start with B101
    }
}

echo json_encode($cus_ID_final);
?>
