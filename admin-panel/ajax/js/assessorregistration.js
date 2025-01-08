jQuery(document).ready(function () {

    // Create assessor registration
    $("#create").click(function (event) {
        event.preventDefault();

        // Validate form fields based on assessorregistration table columns
        if (!$('#assessor_name').val() || $('#assessor_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the assessor's name",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#assessor_code').val() || $('#assessor_code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the assessor's code",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#assessor_type').val() || $('#assessor_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the assessor type",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#assessor_category').val() || $('#assessor_category').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the assessor category",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#assessor_description').val() || $('#assessor_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter a description for the assessor",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#assessor_date').val() || $('#assessor_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the assessor registration date",
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
                url: "ajax/php/assessorregistration.php",
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
