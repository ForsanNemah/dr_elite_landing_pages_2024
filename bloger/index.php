<?php 















function getBloggerBlogs($apiKey) {
    // API endpoint
    $url = "https://www.googleapis.com/blogger/v3/users/self/blogs?key=" . urlencode($apiKey);

    // Initialize cURL
    $ch = curl_init();

    // cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, true);

    // Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        $error = curl_error($ch);
        curl_close($ch);
        return "cURL Error: " . $error;
    }

    // Close cURL
    curl_close($ch);

    // Decode JSON response
    $data = json_decode($response, true);

    // Check if the response contains blogs
    if (isset($data['items'])) {
        return $data['items']; // Return the list of blogs
    } elseif (isset($data['error'])) {
        return "API Error: " . $data['error']['message'];
    } else {
        return "No blogs found or an unexpected error occurred.";
    }
}

// Example usage
$apiKey = "AIzaSyCEZXbqQvXAFxDIfJybXVVQcTGWQ1mn7Bk";
$blogs = getBloggerBlogs($apiKey);

if (is_array($blogs)) {
    echo "Blogs found:\n";
    foreach ($blogs as $blog) {
        echo "Blog Name: " . $blog['name'] . "\n";
        echo "Blog URL: " . $blog['url'] . "\n";
        echo "Blog Description: " . $blog['description'] . "\n\n";
    }
} else {
    echo $blogs; // Display error or message
}
















?>