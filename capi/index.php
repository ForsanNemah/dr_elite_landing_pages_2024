<?php

function sendSnapchatConversion($pixel_id, $timestamp, $event_conversion_type, $event_type, $hashed_email, $hashed_phone_number, $hashed_ip_address, $user_agent, $device_model, $click_id, $authorization_token) {
    $curl = curl_init();

    $postData = json_encode(array(
        "pixel_id" => $pixel_id,
        "timestamp" => $timestamp,
        "event_conversion_type" => $event_conversion_type,
        "event_type" => $event_type,
        "hashed_email" => $hashed_email,
        "hashed_phone_number" => $hashed_phone_number,
        "hashed_ip_address" => $hashed_ip_address,
        "user_agent" => $user_agent,
        "device_model" => $device_model,
        "click_id" => $click_id
    ));

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://tr.snapchat.com/v2/conversion/validate',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $authorization_token
        ),
    ));

    $response = curl_exec($curl);
    $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if (curl_errno($curl)) {
        // Handle the error
        echo 'cURL error: ' . curl_error($curl);
    } elseif ($http_status !== 200) {
        // Handle non-200 responses
        echo 'API request failed with status code: ' . $http_status . ' Response: ' . $response;
    } else {
        // Success, return the response
        return $response;
    }

    curl_close($curl);
}

// Default values
$default_pixel_id = "77ec2e1e-c2bb-468f-8d2e-f99b7ec9983c";
$default_timestamp = "1724631976";
$default_event_conversion_type = "WEB";
$default_event_type = "SIGN_UP";
$default_hashed_email = "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d";
$default_hashed_phone_number = "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d";
$default_hashed_ip_address = "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d";
$default_user_agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X x.y; rv:42.0) Gecko/20100101 Firefox/42.0";
$default_device_model = "iPhone12Pro";
$default_click_id = "7b3a7917-a82a-47e8-9728-e1b3b045abb2";
$default_authorization_token = "eyJhbGciOiJIUzI1NiIsImtpZCI6IkNhbnZhc1MyU0hNQUNQcm9kIiwidHlwIjoiSldUIn0.eyJhdWQiOiJjYW52YXMtY2FudmFzYXBpIiwiaXNzIjoiY2FudmFzLXMyc3Rva2VuIiwibmJmIjoxNzI0NjIwODIzLCJzdWIiOiJhMTAzMjVhMi0zMzU1LTRkMjMtODhmOC04MmFmZTc3NzYzOTR-UFJPRFVDVElPTn4yNTZmYTNlNi1iZDhmLTQwMTctYTQ2MC0yYjU2OGI4MDJiMWQifQ.7-CnLhZlNw3mr9vkdWMMtVoUz0CONBGZibDPEOEo8Es";

// Retrieve variables from POST request or use default values
$pixel_id = $_POST['pixel_id'] ?? $default_pixel_id;
$timestamp = $_POST['timestamp'] ?? $default_timestamp;
$event_conversion_type = $_POST['event_conversion_type'] ?? $default_event_conversion_type;
$event_type = $_POST['event_type'] ?? $default_event_type;
$hashed_email = $_POST['hashed_email'] ?? $default_hashed_email;
$hashed_phone_number = $_POST['hashed_phone_number'] ?? $default_hashed_phone_number;
$hashed_ip_address = $_POST['hashed_ip_address'] ?? $default_hashed_ip_address;
$user_agent = $_POST['user_agent'] ?? $default_user_agent;
$device_model = $_POST['device_model'] ?? $default_device_model;
$click_id = $_POST['click_id'] ?? $default_click_id;
$authorization_token = $_POST['authorization_token'] ?? $default_authorization_token;

// Example usage
$response = sendSnapchatConversion($pixel_id, $timestamp, $event_conversion_type, $event_type, $hashed_email, $hashed_phone_number, $hashed_ip_address, $user_agent, $device_model, $click_id, $authorization_token);

echo $response;

?>
