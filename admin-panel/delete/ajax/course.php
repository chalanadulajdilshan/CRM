<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $COURSE = new Courses($_POST['id']);
    $HELP = new Helper();

    unlink($HELP->getSitePath() . "upload/course/" . $COURSE->image_name);


    $result = $COURSE->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}