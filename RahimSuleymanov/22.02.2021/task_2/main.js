$(document).ready(function(){
    $('#calculate').click(function(){
        var number  = $('#number').val();
        var text    = $('#text').val();

        $.ajax({
            type:'POST',
            url:'controller.php',
            data:{number:number,text:text},
            success:function(response){
                $('#result').css('display','block').html(response);
            }
        });
    });
});