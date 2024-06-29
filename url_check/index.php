<?php

function check_url_source_code($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $source_code = curl_exec($ch);

    if (curl_errno($ch)) {
        $error_message = curl_error($ch);
        curl_close($ch);
        return "Error: $error_message";
    }

    curl_close($ch);

    if (strpos($source_code, 'cdn.salla.sa') !== false) {
        return true;
    } else {
        return false;
    }
}




$url = 'https://nawa-eims.com/ar/';
$result = check_url_source_code($url);

if (is_bool($result)) {
    if ($result) {
        echo "The source code of the URL contains 'cdn.salla.sa'";
    } else {
        echo "The source code of the URL does not contain 'cdn.salla.sa'";
    }
} else {
    echo "Error: $result";
}




?>