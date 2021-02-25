$(document).ready(function(){

    // start CRUD un C - i
    $('input[type=file]').change(function () {
        $('#error').html('');
        var val = $(this).val().toLowerCase(),
        regex   = new RegExp("(.*?)\.(png|jpeg|jpg)$");


        if($(this)[0].files.length !== 1)
        {
            $(this).val('');
            $('#output').attr('src','assets/images/photoAdd.png');
            $('#error').html('Yalnız bir şəkil daxil edə bilərsiniz');
        }
        else
        {
            if (!(regex.test(val))) 
            {
                $(this).val('');
                $('#output').attr('src','assets/images/photoAdd.png');
                $('#error').html('Zəhmət olmasa yalnız png,jpeg,jpg formatlı şəkillər əlavə edin');
            }
            else
            {
                var reader = new FileReader();
                reader.onload = function()
                {
                var output = document.getElementById('output');
                output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
                
                $('#error').html($(this).val().split("\\").pop());

                var formData = new FormData($("#uploadForm")[0]);
                $.ajax({
                    type:'POST',
                    url:'create.php',     
                    data:formData,
                    processData: false,
                    contentType: false,
                    success:function(response)
                    {
                        if(response == 'true')
                        {
                            $('#imgList').html('');
                            read();
                            toastr.success('uğurla əlavə edildi','Şəkil');
                        }
                        else
                        {
                            toastr.error(response);
                        }
                    }
                });
            }
        }
    });

    // end CRUD un C - i


    // start CRUD un R - i
    function read()
    {
        $.ajax({
            url:'read.php',
            success:function(response){
                $('#imgList').html(response);
            }
        });
    }

    // ilkin yukleme
    read();

    // end CRUD un R - i

    // start CRUD un D - i
    $('#deleteImage').click(function(){
        $('#output').attr('src','assets/images/photoAdd.png');
        var id = $('#imageId').val();
        $.ajax({
            type:'POST',
            url:'delete.php',
            data:{id:id},
            success:function(response){
                if(response === 'done')
                {
                    read();
                    $('#closeDeleteImage').click();
                    toastr.success('finished successfully','Deleting');
                }
                else if(response === 'notFound')
                {
                    toastr.error('not found','Data');
                }
            }
        });
    });
    // end CRUD un D - i
});

// start CRUD un D - i ucun olan modali acmaq
$(document).on('click','.delete',function(){
    var id = $(this).attr('data-id');
    $('#imageId').val(id);
    $('#showDeleteModal').click();
});

// end CRUD un D - i ucun olan modali acmaq