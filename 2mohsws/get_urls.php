<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$url = 'https://opensheet.elk.sh/1qhROMpFF2W1ee8m3tl9_UyJIWBbD6FFe35zyA5n5W6A/Sheet1';

$keywords_content = "";
$description = "";
$counter = 1;

try {
    $response = file_get_contents($url);

    if ($response !== false) {
        // Parse the response as JSON
        $data = json_decode($response, true);

        if ($data !== null) {
            // Loop through the rows and display key-value pairs
            foreach ($data as $row) {


                $name = $row['name'];
                $url = $row['url'];

                //echo $name;


                echo '
                
                
                
                
                  <a href="'.$url.'" class="mt-4 btn btn-primary btn-lg col-6"> '.$name.'  </a>
                
                
                
                
                
                
                
                
                ';
 
            }

          

        
        } else {
            // Handle JSON parsing error
            throw new Exception('Failed to parse the JSON response.');
        }
    } else {
        // Handle error
        throw new Exception('Failed to retrieve the response.');
    }
} catch (Exception $e) {
    // Handle exceptions
    //echo 'Error: ' . $e->getMessage();
}