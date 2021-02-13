<?php
function findStringLength($text)
{
    $length = 0;
    while (!empty($text[$length])) $length++;
    return $length;
}

function splitTextIntoSentences($text)
{
    $sentences = [];
    $sentence = '';

    for ($i = 0; $i < findStringLength($text) - 1; $i++) {
        if ($text[$i] === '.') {
            $sentences[] = $sentence;
            $sentence = '';
        } else {
            $sentence .= $text[$i];
        }
    }

    $sentences[] = $sentence;

    return $sentences;
}


function titleText($text)
{
    $sentences = splitTextIntoSentences($text);
    $titledText = "";
    $counter = 0;

    foreach ($sentences as $sentence) {
        $titledSent = ucfirst(trim($sentence));
        $joinedSentence = $counter == 0 ? $titledSent : ". {$titledSent}";
        $titledText =  $titledText . $joinedSentence;
        $counter++;
    }

    return $titledText;
}

$text = "I am a string with several periods. period #1. period #2.";
print(titleText($text));
?>