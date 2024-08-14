<?php


function hashValue($value) {
    // Trim and convert the value to lowercase before hashing
    $trimmedValue = trim(strtolower($value));
    
    // Hash the value using SHA-256
    return hash('sha256', $trimmedValue);
}

// Example usage
$email = "forsan20172017@gmail..com";
$hashedEmail = hashValue($email);

echo "Hashed Email: " . $hashedEmail . "\n";
echo "<br>";

$phoneNumber = "966568430828";
$hashedPhoneNumber = hashValue($phoneNumber);

echo "Hashed Phone Number: " . $hashedPhoneNumber . "\n";

echo "<br>";

















$data = [
    "data" => [
        [
            "event_name" => "SIGN_UP",
            "action_source" => "website",
            "event_source_url" => "http://localhost/dr_elite_landing_pages_2024/capi/", // Replace with your website URL
            "event_time" => time(), // Current timestamp in epoch format

            "user_data" => [
                "em" => ".$hashedEmail.", // Replace with hashed email
                "ph" => ".$hashedEmail.", // Replace with hashed phone number
                "user_agent" =>  $_SERVER['HTTP_USER_AGENT'], // Client user agent
                "client_ip_address" =>  "185.54.146.230", // Client IP address
               
            ] 
        ]
    ]
];












































































// The Snapchat CAPI endpoint with your access token
$url = "https://tr.snapchat.com/v3/b2436d09-c13e-4280-9181-caa1960c5448/events?access_token=eyJhbGciOiJIUzI1NiIsImtpZCI6IkNhbnZhc1MyU0hNQUNQcm9kIiwidHlwIjoiSldUIn0.eyJhdWQiOiJjYW52YXMtY2FudmFzYXBpIiwiaXNzIjoiY2FudmFzLXMyc3Rva2VuIiwibmJmIjoxNzIzNTUzOTc1LCJzdWIiOiI1ZThlMTgyNC1lZDg0LTQ1MDktYjcxNC04MzNkODVkMmJkYjJ-UFJPRFVDVElPTn42MGVjZWZmNC1jMjhmLTQ2OTYtYjM4My02YmY3MDRjN2UxNTgifQ.gABHdhIvoI8r98lL6oSTkIeBbsbY7MEHlrBfqeEclBc";

// Data to be sent in the POST request


// Convert data to JSON format
$jsonData = json_encode($data);

// Initialize cURL
$ch = curl_init();

// Set the URL and other options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer YOUR_ACCESS_TOKEN" // Optional, if using a separate token
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Execute the request and capture the response
$response = curl_exec($ch);

// Check for errors and print the response
if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Print the response from the API
    echo 'Response: ' . $response;
}

// Close cURL session
curl_close($ch);

?>
