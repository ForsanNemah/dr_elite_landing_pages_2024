<?php
// API Key from Google Cloud
$apiKey = 'AIzaSyBv8NC7um1-UbI1eRUBMdAzlBwaUJleVzM';

// Get latitude, longitude, type, and radius from the form submission
$latitude = $_POST['latitude']; // Example latitude
$longitude = $_POST['longitude']; // Example longitude
$type = $_POST['type']; // Example type, e.g., 'hospital', 'restaurant', etc.
$radius = $_POST['radius']; // Radius posted from the form

// Function to perform the API request
function fetchDataFromApi($url) {
    $response = file_get_contents($url);
    return json_decode($response, true);
}

// Function to fetch details for a specific place using the Place Details API
function fetchDetailsForPlace($placeId, $apiKey) {
    $detailsUrl = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,vicinity,formatted_phone_number,website&key=$apiKey";
    $response = file_get_contents($detailsUrl);
    return json_decode($response, true);
}

// Function to get places of a specific type from different nearby locations
function getAllPlaces($latitude, $longitude, $type, $radius, $apiKey) {
    $allPlaces = []; // Array to store all results
    $visitedPlaceIds = []; // To avoid duplicates

    // Coordinates adjustment to fetch more results
    $coordinateAdjustments = [
        [0, 0], // Original location
        [0.1, 0], // Slightly north
        [0, 0.1], // Slightly east
        [-0.1, 0], // Slightly south
        [0, -0.1], // Slightly west
    ];

    foreach ($coordinateAdjustments as $adjustment) {
        $adjustedLatitude = $latitude + $adjustment[0];
        $adjustedLongitude = $longitude + $adjustment[1];

        // Build the Google Places API URL with the radius parameter from the form
        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$adjustedLatitude,$adjustedLongitude&radius=$radius&type=$type&key=$apiKey";

        do {
            // Fetch data from the API
            $data = fetchDataFromApi($url);

            // Check if the request was successful
            if ($data['status'] === 'OK') {
                // Loop through each result
                foreach ($data['results'] as $place) {
                    $placeId = $place['place_id'];

                    // Avoid duplicates by checking place_id
                    if (!in_array($placeId, $visitedPlaceIds)) {
                        $visitedPlaceIds[] = $placeId;
                        $allPlaces[] = $place; // Add unique places
                    }
                }

                // Check if there is a next page of results
                if (isset($data['next_page_token'])) {
                    sleep(2); // Google recommends a short delay before making the next request
                    $nextPageToken = $data['next_page_token'];
                    $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken=$nextPageToken&key=$apiKey";
                } else {
                    break;
                }
            } else {
                break; // Exit if there was an error
            }
        } while (true);
    }

    return $allPlaces;
}

// Fetch all places using the provided latitude, longitude, type, and radius
$allPlaces = getAllPlaces($latitude, $longitude, $type, $radius, $apiKey);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places Near Specified Location</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Places Near Specified Location (Radius: <?= $radius ?> meters)</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Website</th>
            <th>Location on Map</th>
        </tr>
        </thead>
        <tbody>

        <?php
        // Initialize the incremental ID
        $id = 1;

        // Loop through each place to fetch details
        foreach ($allPlaces as $place) {
            $placeId = $place['place_id'];
            $details = fetchDetailsForPlace($placeId, $apiKey);

            // Check if the request for place details was successful
            if ($details['status'] === 'OK') {
                $placeDetails = $details['result'];
                $mapUrl = "https://www.google.com/maps/search/?api=1&query=Google&query_place_id=" . $placeId; // Google Maps URL with place_id

                echo '<tr>';
                echo '<td>' . $id++ . '</td>'; // Incremental ID
                echo '<td>' . ($placeDetails['name'] ?? 'N/A') . '</td>';
                echo '<td>' . ($placeDetails['vicinity'] ?? 'N/A') . '</td>';
                echo '<td>' . ($placeDetails['formatted_phone_number'] ?? 'N/A') . '</td>';
                echo '<td><a href="' . ($placeDetails['website'] ?? '#') . '" target="_blank">' . ($placeDetails['website'] ?? 'N/A') . '</a></td>';
                echo '<td><a href="' . $mapUrl . '" target="_blank">View on Map</a></td>';
                echo '</tr>';
            } else {
                echo '<tr>';
                echo '<td colspan="6">Error fetching details for place ID: ' . $placeId . '</td>';
                echo '</tr>';
            }
        }
        ?>

        </tbody>
    </table>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
