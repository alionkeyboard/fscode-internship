<?php

include "userinfo.php";

function callSumbit ( $curl, $url, $page )
{
	if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" )
	{
		if ( isset( $_POST[ "search" ] ) )
		{
			$url = $_POST[ "url" ];
			if ( ! preg_match( '/\b(?:(?:https):\/\/www\.instagram\.com\/)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $url ) )
			{
				echo "<div class='style2'>
                 The link you entered may be broken, or the page may have been removed
                 </div>";
			}
			else
			{
				echo "<div class='style2'";
				echo "<div class='container'>";
				echo "<div class='row'>";
				echo "<div class='col-md-4'>";
				echo get_user_image( $curl, $url, $page );
				echo "</div>";
				echo "<div class='col-md-8'>";
				echo get_username( $curl, $url, $page );
				echo get_follow_count( $curl, $url, $page );
				echo get_user_bio( $curl, $url, $page );
				echo "</div>";
				echo "</div>";
			}
		}
	}
}

callSumbit( $curl, $url, $page );
?>
