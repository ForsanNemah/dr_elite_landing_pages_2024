<?php

function sendSnapchatSignupEvent($email_hash, $pixel_id, $access_token) {
    $url = "https://tr.snapchat.com/v2/conversion";

    // Use microtime(true) * 1000 for timestamp in milliseconds
    $timestamp = round(microtime(true) * 1000);
    
    $data = [
        'pixel_id' => $pixel_id,
        'events' => [
            [
                'event_type' => 'SIGN_UP',  // Event type
                'event_conversion_type' => 'WEB',  // Conversion type
                'event_tag' => 'signup',
                'timestamp' => $timestamp,  // Timestamp in milliseconds
                'event_id' => uniqid(),
                'user' => [
                    'email' => $email_hash,  // Hashed email
                    'user_agent' => $_SERVER['HTTP_USER_AGENT'],  // Optional: Add user agent
                    'ip_address' => $_SERVER['REMOTE_ADDR'],  // Optional: Add IP address
                ],
            ],
        ],
    ];

    $data_string = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $access_token,
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        echo 'Response: ' . $response;  // Print the response here
    }

    curl_close($ch);
}

// Your provided Pixel ID and Access Token
$pixel_id = "77ec2e1e-c2bb-468f-8d2e-f99b7ec9983c";
$access_token = "eyJhbGciOiJIUzI1NiIsImtpZCI6IkNhbnZhc1MyU0hNQUNQcm9kIiwidHlwIjoiSldUIn0.eyJhdWQiOiJjYW52YXMtY2FudmFzYXBpIiwiaXNzIjoiY2FudmFzLXMyc3Rva2VuIiwibmJmIjoxNzI0NjIwODIzLCJzdWIiOiJhMTAzMjVhMi0zMzU1LTRkMjMtODhmOC04MmFmZTc3NzYzOTR-UFJPRFVDVElPTn4yNTZmYTNlNi1iZDhmLTQwMTctYTQ2MC0yYjU2OGI4MDJiMWQifQ.7-CnLhZlNw3mr9vkdWMMtVoUz0CONBGZibDPEOEo8Es";

// Example: Hashed user email
$email_hash = hash('sha256', "user@example.com");

sendSnapchatSignupEvent($email_hash, $pixel_id, $access_token);

?>
