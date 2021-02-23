$(document).ready(function(){
    $('.delimeterDiv').click(function(){
        var viewer = $('.delimeterList').attr('data-view');
        
        if(viewer == 'off')
        {
            $('.delimeterList').attr('data-view','on');
            $('.delimeterList').css('display','block');
        }
        else
        {
            $('.delimeterList').attr('data-view','off');
            $('.delimeterList').css('display','none');
        }
    });

    $('.delimeterItem').click(function(){
        $('.delimeterList').attr('data-view','off');
        $('.delimeterList').css('display','none');
        var pattern = $(this).text();
        $('.delimeter').html(pattern);
    });

    $('button[class=delimeterRightBtn]').click(function(){
        var viewer = $('.flagsList').attr('data-view');
        
        if(viewer == 'off')
        {
            $('.flagsList').attr('data-view','on');
            $('.flagsList').css('display','block');
        }
        else
        {
            $('.flagsList').attr('data-view','off');
            $('.flagsList').css('display','none');
        }
    });

    $('.flagItem').click(function(){
        var flag = $(this).attr('data');
        var existFlag = $('#existFlags').html();
        var checker = $('#'+flag).attr('data-view');
        if(checker == 'off')
        {
            $('#'+flag).attr('data-view','on');
            $('#'+flag).css('display','block');
        }
        else
        {
            $('#'+flag).attr('data-view','off');
            $('#'+flag).css('display','none');
        }

        var newFlag;
        if( existFlag.indexOf(flag) != -1 )
        {
            
            newFlag = existFlag.replace(flag, '');
        }
        else
        {
            newFlag = existFlag+''+flag;
        }
        $('#existFlags').html(newFlag);
    });

    $('#checker').click(function(){
        $('#result').html('');
        var pattern = $('#delimeterRight').text()+$('#pattern').val()+$('#delimeterRight').text()+$('#existFlags').text();
        var string  = $('#string').val();
        $.ajax({
            type:'POST',
            url:'controller.php',
            data:{pattern:pattern,string:string},
            success:function(response){
                $('#result').css('display','block').html(response);
            }
        });
    });

});
