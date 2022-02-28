$_LINK = 'http://localhost/DentalClinic/'
$('.form-group #formDate').on('change', function() {
    $.ajax({
        url: $_LINK + 'timelist.php',
        type: 'POST',
        data: {
            action: "addTimeList"
        }, success: function(result) {
            $('.form-group #formTimes').html(result)
        }
    })
})