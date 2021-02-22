<?php

function estimate_syllables($word) {
    return count_vowels($word);
}

function count_vowels($word) {
    static $vowels = array('A', 'E', 'Ə', 'O', 'U', 'I');
    $vowel_count = 0;
    $letters = str_split(strtoupper($word));
    foreach ($letters as $letter) {
        if (in_array($letter, $vowels)) {
            $vowel_count++;
        }
    }
    return $vowel_count;
}

$soz1 = 'kitab';
$soz2 = 'komputer';

echo "kitab-in ". count_vowels($soz1). " hecasi var". "<br>";
echo "komputer-in ". count_vowels($soz2). " hecasi var". "<br>";

?>