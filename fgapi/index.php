<?php
// Initialize cURL session
$ch = curl_init();

// Set the URL for the GET request
$url = "https://graph.facebook.com/v20.0/me/feed?access_token=YOUR_ACCESS_TOKEN";

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $feedInfo = json_decode($response, true);

    // Debugging: Print the full response
    echo '<pre>';
    print_r($feedInfo);
    echo '</pre>';

    // Check if the response contains an error
    if (isset($feedInfo['error'])) {
        echo 'Error: ' . $feedInfo['error']['message'];
    } else {
        // Count the number of posts
        $numberOfPosts = isset($feedInfo['data']) ? count($feedInfo['data']) : 0;

        // Print the number of posts
        echo 'Number of Posts: ' . $numberOfPosts;
    }
}

// Close the cURL session
curl_close($ch);
?>
