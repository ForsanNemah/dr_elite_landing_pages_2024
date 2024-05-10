<?php
$filename = 'branches.txt'; // Replace with the actual path to your file

// Open the file for reading
$file = fopen($filename, 'r');

if ($file) {
    echo '<select name="branch" class="form-control mt-4 mb-4" dir="rtl">';
    
    // Read the file line by line
    while (($line = fgets($file)) !== false) {
        // Trim any leading/trailing whitespace from the line
        $line = trim($line);
        
        // Output an option tag for each line
        echo '<option  value="' . htmlspecialchars($line) . '">' . htmlspecialchars($line) . '</option>';
    }
    
    echo '</select>';
    
    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file.";
}
?>