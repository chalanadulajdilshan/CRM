<?php

include_once(dirname(__FILE__) . '/Database.php'); 
 include_once(dirname(__FILE__) . '/Message.php');     
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Helper.php'); 
include_once(dirname(__FILE__) . '/AssessorRegistration.php');
include_once(dirname(__FILE__) . '/AwardLeaderApplication.php');  
include_once(dirname(__FILE__) . '/AwardPlan.php');     
include_once(dirname(__FILE__) . '/AwardUnitRegistration.php'); 
include_once(dirname(__FILE__) . '/Participants.php');    



function dd($data) {

    var_dump($data);

    exit();
}

function redirect($url) {

    $string = '<script type="text/javascript">';

    $string .= 'window.location = "' . $url . '"';

    $string .= '</script>';



    echo $string;

    exit();
}
