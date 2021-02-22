$(document).ready(function () {
    $('#loading').css('display', 'block');
    var link = 'https://www.havaproqnozu.com/baki-15-gunluk-hava-veziyyeti-taxmini.html';
    $.ajax({
        type: 'POST',
        data: { link: link },
        url: 'fetchData.php',
        success: function (response) {
            $('#result').css('display', 'block').html(response);
            $('#loading').css('display', 'none');
        }
    });
});
