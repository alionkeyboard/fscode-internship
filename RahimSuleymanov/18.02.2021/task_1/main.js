$(document).ready(function () {
    $('#submit').click(function () {
        $('#submit').prop('disabled', true);
        $('#loading').css('display', 'inline-block');
        var link = $('#link').val();
        $.ajax({
            type: 'POST',
            data: { link: link },
            url: 'fetchData.php',
            success: function (response) {
                $('#result').css('display', 'block').html(response);
                $('#loading').css('display', 'none');
                $('#submit').prop('disabled', false);
            }
        });
    });
});
