<?php
// File paths
$inputFile = 'data.txt';  // The file you are reading from
$outputFile = 'jid_output.txt';  // The file you are writing to

// Open the input file in read mode
$inputHandle = fopen($inputFile, 'r');

// Open (or create) the output file in write mode
$outputHandle = fopen($outputFile, 'w');

if ($inputHandle) {
    // Loop through the file line by line
    while (($line = fgets($inputHandle)) !== false) {
        // Use a regular expression to match the JID pattern with "@c.us"
        if (preg_match('/"JID":\s*"([^"]+@c\.us)",/', $line, $matches)) {
            // Extract the JID value (from the regex capture group)
            $jidValue = $matches[1];
            // Remove "@c.us" from the JID value
            $jidValueWithoutDomain = str_replace('@c.us', '', $jidValue);
            // Write the cleaned JID value to the output file
            fwrite($outputHandle, $jidValueWithoutDomain . PHP_EOL);
        }
    }
    // Close both file handlers
    fclose($inputHandle);
    fclose($outputHandle);
    echo "JID values have been extracted, cleaned, and written to $outputFile.";
} else {
    echo "Error opening the input file.";
}
?>
