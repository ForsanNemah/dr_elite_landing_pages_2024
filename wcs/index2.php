<?php
// Input and output file paths
$inputFile = 'data.txt';  // Path to the input text file
$outputFile = 'output.txt'; // Path to the output text file

// Open input file for reading
$inputHandle = fopen($inputFile, 'r');

// Open output file for writing
$outputHandle = fopen($outputFile, 'w');

// Check if the input file was opened successfully
if ($inputHandle) {
    // Loop through each line in the input file
    while (($line = fgets($inputHandle)) !== false) {
        // Match the pattern for "id": "xxxxxxxxx@c.us"
        if (preg_match('/"id": "(\d+)@c\.us"/', $line, $matches)) {
            // Extract the xxxxxxxxx value (which is the first capturing group)
            $id = $matches[1];
            // Write the extracted value to the output file
            fwrite($outputHandle, $id . PHP_EOL);
        }
    }

    // Close the input file
    fclose($inputHandle);

    // Close the output file
    fclose($outputHandle);

    echo "Extraction complete. Check the output file.";
} else {
    echo "Error opening the input file.";
}
?>
