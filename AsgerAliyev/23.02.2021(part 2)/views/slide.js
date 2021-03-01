
let slideID = 1;

showSlides( slideID );

function changeSlides ( n )
{
	showSlides( slideID += n );
}

function showSlides ( n )
{
	let i;
	let slides = document.getElementsByClassName( 'mySlides' );
	let dots = document.getElementsByClassName( 'demo' );
	let size  = slides.length;

	if ( n > size )
	{
		slideID = 1;
	}

	if ( n < 1 )
	{
		slideID = size;
	}

	for ( i = 0; i < size; i++ )
	{
		slides[ i ].style.display = 'none';
	}

	for ( i = 0; i < dots.length; i++ )
	{
		dots[ i ].className = dots[ i ].className.replace( ' active', '' );
	}

	slides[ slideID - 1 ].style.display = 'block';
	dots[ slideID - 1 ].className += ' active';
}