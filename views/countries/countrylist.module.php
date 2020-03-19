<?php
$results = file_get_contents("http://restcountries.eu/rest/v2/all");

if ($_POST['region']) {
    switch ($_POST['region']) {
        default:
            $results = file_get_contents("http://restcountries.eu/rest/v2/all");
            break;

        case 'asia':
            $results = file_get_contents("http://restcountries.eu/rest/v2/region/asia");
            break;

        case 'americas':
            $results = file_get_contents("http://restcountries.eu/rest/v2/region/americas");
            break;

        case 'europe':
            $results = file_get_contents("http://restcountries.eu/rest/v2/region/europe");
            break;

        case 'oceania':
            $results = file_get_contents("http://restcountries.eu/rest/v2/region/oceania");
            break;

        case 'africa':
            $results = file_get_contents("http://restcountries.eu/rest/v2/region/africa");
            break;
    }
}

$decoded = json_decode($results, true);
$total = 0;

foreach ($decoded as $item) {
    if ($total > $item["population"]) {
        $total = $total;
    } else {
        $total = $item["population"];
    }
}
