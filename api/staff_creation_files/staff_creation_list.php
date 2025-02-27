<?php
require "../../ajaxconfig.php";

$staff_arr = [];
$gender_arr = [1 => 'Male', 2 => 'Female', 3 => 'Transgender'];

// Prepare the query
$qry = $pdo->prepare("SELECT sc.id, sc.employee_id, sc.employee_name, sc.gender, sc.email, sc.mobile_no, dp.department, sc.designation
    FROM staff_creation sc
    LEFT JOIN department dp ON sc.department = dp.id
    WHERE sc.status = :status 
    ORDER BY sc.id DESC");

// Execute the query with the parameter
$qry->execute([':status' => 1]);

if ($qry->rowCount() > 0) {
    while ($staff_info = $qry->fetch(PDO::FETCH_ASSOC)) {
        // Assign gender value correctly
        $staff_info['gender'] = $gender_arr[$staff_info['gender']] ?? " ";

        // Assign action buttons correctly
        $staff_info['action'] = "<span class='icon-border_color staffActionBtn' value='" . $staff_info['id'] . "'>&nbsp;&nbsp;&nbsp;</span><span class='icon-trash-2 staffDeleteBtn' value='" . $staff_info['id'] . "'></span>";

        // Push data to staff array
        $staff_arr[] = $staff_info;
    }
}

// Close connection
$pdo = null;

// Return JSON response
echo json_encode($staff_arr);
