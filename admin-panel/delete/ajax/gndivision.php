<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $GNDIVISION = new Gndivision($_POST['id']);
 

    $result = $GNDIVISION->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}