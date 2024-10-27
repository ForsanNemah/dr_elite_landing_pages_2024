<?php
// Check if 'placeid' is provided in the URL parameters
if (isset($_GET['placeid'])) {
    $placeId = $_GET['placeid'];
    // Construct the URL for the Google review page
    $url = "https://search.google.com/local/writereview?placeid=" . urlencode($placeId);
    
    // Redirect to the Google review page
    header("Location: $url");
    exit();
} else {
    // If no 'placeid' parameter is provided, show an error message
    echo "Error: placeid is required.";
}
?>
