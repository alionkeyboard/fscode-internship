<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<form class='form-inline d-flex justify-content-center border mx-auto mt-3 bg-light' style='min-height: 200px; width:600px'>

    			<div class='form-group my-auto'>
    				<textarea rows="5" cols="40" name='str' placeholder='text to match'></textarea>
    			</div>
    			<div class='form-group my-auto'>
    				<input class='rounded-pill form-control m-1' type='text' name='pattern' placeholder='pattern'>
    				<input class='btn btn-primary rounded-pill m-1' type='submit' value='Get matches'>
    			</div>
			</form>
		</div>
		
		<div class='col-12'>
			<div id='info' class='alert alert-success my-3 mx-auto' style='width:600px'>
				- Don't forget slashes ( / )
			</div>
		</div>
		
		<div id='table' class='col-12' style="display: none">
			<div class='d-flex justify-content-center border mx-auto bg-light p-3' style='width:600px'>
				<ol>
				
				</ol>
			</div>
		</div>
	</div>
</div>

<script>

//verilmish data ile cedveli doldurur
function create_page(user){
	$("#profile_image").attr("src", user.profile_image);
	$(".userdata").each(function( index ) {
		  $(this).html(user.info[index]);
		});
}

//form submit olanda task.php-e post request gonderib 
//melumati alir ve cedveli doldurur
function info(remove, add, text){
	$('#info').removeClass(remove);
	$('#info').addClass(add);
	$('#info').html(text);
}

$("form").submit(function( event ) {
	info('alert-danger', 'alert-success', 'Your data is loading...');
	$.post( "task.php", $( "form" ).serialize())
		.done(function( data ) {
			try{
				var result = JSON.parse(data).result;

				$('#table').css('display', 'block');
				$('#info').html("DONE!");
				
				if(result==='no matches'){
					$("ol").html(result);
				}
				else
				{
					$("ol").html('');
					result.forEach(
							function(item, index){
								$("ol").append('<li>'+item+'</li>');
								});
				}
				
			}catch(error){
				info('alert-success', 'alert-danger', 'Something went wrong');
			}
			
		})
		.fail(function(){
				$('#info').removeClass('alert-success');
				$('#info').addClass('alert-danger');
				$('#info').html('Something went wrong');
			});
	event.preventDefault();
	});

</script>
</body>
</html>
