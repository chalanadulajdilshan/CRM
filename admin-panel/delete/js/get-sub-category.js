

$(document).ready(function () {

    $('#product_category').change(function () {

        $('.someBlock').preloader();
        //grab all form data  

        var disID = $(this).val();

        $('#divisional-bar').empty();

        $.ajax({
            url: "ajax/php/dsdivision.php",
            type: "POST",
            data: {
                district: disID,
                action: 'GET_DIVISIONAL_BY_DISTRICT'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                var html = '<option value="" > - ප්‍රදේශීය ලේකම් කොට්ඨාශය/பிரதேச செயலகம்  - </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#divisional-bar').empty();
                $('#divisional-bar').append(html);
            }
        });
    });
});

