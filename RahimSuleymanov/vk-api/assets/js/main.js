$(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;
            });
        } else{
            checkbox.each(function(){
                this.checked = false;
            });
        }
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });


    function render()
    {
        $.ajax({
            type:'POST',
            url:'app/Controller/render.php',
            success:function (response) {
                $('tbody').html('').html(response);
            }
        });
    }

    $('#getAccess').click(function (){
        var client_id = $('#apis').val();
        $.ajax({
            type:'POST',
            data:{client_id:client_id},
            url:'app/Controller/getAccess.php',
            success:function (response) {
                // alert(response)
                getAccess(response)
            }
        });
    });

    function getAccess(url) {
        window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=500,height=500");
    }

    $('#accountModalOpen').click(function () {
        $('#link').val('');
    });

    $('#addAccount').click(function () {
        var apiID   = $('#apis').val();
        var url     = $('#link').val();

        $.ajax({
            type: "POST",
            data: {apiID:apiID,url:url},
            url:'app/Controller/fetchUrl.php',
            success:function (response) {
                if(response === 'found')
                {
                    toastr.error('already exist','Account');
                }
                else
                {
                    render();
                    toastr.success('saved successfully','Account');
                    $('#addAccountClose').click();
                }
            }
        });
    });
    
    $('.fa-share').click(function () {
        $('#post').val('');
        $('#sharePost').prop('disabled',true);
    });

    $('#sharePost').click(function () {
        var user_id = $('#accountList').val();
        var post    = $('#post').val();
        $.ajax({
            type:'POST',
            data:{user_id,post},
            url:'app/Controller/sharePost.php',
            success:function (response) {
                $('#sharePostClose').click();
                toastr.success('share successfully','Post');
            }
        });
    });

});

$(document).on('input','#link',function () {

    var url     = $(this).val();
    if (url !== '')
    {
        $('#addAccount').prop('disabled',false);
    }
    else
    {
        $('#addAccount').prop('disabled',true);
    }
});

$(document).on('input','#post',function () {

    var post     = $(this).val();
    if (post !== '')
    {
        $('#sharePost').prop('disabled',false);
    }
    else
    {
        $('#sharePost').prop('disabled',true);
    }
});