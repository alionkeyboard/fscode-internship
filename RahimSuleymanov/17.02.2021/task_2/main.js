$(document).ready(function () {
    $('#submit').click(function () {
        $('#submit').prop('disabled', true);
        $('#loading').css('display', 'inline-block');
        var float = $('#float').val();
        $.ajax({
            type: 'POST',
            data: { float: float },
            url: 'solution.php',
            success: function (response) {
                $('#result').css('display', 'block').html(response);
                $('#loading').css('display', 'none');
                $('#submit').prop('disabled', false);
            }
        });
    });
});

$(document).on('input', '#float', function () {
    var float = $(this).val();

    if (float.length !== 0 && ! isNaN(float)) {
        $('#submit').prop('disabled', false);
    } else {
        $('#submit').prop('disabled', true);
    }
});