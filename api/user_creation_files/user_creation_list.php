<?php
require "../../ajaxconfig.php";

$user_arr = array();

$qry = $pdo->prepare("SELECT us.id, us.user_name, sc.employee_name  FROM users us LEFT JOIN staff_creation sc ON us.employee_name = sc.id WHERE us.status = 1
ORDER BY us.id DESC");
$qry->execute();

if ($qry->rowCount() > 0) {
    while ($user_info = $qry->fetch(PDO::FETCH_ASSOC)) {
        $user_info['action'] = "<span class='icon-border_color userActionBtn' value='" . $user_info['id'] . "'></span>&nbsp;&nbsp;&nbsp;<span class='icon-trash-2 userDeleteBtn' value='" . $user_info['id'] . "'></span>";
        $user_arr[] = $user_info;
    }
}
$pdo = null; //Connection Close.
echo json_encode($user_arr);
