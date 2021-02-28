$(document).ready(function () {
    $.ajax({
        type:'POST',
        url:'read.php',
        success:function (response) {
            $('.container').html('').html(response);
        }
    });

});

$(document).on('click','.fa-chevron-right',function () {
    var id      = $('.imageList').attr('id');
    var towards = 'right';
    $('#'+id).attr('src','loading.gif');
    $.ajax({
        type:'POST',
        data:{id:id,towards:towards},
        url:'change.php',
        success:function (response) {
            if (response !== 'false')
            {
                $('.container').html('').html(response);
            }
        }
    });
});

$(document).on('click','.fa-chevron-left',function () {
    var id      = $('.imageList').attr('id');
    var towards = 'left';
    $('#'+id).attr('src','loading.gif');
    $.ajax({
        type:'POST',
        data:{id:id,towards:towards},
        url:'change.php',
        success:function (response) {
            if (response !== 'false')
            {
                $('.container').html('').html(response);
            }
        }
    });
});