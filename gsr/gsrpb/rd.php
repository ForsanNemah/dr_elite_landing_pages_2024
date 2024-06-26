<?php
function removeDuplicateObjectsByPhoneNumber($url) {
    // Step 1: Fetch the data
    $data = file_get_contents($url);

    // Step 2: Parse the data
    $array = json_decode($data, true);

    // Step 3: Remove duplicate objects by phone number
    $uniqueArray = [];
    $phoneNumbers = [];

    foreach ($array as $object) {
        $phoneNumber = $object['phone'];

        if (!in_array($phoneNumber, $phoneNumbers)) {
            $uniqueArray[] = $object;
            $phoneNumbers[] = $phoneNumber;
        }
    }

    // Step 4: Return the unique array
    return $uniqueArray;
}

// Usage example
$url = "https://opensheet.elk.sh/1LzoHCJvGljYG_nv8hfRVJHf27Ly2x43FriaDnBDUe0s/Sheet1";
$arraySizeBefore = count(json_decode(file_get_contents($url), true));
$uniqueArray = removeDuplicateObjectsByPhoneNumber($url);
$arraySizeAfter = count($uniqueArray);

echo "Array size before: " . $arraySizeBefore . "\n";
echo "Array size after: " . $arraySizeAfter . "\n";
//print_r($uniqueArray);
?>