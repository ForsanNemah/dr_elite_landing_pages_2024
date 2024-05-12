<div class="form-group " dir="rtl">
                                        <select name="branch" id="" class="form-control" aria-label="عرض زراعة الأسنان" required>

        


                                        <?php


$filename = 'branches.txt';

// Open the file for reading
$file = fopen($filename, 'r');

// Check if the file was opened successfully
if ($file) {
    // Read each line of the file
    while (($line = fgets($file)) !== false) {
        // Process the line
        echo $line;


        echo "<option value='$line'>$line</option>";
    }

    // Close the file
    fclose($file);
} else {
    // Handle the case when the file couldn't be opened
    echo "Failed to open the file.";
}



?>




                                        </select>
                                    </div>
