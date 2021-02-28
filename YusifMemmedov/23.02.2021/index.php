<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$img_db = new ImageDB();

$images = $img_db->fetch_images();
?>

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<style>
	   div{
	       box-sizing:border-box;
	   }
	   .slideshow {
	       width:100%;
	       min-height:500px;
	       border:3px solid green;
	       padding-top:20px;
	       padding-bottom:20px;
	   }
	   .slide_holder{
	       box-sizing:border-box;
	       max-width:600px;
	       height:300px;
	       border:3px solid red;
	       margin-left:auto;
	       margin-right:auto;
	       display:block;
	   }
	   .slide{
	       width:100%;
	       height:100%;
	       float:left;
	   }
	   img {
	       width:auto;
	       height:100%;
	       margin-left:auto;
	       margin-right:auto;
	       display:block;
	   }
	   
	   #thumbnail_holder{
	       height:150px;
           width:100%;
           overflow-x:scroll;
           overflow-y:hidden;
           white-space: nowrap;
           margin-top:15px;
           padding-left:15px;
           padding-right:15px;
	   }
	   .thumbnail{
	       height:100%;
           display:inline-block;
	   }
	   .highlight{
	       border: 4px solid yellow;
	   }
	   span{
	       position:relative;
	       z-index:100;
	       height:100%;
	       width:46px;
	       background-color:grey;
	       padding-left:3px;
	       padding-right:3px;
	       box-sizing:border-box;
	       opacity:0.75;
	   }
	   span#next{
	       right:46px;
	       margin-right:-46px;
	       float:right;
	   }
	   span#prev{
	       left:46px;
	       margin-left:-46px;
	       float:left;
	   }
	   span p{
	       position:absolute;
	       top:50%;
	       margin-top:-50%;
	   }
	</style>
</head>

<body>

	<div>
		<form action='task.php' method='post' enctype="multipart/form-data">
		<input type="file" name='file'>
		<input type="submit" name='submit'>
		</form>
	</div>

	<div>
		<div class='slideshow'>
			<div class='slide_holder'>
				<span id='prev'>
					<p>PREV</p>
				</span>
				
				<div class='slide'>
					<img id='current_slide_image' src='images/sekil2.png'>
				</div>
				
				<span id='next'>
					<p>NEXT</p>
				</span>
			</div>
			
			<div id='thumbnail_holder'>
				
				<?php 
				
				foreach ($images as $img){
				    echo "<div class='thumbnail'><img src='{$img['image_url']}'></div>";
				}
				
				?>
				
			</div>
		</div>
	</div>

<script>
	var slide_item_index = 0;
	var thumbnails = $('.thumbnail');
	var all_items_count = thumbnails.length;

	//steps = 1, -1 or 0
	function slide_items(steps){

		//remove highlight before stepping forward
			thumbnails[slide_item_index].classList.remove('highlight');

			//bu herfleri surushdurub shifreleyende elediyimiz sheydir
			if( steps < 0 ) {
                slide_item_index = all_items_count + ( slide_item_index + steps ) % all_items_count;
            }
            else {
                slide_item_index += steps % all_items_count;
            }
            
            slide_item_index = slide_item_index % all_items_count;
            
		//onclick slide>img src is being replaced with thumbnail src
		$('#current_slide_image').attr('src', thumbnails[slide_item_index].children[0].src);
		
		//highlight current thumbnail
		thumbnails[slide_item_index].classList.add('highlight');
		
		//handling scroll
		$('#thumbnail_holder').scrollLeft(thumbnails[slide_item_index].offsetLeft-20);
	}

	//change slide on thumbnail click
	$('.thumbnail').click(function(){
			var clicked_node = this;
			thumbnails.each(function(index, current_node){
					if(clicked_node === current_node){
						 slide_items(index-slide_item_index);
					}
				});
		});

	//slide back and forward
	$('#prev').click(function(){
			slide_items(-1);
		});

	$('#next').click(function(){
		slide_items(1);
	});

	//slide every 4 seconds
	var interval = 4000;
	var timer = setInterval(function(){slide_items(1)}, interval);

	//reset interval on every click to avoid instant slides
	document.onclick = function(){
		clearInterval(timer);
		timer = setInterval(function(){slide_items(1)}, interval);
		}
	
</script>
</body>

</html>
