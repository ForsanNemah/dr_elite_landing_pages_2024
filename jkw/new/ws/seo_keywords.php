<?php
$url = 'https://opensheet.elk.sh/1Cph8whvT7kZ1TiwH-wcPSXtiAauQ4jQsbK8ojixUN9o/Sheet1';

$response = file_get_contents($url);

if ($response !== false) {
    // Parse the response as JSON
    $data = json_decode($response, true);

    if ($data !== null) {
        // Loop through the rows and display key-value pairs
        foreach ($data as $row) {
            $date_and_time = $row['date_and_time'];
            $name = $row['name'];


            echo "date_and_time:". $date_and_time;
            echo "name:". $name;
            echo "<br>";
        }
    } else {
        // Handle JSON parsing error
        echo 'Failed to parse the JSON response.';
    }
} else {
    // Handle error
    echo 'Failed to retrieve the response.';
}
?>