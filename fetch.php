<?php 
    include 'init/init.php';

    if(!empty($_POST['employee_id'])) {
        $result = $crud->displayDataID("student",$_POST['employee_id']);
        $row = $result->fetch_array();
        echo json_encode($row);
    }

?>