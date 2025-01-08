<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    // Create a new ParticipantRegistration object
    $PARTICIPANT = new ParticipantRegistration(NULL);

    // Set the form data to the ParticipantRegistration object
    $PARTICIPANT->participant_name = $_POST['participant_name'];
    $PARTICIPANT->nic_number = $_POST['nic_number'];
    $PARTICIPANT->home_address = $_POST['home_address'];
    $PARTICIPANT->district = $_POST['district'];
    $PARTICIPANT->gender = $_POST['gender'];
    $PARTICIPANT->date_of_birth = $_POST['date_of_birth'];
    $PARTICIPANT->age = $_POST['age'];
    $PARTICIPANT->contact_home = $_POST['contact_home'];
    $PARTICIPANT->contact_mobile = $_POST['contact_mobile'];
    $PARTICIPANT->email = $_POST['email'];
    $PARTICIPANT->licensed_operator = $_POST['licensed_operator'];
    $PARTICIPANT->level_of_entry = $_POST['level_of_entry'];
    $PARTICIPANT->registration_fee_applicable = $_POST['registration_fee_applicable'];
    $PARTICIPANT->parent_guardian_full_name = $_POST['parent_guardian_full_name'];
    $PARTICIPANT->parent_guardian_address = $_POST['parent_guardian_address'];
    $PARTICIPANT->parent_guardian_contact_home = $_POST['parent_guardian_contact_home'];
    $PARTICIPANT->parent_guardian_contact_mobile = $_POST['parent_guardian_contact_mobile'];
    $PARTICIPANT->parent_guardian_email = $_POST['parent_guardian_email'];
    $PARTICIPANT->parent_guardian_consent = $_POST['parent_guardian_consent'];
    $PARTICIPANT->assigned_award_leader = $_POST['assigned_award_leader'];

    // If there's an image to upload
    $dir_dest = '../../../upload/participantregistration/';

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

    $PARTICIPANT->image_name = $imgName;
    $res = $PARTICIPANT->create();

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

    // Update the existing ParticipantRegistration object
    $PARTICIPANT = new ParticipantRegistration($_POST['id']);

    // Set the form data to the ParticipantRegistration object
    $PARTICIPANT->participant_name = $_POST['participant_name'];
    $PARTICIPANT->nic_number = $_POST['nic_number'];
    $PARTICIPANT->home_address = $_POST['home_address'];
    $PARTICIPANT->district = $_POST['district'];
    $PARTICIPANT->gender = $_POST['gender'];
    $PARTICIPANT->date_of_birth = $_POST['date_of_birth'];
    $PARTICIPANT->age = $_POST['age'];
    $PARTICIPANT->contact_home = $_POST['contact_home'];
    $PARTICIPANT->contact_mobile = $_POST['contact_mobile'];
    $PARTICIPANT->email = $_POST['email'];
    $PARTICIPANT->licensed_operator = $_POST['licensed_operator'];
    $PARTICIPANT->level_of_entry = $_POST['level_of_entry'];
    $PARTICIPANT->registration_fee_applicable = $_POST['registration_fee_applicable'];
    $PARTICIPANT->parent_guardian_full_name = $_POST['parent_guardian_full_name'];
    $PARTICIPANT->parent_guardian_address = $_POST['parent_guardian_address'];
    $PARTICIPANT->parent_guardian_contact_home = $_POST['parent_guardian_contact_home'];
    $PARTICIPANT->parent_guardian_contact_mobile = $_POST['parent_guardian_contact_mobile'];
    $PARTICIPANT->parent_guardian_email = $_POST['parent_guardian_email'];
    $PARTICIPANT->parent_guardian_consent = $_POST['parent_guardian_consent'];
    $PARTICIPANT->assigned_award_leader = $_POST['assigned_award_leader'];

    // Handle image upload
    $dir_dest = '../../../upload/participantregistration/';

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
        $PARTICIPANT->image_name = $_POST['oldImageName'];
    } else {
        $PARTICIPANT->image_name = $imgName;
    }

    // Update the participant registration details
    $PARTICIPANT->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $PARTICIPANT = ParticipantRegistration::arrange($key, $img);
        header("location: ../arrange-participantregistration.php?message=9");
    }
}
