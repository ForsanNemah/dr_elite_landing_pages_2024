<?php
// API Key from Google Cloud
$apiKey = 'AIzaSyCGl0x3QaZZGxbkG9piO_wa1iAuvmPQF3M';

// Get latitude, longitude, keyword, and radius from the form submission
$latitude = filter_var($_POST['latitude'], FILTER_VALIDATE_FLOAT);
$longitude = filter_var($_POST['longitude'], FILTER_VALIDATE_FLOAT);
$keyword = htmlspecialchars($_POST['keyword']); // Search by keyword
$radius = filter_var($_POST['radius'], FILTER_VALIDATE_INT);

// Validate inputs
if ($latitude === false || $longitude === false || $radius === false || empty($keyword)) {
    die('Invalid input. Please provide valid latitude, longitude, radius, and keyword.');
}

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

// Function to get places based on keywords from nearby locations
function getAllPlaces($latitude, $longitude, $keyword, $radius, $apiKey) {
    $allPlaces = [];
    $visitedPlaceIds = [];

    $coordinateAdjustments = [
        [0, 0],
        [0.1, 0],
        [0, 0.1],
        [-0.1, 0],
        [0, -0.1],
    ];

    foreach ($coordinateAdjustments as $adjustment) {
        $adjustedLatitude = $latitude + $adjustment[0];
        $adjustedLongitude = $longitude + $adjustment[1];

        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$adjustedLatitude,$adjustedLongitude&radius=$radius&keyword=" . urlencode($keyword) . "&key=$apiKey";

        do {
            $data = fetchDataFromApi($url);

            if ($data['status'] === 'OK') {
                foreach ($data['results'] as $place) {
                    $placeId = $place['place_id'];

                    if (!in_array($placeId, $visitedPlaceIds)) {
                        $visitedPlaceIds[] = $placeId;
                        $allPlaces[] = $place;
                    }
                }

                if (isset($data['next_page_token'])) {
                    sleep(2);
                    $nextPageToken = $data['next_page_token'];
                    $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken=$nextPageToken&key=$apiKey";
                } else {
                    break;
                }
            } else {
                break;
            }
        } while (true);
    }

    return $allPlaces;
}

// Fetch all places using the provided latitude, longitude, keyword, and radius
$allPlaces = getAllPlaces($latitude, $longitude, $keyword, $radius, $apiKey);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places Near Specified Location</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Places Near Specified Location (Keyword: <?= htmlspecialchars($keyword) ?>, Radius: <?= $radius ?> meters)</h2>
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
        $id = 1;
        foreach ($allPlaces as $place) {
            $placeId = $place['place_id'];
            $details = fetchDetailsForPlace($placeId, $apiKey);

            if ($details['status'] === 'OK') {
                $placeDetails = $details['result'];
                $mapUrl = "https://www.google.com/maps/search/?api=1&query=Google&query_place_id=" . $placeId;

                echo '<tr>';
                echo '<td>' . $id++ . '</td>';
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
