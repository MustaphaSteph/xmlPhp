<?php
include 'xml.php';

$movies = new SimpleXMLElement($xmlstr);

foreach ($movies->movie[0]->rating as $rating) {
    switch((string) $rating['type']) { // Get attributes as element indices
        case 'thumbs':
            echo $rating, ' thumbs up';
            break;
        case 'stars':
            echo $rating, ' stars';
            break;
    }
}