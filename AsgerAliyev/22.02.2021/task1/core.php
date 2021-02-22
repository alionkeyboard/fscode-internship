<?php

function highlighter ( $text, $words )
{
	$highlighted = preg_filter( '/' . preg_quote( $words, '/' ) . '/i', '<b><span class="search-highlight">$0</span></b>', $text );
	if ( ! empty( $highlighted ) )
	{
		$text = $highlighted;
	}

	return $text;
}

if ( isset( $_POST[ 'pattern' ] ) && isset( $_POST[ 'text' ] ) )
{
	$pattern = $_POST[ 'pattern' ];
	$text    = $_POST[ 'text' ];
	preg_match_all( "/$pattern/", $text, $matches );

	if ( isset( $matches[ 0 ][ 0 ] ) )
	{

		$text = highlighter( $text, $matches[ 0 ][ 0 ] );
	}

}
