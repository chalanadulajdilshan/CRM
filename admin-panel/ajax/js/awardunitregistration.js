jQuery(document).ready(function () {

    // Create award unit registration
    $("#create").click(function (event) {
        event.preventDefault();

        // Validate form fields based on awardunitregistration table columns
        if (!$('#award_unit_name').val() || $('#award_unit_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit name",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_code').val() || $('#award_unit_code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit code",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_description').val() || $('#award_unit_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit description",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_start_date').val() || $('#award_unit_start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit start date",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_end_date').val() || $('#award_unit_end_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit end date",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_status').val() || $('#award_unit_status').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the award unit status",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_leader').val() || $('#award_unit_leader').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please assign an award unit leader",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_budget').val() || $('#award_unit_budget').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit budget",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_location').val() || $('#award_unit_location').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit location",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_type').val() || $('#award_unit_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the award unit type",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_category').val() || $('#award_unit_category').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the award unit category",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_priority').val() || $('#award_unit_priority').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the award unit priority",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_criteria').val() || $('#award_unit_criteria').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the award unit criteria",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#award_unit_approval').val() || $('#award_unit_approval').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please specify if the award unit is approved",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$("#acceptTerm").is(":checked")) {
            swal({
                title: "Error!",
                text: "Please agree to our terms and conditions",
                type: "error",
                timer: 3000,
                showConfirmButton: false,
            });

        } else {

            // Preloader start
            $('.someBlock').preloader();

            // Grab all form data  
            var formData = new FormData($("#form-data")[0]);

            $.ajax({
                url: "ajax/php/awardunitregistration.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    // Remove preloader
                    $('.someBlock').preloader('remove');

                    if (result.status === 'success') {
                        swal({
                            title: "Success!",
                            text: "Your data has been saved successfully!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                        window.setTimeout(function () {
                            window.location = 'success.php?message=5';
                        }, 2000);

                    } else if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });

});
