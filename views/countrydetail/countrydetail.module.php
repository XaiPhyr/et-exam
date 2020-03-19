<?php
$name = $_GET['name'];
$fulldata = file_get_contents('https://restcountries.eu/rest/v2/name/' . $name . '?fullText=true');
$data = json_decode($fulldata, true);
