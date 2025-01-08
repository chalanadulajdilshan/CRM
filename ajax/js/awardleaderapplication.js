jQuery(document).ready(function () {

    // Create award leader application
    $("#create").click(function (event) {
        event.preventDefault();

        // Validate form fields based on awardleaderapplication table columns
        if (!$('#leader_name').val() || $('#leader_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the leader's name",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#leader_code').val() || $('#leader_code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the leader's code",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#leader_type').val() || $('#leader_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the leader type",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#leader_category').val() || $('#leader_category').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select the leader category",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#leader_description').val() || $('#leader_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter a description for the leader",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#leader_date').val() || $('#leader_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the leader application date",
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
                text: "Please enter the budget for the leader application",
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
                url: "ajax/php/awardleaderapplication.php",
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
        return 
