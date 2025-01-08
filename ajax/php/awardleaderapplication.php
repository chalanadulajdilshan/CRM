<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    // Create a new AwardLeaderApplication object
    $AWARD_LEADER = new AwardLeaderApplication(NULL);

    // Set the form data to the AwardLeaderApplication object
    $AWARD_LEADER->full_name = $_POST['full_name'];
    $AWARD_LEADER->contact_tel = $_POST['contact_tel'];
    $AWARD_LEADER->contact_email = $_POST['contact_email'];
    $AWARD_LEADER->date_of_birth = $_POST['date_of_birth'];
    $AWARD_LEADER->nic = $_POST['nic'];
    $AWARD_LEADER->qualifications = $_POST['qualifications'];
    $AWARD_LEADER->present_role = $_POST['present_role'];
    $AWARD_LEADER->youth_activities_involvement = $_POST['youth_activities_involvement'];

    // If there's an image to upload
    $dir_dest = '../../../upload/awardleader/';

    $handle = new Upload($_FILES['image_name']);
    $HELP = new Helper();

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $HELP->randamId();
        $handle->image_x = 700;
        $handle->image_y = 800;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $AWARD_LEADER->image_name = $imgName;
    $res = $AWARD_LEADER->create();

    if ($res) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}


if (isset($_POST['update'])) {

    // Update the existing AwardLeaderApplication object
    $AWARD_LEADER = new AwardLeaderApplication($_POST['id']);

    // Set the form data to the AwardLeaderApplication object
    $AWARD_LEADER->full_name = $_POST['full_name'];
    $AWARD_LEADER->contact_tel = $_POST['contact_tel'];
    $AWARD_LEADER->contact_email = $_POST['contact_email'];
    $AWARD_LEADER->date_of_birth = $_POST['date_of_birth'];
    $AWARD_LEADER->nic = $_POST['nic'];
    $AWARD_LEADER->qualifications = $_POST['qualifications'];
    $AWARD_LEADER->present_role = $_POST['present_role'];
    $AWARD_LEADER->youth_activities_involvement = $_POST['youth_activities_involvement'];

    // Handle image upload
    $dir_dest = '../../../upload/awardleader/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST["oldImageName"];
        $handle->image_x = 700;
        $handle->image_y = 800;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    // If there's no new image, retain the old one
    if (!$imgName) {
        $AWARD_LEADER->image_name = $_POST['oldImageName'];
    } else {
        $AWARD_LEADER->image_name = $imgName;
    }

    // Update the award leader details
    $AWARD_LEADER->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $AWARD_LEADER = AwardLeaderApplication::arrange($key, $img);
        header("location: ../arrange-awardleader.php?message=9");
    }
}
