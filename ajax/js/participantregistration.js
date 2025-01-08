jQuery(document).ready(function () {

    // Create participant registration
    $("#create").click(function (event) {
        event.preventDefault();

        // Validate form fields based on participantregistration table columns
        if (!$('#participant_name').val() || $('#participant_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Full Name",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#nic_number').val() || $('#nic_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your NIC number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#home_address').val() || $('#home_address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your address",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });

        } else if (!$('#district').val() || $('#district').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your district",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#gender').val() || $('#gender').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select your gender",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#date_of_birth').val() || $('#date_of_birth').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your date of birth",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#age').val() || $('#age').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your age",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#contact_home').val() || $('#contact_home').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your home contact number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#contact_mobile').val() || $('#contact_mobile').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your mobile number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your email address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#licensed_operator').val() || $('#licensed_operator').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please specify if you are a licensed operator",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#level_of_entry').val() || $('#level_of_entry').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select your level of entry",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#registration_fee_applicable').val() || $('#registration_fee_applicable').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please specify if the registration fee is applicable",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#parent_guardian_full_name').val() || $('#parent_guardian_full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your parent/guardian's full name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#parent_guardian_address').val() || $('#parent_guardian_address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your parent/guardian's address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#parent_guardian_contact_home').val() || $('#parent_guardian_contact_home').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your parent/guardian's home contact number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#parent_guardian_contact_mobile').val() || $('#parent_guardian_contact_mobile').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your parent/guardian's mobile contact number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#parent_guardian_email').val() || $('#parent_guardian_email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your parent/guardian's email",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#parent_guardian_consent').val() || $('#parent_guardian_consent').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please specify if you have parent/guardian consent",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#assigned_award_leader').val() || $('#assigned_award_leader').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please assign an award leader",
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
                url: "ajax/php/participantregistration.php",
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
