$(document).ready(function () {
    $('span.color').click(function () {
        var guestAnswer = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'answerChecker.php',
            data: { guestAnswer: guestAnswer },
            success: function (response) {
                if (response == 'true') {
                    toastr.success('doğru rəng seçdiniz', 'Təbriklər');
                } else {
                    toastr.error('Səhv seçim!', 'Təəssüf');
                }
            }
        });

    });
});