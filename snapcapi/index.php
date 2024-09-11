<?php




function getSnapchatCampaigns($accessToken, $adAccountId) {
    $url = "https://adsapi.snapchat.com/v1/adaccounts/{$adAccountId}/campaigns";

    $headers = [
        "Authorization: Bearer $accessToken",
        "Content-Type: application/json"
    ];

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        return null;
    }

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $decodedResponse = json_decode($response, true);

    // Debugging: Print the raw response for inspection
    echo "Raw Response:\n";
    print_r($decodedResponse);

    // Check for errors in the API response
    if (isset($decodedResponse['request_status']) && $decodedResponse['request_status'] !== 'SUCCESS') {
        echo 'API Error: ' . $decodedResponse['message'];
        return null;
    }

    // Return the list of campaigns
    return $decodedResponse['campaigns'] ?? [];
}

// Example usage:
$accessToken = "YOUR_ACCESS_TOKEN"; // Replace with your Snapchat access token
$adAccountId = "YOUR_AD_ACCOUNT_ID"; // Replace with your Snapchat Ad Account ID
$campaigns = getSnapchatCampaigns($accessToken, $adAccountId);

if ($campaigns) {
    echo "Campaigns fetched successfully:\n";
    print_r($campaigns);
} else {
    echo "Failed to fetch campaigns.\n";
}






?>