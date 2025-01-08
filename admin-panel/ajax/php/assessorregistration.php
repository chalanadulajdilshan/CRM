<?php

include '../../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

if (isset($_POST['create'])) {

    // Create a new AssessorRegistration object
    $ASSESSOR = new AssessorRegistration(NULL);

    // Set the form data to the AssessorRegistration object
    $ASSESSOR->full_name = $_POST['full_name'];
    $ASSESSOR->personal_address = $_POST['personal_address'];
    $ASSESSOR->tel = $_POST['tel'];
    $ASSESSOR->nic_number = $_POST['nic_number'];
    $ASSESSOR->official_address = $_POST['official_address'];
    $ASSESSOR->date_of_birth = $_POST['date_of_birth'];
    $ASSESSOR->sex = $_POST['sex'];
    $ASSESSOR->designation_of_present_employment = $_POST['designation_of_present_employment'];
    $ASSESSOR->educational_qualifications = $_POST['educational_qualifications'];
    $ASSESSOR->professional_qualifications = $_POST['professional_qualifications'];
    $ASSESSOR->award_units_supported = $_POST['award_units_supported'];
    $ASSESSOR->categories_assess = $_POST['categories_assess'];

    // If there's an image to upload
    $dir_dest = '../../../upload/assessor/';

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

    $ASSESSOR->image_name = $imgName;
    $res = $ASSESSOR->create();

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

    // Update the existing AssessorRegistration object
    $ASSESSOR = new AssessorRegistration($_POST['id']);

    // Set the form data to the AssessorRegistration object
    $ASSESSOR->full_name = $_POST['full_name'];
    $ASSESSOR->personal_address = $_POST['personal_address'];
    $ASSESSOR->tel = $_POST['tel'];
    $ASSESSOR->nic_number = $_POST['nic_number'];
    $ASSESSOR->official_address = $_POST['official_address'];
    $ASSESSOR->date_of_birth = $_POST['date_of_birth'];
    $ASSESSOR->sex = $_POST['sex'];
    $ASSESSOR->designation_of_present_employment = $_POST['designation_of_present_employment'];
    $ASSESSOR->educational_qualifications = $_POST['educational_qualifications'];
    $ASSESSOR->professional_qualifications = $_POST['professional_qualifications'];
    $ASSESSOR->award_units_supported = $_POST['award_units_supported'];
    $ASSESSOR->categories_assess = $_POST['categories_assess'];

    // Handle image upload
    $dir_dest = '../../../upload/assessor/';

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
        $ASSESSOR->image_name = $_POST['oldImageName'];
    } else {
        $ASSESSOR->image_name = $imgName;
    }

    // Update the assessor details
    $ASSESSOR->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ASSESSOR = AssessorRegistration::arrange($key, $img);
        header("location: ../arrange-assessor.php?message=9");
    }
}
