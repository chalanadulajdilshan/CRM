<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $BRAND = new Packages($_POST['id']);
   
    $result = $BRAND->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}