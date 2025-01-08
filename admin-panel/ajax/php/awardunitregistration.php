<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    // Create a new AwardUnitRegistration object
    $AWARD_UNIT = new AwardUnitRegistration(NULL);

    // Set the form data to the AwardUnitRegistration object
    $AWARD_UNIT->award_unit_name = $_POST['award_unit_name'];
    $AWARD_UNIT->address = $_POST['address'];
    $AWARD_UNIT->tel = $_POST['tel'];
    $AWARD_UNIT->award_leader_name = $_POST['award_leader_name'];
    $AWARD_UNIT->personal_address = $_POST['personal_address'];
    $AWARD_UNIT->official_address = $_POST['official_address'];
    $AWARD_UNIT->email = $_POST['email'];
    $AWARD_UNIT->assistant_award_leader_name = $_POST['assistant_award_leader_name'];
    $AWARD_UNIT->assistant_award_leader_address = $_POST['assistant_award_leader_address'];
    $AWARD_UNIT->gold_members = $_POST['gold_members'];
    $AWARD_UNIT->silver_members = $_POST['silver_members'];
    $AWARD_UNIT->bronze_members = $_POST['bronze_members'];
    $AWARD_UNIT->starting_date = $_POST['starting_date'];
    $AWARD_UNIT->head_of_institution_name = $_POST['head_of_institution_name'];
    $AWARD_UNIT->head_of_institution_tel = $_POST['head_of_institution_tel'];
    $AWARD_UNIT->district = $_POST['district'];
    $AWARD_UNIT->province = $_POST['province'];

    // If there's an image to upload
    $dir_dest = '../../../upload/awardunitregistration/';

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

    $AWARD_UNIT->image_name = $imgName;
    $res = $AWARD_UNIT->create();

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

    // Update the existing AwardUnitRegistration object
    $AWARD_UNIT = new AwardUnitRegistration($_POST['id']);

    // Set the form data to the AwardUnitRegistration object
    $AWARD_UNIT->award_unit_name = $_POST['award_unit_name'];
    $AWARD_UNIT->address = $_POST['address'];
    $AWARD_UNIT->tel = $_POST['tel'];
    $AWARD_UNIT->award_leader_name = $_POST['award_leader_name'];
    $AWARD_UNIT->personal_address = $_POST['personal_address'];
    $AWARD_UNIT->official_address = $_POST['official_address'];
    $AWARD_UNIT->email = $_POST['email'];
    $AWARD_UNIT->assistant_award_leader_name = $_POST['assistant_award_leader_name'];
    $AWARD_UNIT->assistant_award_leader_address = $_POST['assistant_award_leader_address'];
    $AWARD_UNIT->gold_members = $_POST['gold_members'];
    $AWARD_UNIT->silver_members = $_POST['silver_members'];
    $AWARD_UNIT->bronze_members = $_POST['bronze_members'];
    $AWARD_UNIT->starting_date = $_POST['starting_date'];
    $AWARD_UNIT->head_of_institution_name = $_POST['head_of_institution_name'];
    $AWARD_UNIT->head_of_institution_tel = $_POST['head_of_institution_tel'];
    $AWARD_UNIT->district = $_POST['district'];
    $AWARD_UNIT->province = $_POST['province'];

    // Handle image upload
    $dir_dest = '../../../upload/awardunitregistration/';

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
        $AWARD_UNIT->image_name = $_POST['oldImageName'];
    } else {
        $AWARD_UNIT->image_name = $imgName;
    }

    // Update the award unit details
    $AWARD_UNIT->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $AWARD_UNIT = AwardUnitRegistration::arrange($key, $img);
        header("location: ../arrange-awardunitregistration.php?message=9");
    }
}
