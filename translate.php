<?php
function translate($word, $direction) {
    $dictionary = array(
        'homme' => 'men',
        'femme' => 'women',
        'enfant' => 'children',
        'ordinateur' => 'computer',
        'voiture' => 'car',
    );

    $word = strtolower($word);

    if ($direction === 'toEnglish') {
        if (array_key_exists($word, $dictionary)) {
            return $dictionary[$word];
        } else {
            return 'Traduction inconnue';
        }
    } elseif ($direction === 'toFrench') {
        $reversedDictionary = array_flip($dictionary);

        if (array_key_exists($word, $reversedDictionary)) {
            return $reversedDictionary[$word];
        } else {
            return 'Traduction inconnue';
        }
    } else {
        return 'Direction de traduction invalide';
    }
}

include 'index.php';


?>
