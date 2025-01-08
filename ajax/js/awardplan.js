jQuery(document).ready(function () {

    // Create award plan registration
    $("#create").click(function (event) {
        event.preventDefault();

        // Validate form fields based on awardplan table columns
        if (!$('#plan_name').val() || $('#plan_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the plan name",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#plan_code').val() || $('#plan_code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the plan code",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#plan_type').val() || $('#plan_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the plan type",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#plan_category').val() || $('#plan_category').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the plan category",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#plan_description').val() || $('#plan_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter a description for the plan",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#plan_date').val() || $('#plan_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the plan date",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#status').val() || $('#status').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the status",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#budget').val() || $('#budget').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the budget for the plan",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the start date",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#end_date').val() || $('#end_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the end date",
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
                url: "ajax/php/awardplanregistration.php",
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
