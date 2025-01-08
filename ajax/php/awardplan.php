<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    // Create a new AwardPlan object
    $AWARD_PLAN = new AwardPlan(NULL);

    // Set the form data to the AwardPlan object
    $AWARD_PLAN->participant_name = $_POST['participant_name'];
    $AWARD_PLAN->award_level = $_POST['award_level'];
    $AWARD_PLAN->voluntary_service_goal = $_POST['voluntary_service_goal'];
    $AWARD_PLAN->voluntary_service_assessor = $_POST['voluntary_service_assessor'];
    $AWARD_PLAN->physical_recreation_goal = $_POST['physical_recreation_goal'];
    $AWARD_PLAN->physical_recreation_assessor = $_POST['physical_recreation_assessor'];
    $AWARD_PLAN->skill_goal = $_POST['skill_goal'];
    $AWARD_PLAN->skill_assessor = $_POST['skill_assessor'];
    $AWARD_PLAN->adventurous_journey_optional = $_POST['adventurous_journey_optional'];
    $AWARD_PLAN->registration_id = $_POST['registration_id'];
    $AWARD_PLAN->next_level_starting_date = $_POST['next_level_starting_date'];
    $AWARD_PLAN->new_voluntary_service_goal = $_POST['new_voluntary_service_goal'];
    $AWARD_PLAN->new_physical_recreation_goal = $_POST['new_physical_recreation_goal'];
    $AWARD_PLAN->new_skill_goal = $_POST['new_skill_goal'];
    $AWARD_PLAN->new_voluntary_service_assessor = $_POST['new_voluntary_service_assessor'];
    $AWARD_PLAN->new_physical_recreation_assessor = $_POST['new_physical_recreation_assessor'];
    $AWARD_PLAN->new_skill_assessor = $_POST['new_skill_assessor'];

    // If there's an image to upload
    $dir_dest = '../../../upload/awardplan/';

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

    $AWARD_PLAN->image_name = $imgName;
    $res = $AWARD_PLAN->create();

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

    // Update the existing AwardPlan object
    $AWARD_PLAN = new AwardPlan($_POST['id']);

    // Set the form data to the AwardPlan object
    $AWARD_PLAN->participant_name = $_POST['participant_name'];
    $AWARD_PLAN->award_level = $_POST['award_level'];
    $AWARD_PLAN->voluntary_service_goal = $_POST['voluntary_service_goal'];
    $AWARD_PLAN->voluntary_service_assessor = $_POST['voluntary_service_assessor'];
    $AWARD_PLAN->physical_recreation_goal = $_POST['physical_recreation_goal'];
    $AWARD_PLAN->physical_recreation_assessor = $_POST['physical_recreation_assessor'];
    $AWARD_PLAN->skill_goal = $_POST['skill_goal'];
    $AWARD_PLAN->skill_assessor = $_POST['skill_assessor'];
    $AWARD_PLAN->adventurous_journey_optional = $_POST['adventurous_journey_optional'];
    $AWARD_PLAN->registration_id = $_POST['registration_id'];
    $AWARD_PLAN->next_level_starting_date = $_POST['next_level_starting_date'];
    $AWARD_PLAN->new_voluntary_service_goal = $_POST['new_voluntary_service_goal'];
    $AWARD_PLAN->new_physical_recreation_goal = $_POST['new_physical_recreation_goal'];
    $AWARD_PLAN->new_skill_goal = $_POST['new_skill_goal'];
    $AWARD_PLAN->new_voluntary_service_assessor = $_POST['new_voluntary_service_assessor'];
    $AWARD_PLAN->new_physical_recreation_assessor = $_POST['new_physical_recreation_assessor'];
    $AWARD_PLAN->new_skill_assessor = $_POST['new_skill_assessor'];

    // Handle image upload
    $dir_dest = '../../../upload/awardplan/';

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
        $AWARD_PLAN->image_name = $_POST['oldImageName'];
    } else {
        $AWARD_PLAN->image_name = $imgName;
    }

    // Update the award plan details
    $AWARD_PLAN->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $AWARD_PLAN = AwardPlan::arrange($key, $img);
        header("location: ../arrange-awardplan.php?message=9");
    }
}
