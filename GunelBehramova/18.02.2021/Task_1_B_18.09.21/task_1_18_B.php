<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Example</title>
</head>
<body>

<form method="post">
    <strong>Instagram Url :</strong>
    <input type="url" name="url" placeholder="example: instagram">
    <input type="submit" name="btn_sbmt" value="Go">
</form>

<?php


if ( $_POST['btn_sbmt'] && $_POST['url'] ) {

    $url =  $_POST['url'];

    $html = file_get_contents($url);

    $dom = new DOMDocument();

    $dom->loadHTML($html);

    $meta_tags = $dom->getElementsByTagName('meta');

    // image

    foreach( $meta_tags as $meta ) {

        if( $meta->getAttribute('property') == 'og:image' ) {

            $image_url = $meta->getAttribute('content');

            if( $image_url ) {

                $replace = array(
                    '/vp' => '',
                );

                $large_url = strtr($image_url, $replace);

                echo '<br>';

                echo '<b> Profil sekli:';

                echo '
                    <a href="'. $large_url .'" target="_blank">
                        <img src="'. $large_url .'" alt="'. $_POST['username'] .'" width="100" height="auto">
                    </a>
                ';

            } else {

                echo '<strong>Melumat tapilmadi!</strong>';

            }

        }

    }



// followers

 foreach( $meta_tags as $meta ) {

        if( $meta->getAttribute('property') == 'og:title' ) {

            $title_url = $meta->getAttribute('content');

            if( $title_url ) {

                $replace = array(
                    '/vp' => '',
                );

                $large_url = strtr($title_url, $replace);

                echo '<br>'.'<br>'.'<b> Istifadeci adi: ' .$large_url;

            } else {

                echo '<strong>Melumat tapilmadi!</strong>';

            }


        }

    }

 foreach( $meta_tags as $meta ) {

        if( $meta->getAttribute('property') == 'og:description' ) {

            $followers_url = $meta->getAttribute('content');

            if( $followers_url ) {

                $replace = array(
                    '/vp' => '',
                );

                $large_url = strtr($followers_url, $replace);

                echo '<br>'.'<br>'.'<b> Izleyici ve izlediklerinin sayi: ' .$large_url;

             
            } else {

                echo '<strong>Melumat tapilmadi!</strong>';

            }


        }

    }

}


?>

</body>
</html>