<?php
$response = file_get_contents('https://dev.skif.pro/coordinates.json');
$myfile = fopen("coordinates.json", "w") or die("Unable to open file!");
fwrite($myfile, $response);
fclose($myfile);
echo $response;