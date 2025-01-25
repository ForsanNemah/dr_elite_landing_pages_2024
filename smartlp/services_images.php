<div id="services_id" class="mb-4">
    <br>
    <br>
</div>

<div class="mt-4 text-center">
    <h1>
    </h1>
</div>

<section>
    <div class="container">
        <div class="row">
            <?php
            $folderPath = 'intshar_images/'; // Path to your folder

            $files = scandir($folderPath); // Get all files and directories from the folder

            $imageFiles = array();

            // Loop through the files and filter image files
            foreach ($files as $file) {
                $filePath = $folderPath . '/' . $file;

                // Check if the file is a regular file and ends with a known image extension
                if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                    $imageFiles[$file] = filemtime($filePath); // Store the file and its modification time
                }
            }

            // Function to extract numeric part from filenames
            function extractNumber($filename) {
                if (preg_match('/\d+/', $filename, $matches)) {
                    return (int)$matches[0]; // Return the numeric part as an integer
                }
                return PHP_INT_MAX; // Return a large number if no numeric part is found
            }

            // Sort files by the numeric part of their filenames
            uksort($imageFiles, function ($a, $b) {
                return extractNumber($a) <=> extractNumber($b);
            });

            // Output the sorted image file names
            foreach ($imageFiles as $image => $modificationTime) {
                echo '
                <div class="col-md-4" data-aos-duration="1500" data-aos="zoom-in-up">
                    <div class="service">
                        <img src="intshar_images/' . $image . '" alt="Service Image" class="img-fluid">
                        <h3> </h3>
                        <p contenteditable="true"> </p>
                    </div>

                    <a href="#order_section" class="col-6">
                        <button class="mb-5 btn btn-danger btn-lg pulsate"> حجز استشارة مجانية    </button>
                    </a>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</section>
