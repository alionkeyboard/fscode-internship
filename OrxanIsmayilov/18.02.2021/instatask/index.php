<!DOCTYPE html>
<html>
	<head>
		<title>Instagram Get Profile Data</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		<style>
            .posts {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }
		</style>


		<div class="container">
			<div class="row" style="margin-top:20px;margin-bottom:20px;padding:0px;">
				<div style="padding:0" class="col-md-4">
					<form action="" method="get">
						<input style="width:200px;display:inline;" class="form-control mb-2" id="url" type="text" name="city">
						<button style="display:inline;height:39px;background-color:blue;border:0;border-radius:5px;color:white" class="" id="enter" type="submit">Enter</button>
					</form>
				</div>
			</div>
			<div class="row" style="margin-top:20px;margin-bottom:20px;padding:50px;background-color:#ddd;">
				<div class="col-md-3">
					<img src="" class="profile-pic" style="border-radius:50%;">
				</div>
				<div class="col-md-9">
					<h2 class="username"></h2>
					<div class="row">
						<div class="col-md-4">
							<span class="number-of-posts"></span>
							posts
						</div>
						<div class="col-md-4">
							<span class="followers"></span>
							followers
						</div>
						<div class="col-md-4">
							<span class="following"></span>
							following
						</div>
					</div>
					<div class="row" style="margin-top:60px;">
						<h4 class="name"></h4>
					</div>
					<div class="row">
						<h4 class="biography"></h4>
					</div>
					<br>
					<hr>
					<br>
				</div>
			</div>
		</div>

		<script>
            function nFormatter(num) {

                if (num >= 1000000) {
                    return (num / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
                }
                if (num >= 1000) {
                    return (num / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
                }
                return num;
            }

            $('#enter').on('click', function (e) {
                e.preventDefault();
                var url = $('#url').val() + '?__a=1';

                $.ajax({
                    url: url,
                    type: 'get',
                    success: function (response) {
                        $('.profile-pic').attr('src', response.graphql.user.profile_pic_url);
                        $('.name').html(response.graphql.user.full_name);
                        $('.biography').html(response.graphql.user.biography);
                        $('.username').html(response.graphql.user.username);
                        $('.number-of-posts').html(response.graphql.user.edge_owner_to_timeline_media.count);
                        $('.followers').html(nFormatter(response.graphql.user.edge_followed_by.count));
                        $('.following').html(nFormatter(response.graphql.user.edge_follow.count));

                    }
                });
            });
		</script>
	</body>
</html>